<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checklist;
use App\Models\Teacher;

use function GuzzleHttp\Promise\all;

class ChecklistsController extends Controller
{
    public function user(){
        
        $checklists = Checklist::orderBy('created_at', 'desc')->get();
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        
        return view('checklists.user', $data, ['checklists'=>$checklists]);
    }

    public function showchecklist($id){
        
        $checklists = Checklist::find($id);
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.showchecklist', $data, ['checklists'=>$checklists]);
    }

    public function newchecklist()
    {  
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.newchecklist', $data);
    }

    public function deletechecklist($id)
    {  

        Checklist::where('id', $id)->delete();

        return redirect('/user')->with('success', 'Checklist was successfully deleted');
    }

    public function savechecklist(Request $request)
    {

        #return $request->input();

        $request->validate([
            'title' => 'required',
            'strand' => 'required',
            'grade' => 'required',
            'schedule' => 'required',
            'late' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

       
        $checklist = new Checklist();

        $checklist->title = $request->title;
        $checklist->strand = $request->strand;
        $checklist->schedule = $request->schedule;
        $checklist->late = $request->late;
        $checklist->grade = $request->grade;
        $checklist->start = $request->start;
        $checklist->end = $request->end;

        $save = $checklist->save();
      
        if($save){
            return back()->with('success', 'New checklist has been created.');
        }
    }
}
