<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Students;
use App\Models\Checklist;
use App\Models\AdClass;

use Illuminate\Support\Facades\Cache;

use Maatwebsite\Excel\Facades\Excel;



class AdvisoryClassController extends Controller
{
   
    public function user(){
        
        $user = session('LoggedUser');

        $onlineUsers = Teacher::limit(5)->orderBy('last_seen', 'desc')->get();

        $checklists = Checklist::where('user', $user)->orderBy('created_at', 'desc')->get();
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        
        return view('checklists.user', $data, compact('checklists', 'onlineUsers'));
    }
    

    public function adclass(Request $request){

        $user = session('LoggedUser');

        $onlineUsers = Teacher::limit(5)->orderBy('last_seen', 'desc')->get();

        $outputs = AdClass::where('user', $user)->orderBy('created_at', 'desc')->get();

        $class = '1ICT CSSGrade 12';

        $students = Students::where('classTitle', $class )->get();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.adclass', $data, compact('onlineUsers', 'outputs', 'students'));
    
    }
    public function newadclass(){
        

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.newadclass', $data);
    }

    public function saveAdClass(Request $request) {

        $request->validate([
            'grade' => 'required',
            'strand' => 'required'
        ]);

        $input = new AdClass();

        $user = session('LoggedUser');

        $name = session('LoggedName');

        $profile = session('LoggedProfile');

        $strand = $request->strand;
        $grade = $request->grade;

        $compTitle = $user.''.$strand.''.$grade;

        $check = AdClass::where('classTitle','=',$compTitle)->first();

        if($check){
            return back()->with('fail', 'Class already exist');
        }

        $input->gradeLevel = $grade;
        $input->strand = $strand;
        $input->user = $user;
        $input->classTitle = $compTitle;
        $input->profile = $profile;
        $input->name = $name;
        $input->reports = 'None';

        $save = $input->save();

        if($save){
            return redirect('/adclass')->with('success', 'New advisory class has been created.');
        }

    }

    public function showadclass(Request $request, $id){        
        

      

        $user = session('LoggedUser');

        $outputs = AdClass::find($id);

        $class = $outputs->classTitle;

        Cache::put('classTitle', $class );

        $outputSide = AdClass::where('user', $user)->orderBy('created_at', 'desc')->get();

        $students = Students::where('classTitle', $class)->orderBy('created_at', 'desc')->get();

        $search = $request->input('search');
    
        if($search){
            $students = Students::
            where('name', 'LIKE', "%{$search}%")
            ->where('classTitle', $class)
            ->orderBy('created_at', 'desc')
            ->get();
        }

        if($outputs->user != session('LoggedUser')){
            return back();
        }

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.showadclass', $data, compact('students', 'outputs', 'outputSide', 'search'));
    }

    public function updateClassAd(Request $request, $id){

        $request->validate([
            'grade' => 'required',
            'strand' => 'required'
        ]);

        $user = session('LoggedUser');

        $class = Adclass::find($id);
        $grade = $request->grade;
        $strand = $request->strand;
        $classTitle = $user.''.$strand.''.$grade;

        $check = AdClass::where('classTitle','=',$classTitle)->first();

        if($check){
            return back()->with('fail', 'Class already exist');
        }

        $class->gradeLevel = $grade;
        $class->strand = $strand;
        $class->classTitle = $classTitle;

        $class->update();

        return back()->with('success', 'Updated successfully');
         

    }

    public function deleteClass($id){
        
        Adclass::find($id)->delete();

        return redirect('/adclass')->with('success', 'Advisory class has been removed');

    }

    public function deleteStudentAd($id){

        Students::find($id)->delete();

        return back()->with('success', 'Deleted successfully');
    }

    public function clearList($id){

      
        $outputs = AdClass::find($id);

        $class = $outputs->classTitle;

        Students::where('classTitle', $class)->delete();


        return back()->with('success', 'Class has been cleared, you can now upload new list');

    }

    public function addstudent(){

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.addstudent',  $data);
    }

    public function savestudent(Request $request, $id){

        $this->validate($request, [
            'idNum' => 'required',
            'name' => 'required'
        ]);

    $student = new Students();
    
    $class = AdClass::find($id);
    $classTitle = $class->classTitle;
    
    $user = session('LoggedUser');
    
    $studentTitle = $request->idNum;

    $compTitle = $user.''.$studentTitle.''.$classTitle;

    $check = Students::where('student','=',$compTitle)->first();

    if($check){

        return back()->with('fail', 'Student already exist');

    }

    $student->idNum = $request->idNum;
    $student->name = strtoupper($request->name);
    $student->email = $request->email;
    $student->guardian = $request->guardian;
    $student->guardianemail = $request->guardianemail;
    $student->user = $user;
    $student->classTitle = $classTitle;
    $student->student = $user.''.$studentTitle.''.$classTitle;
    
    $save = $student->save();
  
    if($save){
        return back()->with('success', 'New student has been added.');
    }

}

public function importStudent(Request $request) {

    $request->validate([
        
        'file'=>'required',
      
    ]);
    
    
    try {
        Excel::import(new StudentsImport(), $request->file);
        }
        catch(\Exception $ex) {
            return back()->with('fail', 'Please recheck the file before importing');
    
        }
    
       
        return back()->with('success', 'Student list has been uploaded');
   
}


}
