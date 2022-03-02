<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Teacher;
use App\Models\Scode;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function signup(){
        return view('auth.signup');
    }

    public function saveteacher(Request $request){
         
       # return $request->input();

       $request->validate([
        'username' => 'required | unique:teachers',
        'idnumber' => 'required | unique:teachers',
        'name' => 'required | max:30',
        'email' => 'required | unique:teachers',
        'type' => 'required',
        'password' => 'min:5 | max:12 | required_with:password_confirmation | same:password_confirmation',
        'password_confirmation' => 'required'
        
    ]);
    
            $userInfo = Scode::where('code','=',$request->code)->first();


            if(!$userInfo){
                return back()->with('fail', 'Sign up code is unrecognizeable. ');
            }

            else {
            $user = new Teacher();
            $user->username = $request->username;
            $user->idnumber = $request->idnumber;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->password = Hash::make($request->password);
            $save = $user->save();

            if($save){
                return redirect('/login');
            }
        }
    }

    public function check(Request $request){
          
        #return $request->input();

        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $userInfo = Teacher::where('username','=',$request->username)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your username.');
        }

        else{

            if(Hash::check($request->password, $userInfo->password))
            {
                $request->session()->put('LoggedUser',$userInfo->id);

                return redirect('/user');
            
            }

            else
            {
                return back()->with('fail', 'Incorrect password. ');
            }
        }

    }

    public function signout(){
        
        if(session()->has('LoggedUser')){
            
            session()->pull('LoggedUser');
            
            return redirect('/login');
        }

    }
}
