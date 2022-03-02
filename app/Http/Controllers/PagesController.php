<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Scode;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function profile(){

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('pages.profile', $data);
    }
    public function signupcode(){

        $scodes = Scode::all();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('pages.signupcode', $data, ['scodes'=>$scodes]);

    }

}
