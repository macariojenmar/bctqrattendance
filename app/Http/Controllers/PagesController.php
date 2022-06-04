<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Scode;
use App\Models\ChecklistStudent;
use App\Models\Attendances;
use App\Models\Checklist;
use App\Models\Students;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }

    public function scanner(){
        return view('pages.scanner');
    }

    public function learnmore(){
        return view('pages.learnmore');
    }

    public function contactUs(){
        return view('pages.contactUs');
    }


    public function saveAttendanceScanner(Request $request){

        $input = new Attendances();

        date_default_timezone_set("Asia/Manila");

        $dayName = date("l");
        $month = date("F");
        $day = date("d");
        $year = date("Y");

        $date = $month.' '.$day.', '.$year.' '.$dayName;
        $time = date("g:ia");

        $idNumber = $request->input('idNumber');
        $code = $request->input('code');

        $checklist = Checklist::where('code', $code)->first();

        if(!$checklist) {

            return response()->json([
                'status'=>600,
                //'message'=> $checkDupllicate,
                
            ]);

        }

        if($code == 'None') {

            return response()->json([
                'status'=>600,
                //'message'=> $checkDupllicate,
                
            ]);

        }

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
        
       
        $input->status = 'Present';
        
       

        $select = Students::where('idNum', $idNumber)->first();
   
        $name = $select->name;
        $email = $select->email;

        $input->name = $name;
        
       
        $input->save();

        return response()->json([
            'status'=>200,
            'name'=>$name,
            'time'=>$time,
            'date'=>$date,
            'message'=> $checklistStudents,
            
        ]);
      }

   

}
