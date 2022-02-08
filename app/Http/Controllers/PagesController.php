<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function login(){
        return view('pages.login');
    }
    public function signup(){
        return view('pages.signup');
    }
    public function adclass(){
        return view('pages.adclass');
    }
    public function newadclass(){
        return view('pages.newadclass');
    }

    
}
