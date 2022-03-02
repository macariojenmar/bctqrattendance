<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class AdvisoryClassController extends Controller
{
    public function adclass(){

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.adclass', $data);
    
    }
    public function newadclass(){
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.newadclass', $data);
    }
    public function showadclass(){
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.showadclass', $data);
    }

    public function addstudent(){
        
        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];
        return view('advisoryclass.addstudent', $data);
    }


}
