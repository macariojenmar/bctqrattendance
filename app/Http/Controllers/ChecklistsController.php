<?php

namespace App\Http\Controllers;

use App\Models\AdClass;
use App\Models\Attendances;
use Illuminate\Http\Request;
use App\Models\Checklist;
use App\Models\Students;
use App\Models\Subjects;
use App\Models\Teacher;
use App\Models\ChecklistStudent;
use Illuminate\Support\Facades\Cache;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ChecklistsController extends Controller
{

  public function user(Request $request){ 

    $user = session('LoggedUser');

   
    
    $onlineUsers = Teacher::limit(5)->orderBy('last_seen', 'desc')->get();

    $checklists = Checklist::where('user', $user)->orderBy('created_at', 'desc')->get();

    $dropped = Attendances::where('user', $user)
    ->where('status', 'Absent')
    ->count('idNumber');

    $search = $request->input('search');

    if($search){
        $checklists = Checklist::
        where('subject', 'LIKE', "%{$search}%")
        ->where('user', $user)
        ->orderBy('created_at', 'desc')
        ->get();
    }


    $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

    return view('checklists.user', $data, compact('checklists', 'onlineUsers', 'dropped', 'search'));

  }

  public function absences(){  

    $user = session('LoggedUser');

    $dropped = Attendances::where('status', 'Absent')
    ->where('user', $user)
    ->select('idNumber','name', 'subjectTitle', Attendances::raw('count(*) as absent'))
    ->groupBy('idNumber', 'name', 'subjectTitle')
    ->orderBy('created_at', 'desc')
    ->get('absent');

    $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

    return view('checklists.absences', $data, compact('dropped'));

  }

    public function showchecklist(Request $request, $id){

        
        try{

        $user = session('LoggedUser');

        $checklists = Checklist::find($id);

        $checklistStudents = ChecklistStudent::where('subjectTitle', $checklists->subjectTitle)->orderBy('created_at', 'desc')->get();
        
        $attendances = Attendances::where('subjectTitle', $checklists->subjectTitle)->get();

        $outputSide = Checklist::where('user', $user)->orderBy('created_at', 'desc')->get();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        
        $search = $request->input('search');

        $subjects = Subjects::all();
    
        if($search){
            $checklistStudents = ChecklistStudent::
            where('idNumber', 'LIKE', "%{$search}%")
            ->where('subjectTitle', $checklists->subjectTitle)
            ->orderBy('created_at', 'desc')
            ->get();
        }


        if($checklists->user != session('LoggedUser')){
            return back();
        }
        return view('checklists.showchecklist', $data, compact('checklists', 'checklistStudents', 'search', 'outputSide', 'subjects', 'attendances' ));
    }catch(\Exception $ex){
        return back();

    }
    }

    public function deleteStudentChk($id){

        ChecklistStudent::find($id)->delete();

        return back()->with('success', 'Deleted successfully');
    }

    public function newchecklist()
    {  

        $subjects = Subjects::all();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.newchecklist', $data, compact('subjects'));
    }

  

    public function deletechecklist($id)
    {  
        $id = Checklist::find($id);

       
        $subjectTitle = $id->subjectTitle;

        Attendances::where('subjectTitle', $subjectTitle)->delete();

        ChecklistStudent::where('subjectTitle', $subjectTitle)->delete();

        Checklist::where('subjectTitle', $subjectTitle)->delete();

        return redirect('/user')->with('success', 'Checklist was successfully deleted including attendances and students in it');
    }

    public function subjectqr($id)
    {  

        $checklists = Checklist::find($id);

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.subjectqr', $data, compact('checklists'));
    }

    public function startCheckQR(Request $request, $id) {

        //Code

        $codeLength = 6;
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
        $code = substr(str_shuffle($str), 0, $codeLength);
        
        date_default_timezone_set("Asia/Manila");
        $date = date("Y").''.date("m").''.date("d");

        $checklists = Checklist::find($id);

        $checklists->code = $date.''.$code;
        $checklists->status = "Active";
     
        $save = $checklists->update();

        if($save){
            return back();
        }
    }

    public function endCheckQR($id) {

        //Code

        $checklists = Checklist::find($id);

        $checklists->code = "None";
        $checklists->status = "Offline";
     
        $save = $checklists->update();

        if($save){
            return redirect()->to('summary/'.$id);
        }
      
    }

    public function savechecklist(Request $request){

        #return $request->input();

        $request->validate([
            'subject' => 'required',
            'strand' => 'required',
            'grade' => 'required',
            'schedule' => 'required',
            'late' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

       
        $checklist = new Checklist();

        $user = session('LoggedUser');
        $strand = $request->strand;
        $subject = $request->subject;
        $compTitle = $user.''.$strand.'-'.$subject;
        $start = $request->start;
        $schedule = $request->schedule;

        $checklist->user = $user;
        $checklist->subjectTitle = $compTitle;
        $checklist->subject = $request->subject;
        $checklist->strand = $request->strand;
        $checklist->late = $request->late;
        $checklist->grade = $request->grade;
        $checklist->start = $request->start;
        $checklist->schedule = $request->schedule;
        $checklist->end = $request->end;
        $checklist->status = 'Offline';
        $checklist->code = 'None';

        $checkSubject = Checklist::where('subjectTitle','=',$compTitle)->first();

        if( $checkSubject){
            return back()->with('fail', 'Subject already exist');
        }

        $checkUser = Checklist::where('user','=',$user)->first();
        
        $checkTime = Checklist::where('start','=',$start)->first();
        $checkDate = Checklist::where('schedule','LIKE',$schedule)->first();

        if($checkUser){
            if($checkTime){

                if($checkDate){
                return back()->with('fail', 'Schedule conflict, date & time already exist');
                }
            }
        }

    
        $save = $checklist->save();

        if($save){
            return redirect('/user')->with('success', 'New subject has been created.');
        }
    }

    public function updateChecklist(Request $request, $id){

        $request->validate([
            'grade' => 'required',
            'strand' => 'required',
            'end' => 'required',
            'subject' => 'required',
            'schedule' => 'required',
            'late' => 'required'
        ]);

        $user = session('LoggedUser');

        $class = Checklist::find($id);
        $strand = $request->strand;
        $subject = $request->subject;
        $subjectTitle = $user.''.$strand.''.$subject;

        $check = Checklist::where('subjectTitle','=',$subjectTitle)->first();

        if($check){
            return back()->with('fail', 'Checklist already exist');
        }

        $class->grade = $request->grade;
        $class->strand = $strand;
        $class->subject = $subject;
        $class->start = $request->start;
        $class->end = $request->end;
        $class->late = $request->late;
       

        $class->update();

        return back()->with('success', 'Updated successfully');
         

    }

    public function addstudent(Request $request){ 

        $outputs = AdClass::orderBy('created_at', 'desc')->get();

        $search = $request->input('search');
    
        if($search){
            $outputs = AdClass::
            where('name', 'LIKE', "%{$search}%")
            ->orwhere('strand', 'LIKE', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->get();
        }

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
    
        return view('checklists.addstudent', $data, compact('outputs', 'search'));
    
      }

      public function showstudentlist(Request $request, $id){ 

        $user = session('LoggedUser');

        $selected = AdClass::where('classTitle', $id)->first();

        $checklists = Checklist::where('user', $user)->orderBy('created_at', 'desc')->get();

        $students = Students::where('classTitle', $id)->orderBy('created_at', 'desc')->get();

        $search = $request->input('search');
    
        if($search){
            $students = Students::
            where('name', 'LIKE', "%{$search}%")
            ->where('classTitle', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        }

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
    
        return view('checklists.showstudentlist', $data, compact('selected', 'students', 'checklists', 'search'));
    
      }

      public function copyStudent(Request $request){ 

        //return $request->student;

        $user = session('LoggedUser');
        $data = $request->student;

        $i = 0;

        try{

        foreach($data as $data) {

        $student = new ChecklistStudent();
        $studIDNumber = $request->student[$i];
        $student->idNumber = $studIDNumber;
        $student->user = $user;
        $student->subjectTitle =  $user.''.$request->subjectTitle;
        $compTitle =  $studIDNumber.''.$user.''.$request->subjectTitle;

        $check = ChecklistStudent::where('compTitle','=',$compTitle)->first();

        if($check){
            return back()->with('fail', 'Duplicated students');
        }

        $student->compTitle = $compTitle;
       
        $save = $student->save();
        
        $i++;

        }
        }
        catch(\Exception $ex) {
            return back()->with('fail', 'Please select at least 1 student');
        }
        
        if($save){
            return redirect('/user')->with('success', 'Students has been copied to your subject checklist');
         }

      }

      public function student($id2, $id){

        $checklists = Checklist::find($id2);

        $selected = ChecklistStudent::where('idNumber', $id)->first();

        $studentInfo = Students::where('idNum', $id)->first();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.student', $data, compact('selected', 'studentInfo', 'checklists'));

      }

      public function scanqr($id)
      {  

        
          $checklists = Checklist::find($id);

  
          $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
  
          return view('checklists.scanqr', $data, compact('checklists'));
      }

      public function saveAttendance(Request $request){

        $user = session('LoggedUser');

        $input = new Attendances();

        date_default_timezone_set("Asia/Manila");

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $date = $month.' '.$day.', '.$year.' '.$dayName;
        $time = date("g:ia");

        $idNumber = $request->input('idNumber');
        $checklistID = $request->input('checklistID');
        

        $checklist = Checklist::where('id', $checklistID)->first();

        $subjectTitle = $checklist->subjectTitle;
      
        $checklistStudents = ChecklistStudent::
        where('subjectTitle', $subjectTitle)
        ->where('idNumber', $idNumber)
        ->get();

        if($checklistStudents == '[]'){
            return response()->json([
                'status'=>400,
                //'message'=> $checklistStudents,
                
            ]);
        }

        $checkDupllicate = Attendances::
        where('date', $date)->where('idNumber', $idNumber)
        ->where('subjectTitle', $subjectTitle)
        ->first();

        if($checkDupllicate){
            return response()->json([
                'status'=>500,
                //'message'=> $checkDupllicate,
                
            ]);
        }
       
        $input->idNumber = $idNumber;
        $input->subjectTitle = $subjectTitle;
        $input->date = $date;
        $input->time = $time;
        $input->day = $dayName;
        $input->user = $user;
        
        $select = Students::where('idNum', $idNumber)->first();
   
        $name = $select->name;
        $email = $select->email;

        $input->name = $name;
        
        $lateTimer = $request->input('time');

        if($lateTimer == "Done"){

            $input->status = 'Late';

        }
        else{
            $input->status = 'Present';
        }
       
       
        $input->save();

        return response()->json([
            'status'=>200,
            'name'=>$name,
            'time'=>$time,
            'date'=>$date,
            'message'=> $checklistStudents,
            
        ]);
      }

      public function summary($id)
      {  

        $user = session('LoggedUser');

        date_default_timezone_set("Asia/Manila");

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $date = $month.' '.$day.', '.$year.' '.$dayName;

        $checklist = Checklist::where('id', $id)->first();

        $subjectTitle = $checklist->subjectTitle;

        $absents = ChecklistStudent::select('idNumber', 'subjectTitle')->whereNotIn('idNumber', Attendances::where('subjectTitle', $subjectTitle)->where('date', $date)->get('idNumber', 'subjectTitle', 'date'))->where('subjectTitle', $subjectTitle)->get();
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        foreach($absents as $absent){

            $input = new Attendances();

            $studID = $absent->idNumber;
            $input->idNumber = $studID;
            $input->date = $date;
            $input->status = 'Absent';
            $input->time = 'None';
            $input->day = $day;
            $input->user = $user;

          

            $input->subjectTitle =  $subjectTitle;

            $select = Students::where('idNum', $studID)->first();
            
            $name = $select->name;

            $input->name = $name;

            $input->save();
            
        }

        $attendances = Attendances::
        where('date', $date)
        ->where('subjectTitle', $subjectTitle)
        ->orderBy('name', 'asc')
        ->get();
        
        $present = Attendances::
        where('date', $date)
        ->where('subjectTitle', $subjectTitle)
        ->where('status', 'Present')
        ->get();

        $absent = Attendances::
        where('date', $date)
        ->where('subjectTitle', $subjectTitle)
        ->where('status', 'Absent')
        ->get();

        $late = Attendances::
        where('date', $date)
        ->where('subjectTitle', $subjectTitle)
        ->where('status', 'Late')
        ->get();

        $countPresent = count($present);
        $countAbsent = count($absent);
        $countLate = count($late);

    
        return view('checklists.summary', $data, compact('attendances', 'absents', 'checklist', 'countPresent', 'countAbsent', 'countLate'));

      }

     public function saveUpdateAttendance(Request $request, $id){

        $attendances = Attendances::find($id);

        $attendances->status = $request->status;
        $updated = $attendances->update();


        if($updated){
            return back()->with('success', 'Updated successfully');
         }
        
     }

     public function reset($id){

        date_default_timezone_set("Asia/Manila");

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $date = $month.' '.$day.', '.$year.' '.$dayName;

        $checklist = Checklist::where('id', $id)->first();

        $subjectTitle = $checklist->subjectTitle;

        Attendances::where('date', $date)->where('subjectTitle', $subjectTitle)->delete();


        return redirect()->route('checklist.showchecklist', [$id])->with('success', 'Attendance has been reset, you can check again');

        
     }

     public function sendEmail($id){

        $checklist = Checklist::find($id);

        date_default_timezone_set("Asia/Manila");

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $date = $month.' '.$day.', '.$year.' '.$dayName;

        $checklist = Checklist::where('id', $id)->first();

        $subjectTitle = $checklist->subjectTitle;

        $students = Attendances::where('subjectTitle', $subjectTitle)->where('date', $date)->get();
        
        $time = $checklist->start.'-'.$checklist->end;
        $subject = $checklist->subject;

        foreach($students as $student){

           
            $studentID = $student->idNumber;

            $select = Students::where('idNum', $studentID)->first();

            $status = $student->status;

            $name = $select->name;
            $email = $select->email;
            $gemail = $select->guardianemail;

            if($status == 'Absent'){
                $body = '<div style="padding: 10px; background-color: #F2F3F4; text-align: center; border-radius: 20px; font-family: Arial;"><h2>Good day! Attendance report from Baguio College of Technology</h2><h1><b>'.''.$name.''.'</b></h1><h3>was <span style="color: #EC7063"><b>ABSENT</b></span> today to his/her class</h3><h3>'.''. $subject.' '. $time.''.'</h3></div>';
               
            }
            if($status == 'Present'){
                $body = '<div style="padding: 10px; background-color: #F2F3F4; text-align: center; border-radius: 20px; font-family: Arial;"><h2>Good day! Attendance report from Baguio College of Technology</h2><h1><b>'.''.$name.''.'</b></h1><h3>was <span style="color: #239B56"><b>PRESENT</b></span> today to his/her class</h3><h3>'.''. $subject.' '. $time.''.'</h3></div>';
               
            }
            if($status == 'Late'){
                $body = '<div style="padding: 10px; background-color: #F2F3F4; text-align: center; border-radius: 20px; font-family: Arial;"><h2>Good day! Attendance report from Baguio College of Technology</h2><h1><b>'.''.$name.''.'</b></h1><h3>was <span style="color: #F1C40F"><b>LATE</b></span> today to his/her class</h3><h3>'.''. $subject.' '. $time.''.'</h3></div>';
                
            }

            $mail=new PHPMailer();
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->SMTPAuth="true";
            $mail->SMTPSecure="tls";
            $mail->Port="587";
            $mail->Username="macariojenmar@gmail.com";
            $mail->Password="01052018Pazzword";
            $mail->isHTML(true);    
            $mail->Subject='Good day from BCT attendance!';
            $mail->Body=$body;
            $mail->setFrom('macariojenmar@gmail.com', 'BCT Attendance');

            $mail->addAddress($email);
            $mail->addAddress($gemail);
        
            $mail->Send();
            $mail->smtpClose();

        }

        return redirect()->route('checklist.showchecklist', [$id])->with('success', 'Emails has been sent');

      
    }

    public function report(Request $request, $id){

        $checklists = Checklist::find($id);

        $subjectTitle = $checklists->subjectTitle;

        $month = $request->input('month');

        $date = $request->input('date');

        //$outputs = Attendances::where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->select('idNumber', 'name')->distinct()->get();
        
        //$outputs = Attendances::where('status', 'Present')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->get();

        $presents = Attendances::where('status', 'Present')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)
        ->select('idNumber','name', Attendances::raw('count(*) as present'))
        ->groupBy('idNumber', 'name')
        ->get('present');

        $absents = Attendances::where('status', 'Absent')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)
        ->select('idNumber','name', Attendances::raw('count(*) as absent'))
        ->groupBy('idNumber', 'name')
        ->get('absent');


        $lates = Attendances::where('status', 'Late')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)
        ->select('idNumber','name', Attendances::raw('count(*) as late'))
        ->groupBy('idNumber', 'name')
        ->get('late');

        $absentCounter = Attendances::where('status', 'Absent')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->count();

        $presentCounter = Attendances::where('status', 'Present')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->count();

        $lateCounter = Attendances::where('status', 'Late')->where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->count();

        $total = Attendances::where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->count();

        $dateChecked = Attendances::where('date', 'LIKE', "%{$month}%")->where('subjectTitle', $subjectTitle)->select('date')->distinct('date')->count();


        if($presentCounter ){
        $percentage = ($presentCounter / $total) * 100;
        }
        else {
            $percentage = 0;
        }


        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.report', $data, compact('checklists', 'presents', 'month', 'date', 'absentCounter', 'presentCounter', 'lateCounter', 'lates', 'percentage', 'dateChecked', 'absents'));
    }

    public function editreport(Request $request, $id){

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $today = $month.' '.$day.', '.$year.' '.$dayName;

        $checklists = Checklist::find($id);
        
        $date = $request->input('date');
        
        $checklist = Checklist::where('id', $id)->first();

        $subjectTitle = $checklist->subjectTitle;

        $attendances = Attendances::
        where('date', 'LIKE', "%{$today}%")
        ->where('subjectTitle', $subjectTitle)
        ->orderBy('name', 'asc')
        ->get();

        if($date){
            $attendances = Attendances::
            where('date', 'LIKE', "%{$date}%")
            ->where('subjectTitle', $subjectTitle)
            ->orderBy('name', 'asc')
            ->get();
        }
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('checklists.editreport', $data, compact('checklists', 'attendances', 'date'));
    }
}
