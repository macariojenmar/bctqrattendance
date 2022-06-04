<?php

namespace App\Http\Controllers;

use App\Models\AdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;


use App\Models\Teacher;
use App\Models\Scode;

use PHPMailer\PHPMailer\PHPMailer;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function forgot(){
        return view('auth.forgot');
    }

    public function checkForgot(Request $request){

        $request->validate([
            'idNumber'=>'required',
            'name'=>'required',
            'email'=>'required',
            'username'=>'required',
          
        ]);

        $codeLength = 6;
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
        $code = substr(str_shuffle($str), 0, $codeLength);

        $idNumber = $request->idNumber;
        $name = $request->name;
        $email = $request->email;
        $username = $request->username;

        $userInfo = Teacher::where('username','=',$username)->first();

        if(!$userInfo ){

            return back()->with('fail', 'Invalid username');
        }
        else if($userInfo->name != $name) {
            return back()->with('fail', 'Invalid name');
        }
        else if($userInfo->idnumber != $idNumber) {
            return back()->with('fail', 'Invalid ID number');
        }
        else if($userInfo->email != $email) {
            return back()->with('fail', 'Invalid email');
        }
        
        if($userInfo->code == '') {
        $userInfo->code = $code;

        $userInfo->update();

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
        $mail->Body='<div style="padding: 10px; background-color: #F2F3F4; text-align: center; border-radius: 20px; font-family: Arial;"><h2>Hi! Your reset code is</h2><h1><b>'.''.$code.''.'</b></h1><div>';
        $mail->setFrom('macariojenmar@gmail.com', 'BCT Attendance');

        $mail->addAddress($email);
    
        $mail->Send();
        $mail->smtpClose();

        $request->session()->put('userCheck',$username);
      
        return redirect('/code')->with('success', 'Please check your email for the code');
        }
        else {
            return redirect('/code')->with('success', 'Already sent an email for the code, please check your inbox');
        }
       
    }

    public function code(){
 
        return view('auth.code');
    }
    
    public function checkCode(Request $request){

        $request->validate([
            'code'=>'required',
          
        ]);

        $userCheck = session('userCheck');

        $code = $request->code;

        $teacher = Teacher::where('username',  $userCheck)->where('code',  $code)->first();

        if(!$teacher){
            return back()->with('fail', 'Invalid code, please check your email');
        }

        return redirect('/changepassword');

    }

    public function changepassword(){
 
        return view('auth.changepassword');
    }

    public function savePassword(Request $request){

        $request->validate([
            'password' => 'min:5 | max:12 | required_with:password_confirmation | same:password_confirmation',
            'password_confirmation' => 'required',
          
        ]);

        $userCheck = session('userCheck');

        $teacher = Teacher::where('username',  $userCheck)->first();

        $teacher->password = Hash::make($request->password);

        $teacher->code = '';

        $teacher->update();

        return redirect('/login')->with('success', 'Password has been changed, please login to continue');
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
        'password' => 'min:5 | max:12 | required_with:password_confirmation | same:password_confirmation',
        'password_confirmation' => 'required',
        'g-recaptcha-response' => 'required|captcha'
        
    ],
    [
        'g-recaptcha-response.required' => 'Please verify you are not a robot'
    ]
);
    
            $userInfo = Scode::where('code','=',$request->code)->first();


            if(!$userInfo){
                return back()->with('fail', 'Sign up code is unrecognizeable. ');
            }

            else {
            $user = new Teacher();
            $user->profile = 'profile.png';
            $user->username = $request->username;
            $user->idnumber = $request->idnumber;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $save = $user->save();

            if($save){
                return redirect('/login')->with('success', 'You are regsitered, please login to continue');
            }
        }
    }


    public function check(Request $request){
          
        #return $request->input();

        $request->validate([
            'username'=>'required',
            'password'=>'required',
          
        ]);
       

        $userInfo = Teacher::where('username','=',$request->username)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your username.');
        }

        else{

            if(Hash::check($request->password, $userInfo->password))
            {
                $request->session()->put('LoggedUser',$userInfo->id);
                $request->session()->put('LoggedUserName',$userInfo->username);
                $request->session()->put('LoggedName',$userInfo->name);
                $request->session()->put('LoggedIDNumber',$userInfo->idnumber);
                $request->session()->put('LoggedEmail',$userInfo->email);
                $request->session()->put('LoggedProfile',$userInfo->profile);

                Teacher::where('id', $userInfo->id)->update(['last_seen' => now()]);

                //$expiresAt = now()->addMinutes(1);

                Cache::put('user-is-online-' . $userInfo->id, true);

                return redirect('/user');
            
            }

            else
            {
                return back()->with('fail', 'Incorrect password. ');
            }
        }

    }

    public function signout(){
        
        $userInfo = session('LoggedUser');

        Teacher::where('id', $userInfo)->update(['last_seen' => now()]);

        $expiresAt = now();

        Cache::put('user-is-online-' . $userInfo, true, $expiresAt);

        if(session()->has('LoggedUser')){
            
            session()->pull('LoggedUser');
            session()->pull('LoggedUserName');
            session()->pull('LoggedName');
            session()->pull('LoggedIDNumber');
            session()->pull('LoggedEmail');


            return redirect('/login');
        }

    }

    public function saveProfile(Request $request, $id){ 


         #return $request->input();

        $request->validate([
          
            'name'=>'required',
            'email'=>'required',
            'idNumber'=>'required',
            'userName'=>'required'
           
          ]);

        $sName = session('LoggedName');
        $sIdNumber = session('LoggedIDNumber');
        $sUserName = session('LoggedUserName');
        $sEmail = session('LoggedEmail');

        $user = Teacher::find($id);
        //$userAdclass = AdClass::where('user',  session('LoggedUser'))->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->idNumber = $request->idNumber;
        $user->userName = $request->userName;

        if($request->name !== $sName){

            $request->validate([
          
                'name'=>'required|unique:teachers'
               
            ]);

            $request->session()->put('LoggedUserName',$request->userName);
            $request->session()->put('LoggedName',$request->name);
            $request->session()->put('LoggedIDNumber',$request->idNumber);
            $request->session()->put('LoggedEmail',$request->email);
     

        }
        
        else if($request->idNumber !== $sIdNumber){ 

            $request->validate([
          
                'idNumber'=>'required|unique:teachers'
               
            ]);

            $request->session()->put('LoggedUserName',$request->userName);
            $request->session()->put('LoggedName',$request->name);
            $request->session()->put('LoggedIDNumber',$request->idNumber);
            $request->session()->put('LoggedEmail',$request->email);

        }   

        else if($request->userName !== $sUserName){ 

            $request->validate([
          
                'userName'=>'required|unique:teachers'
               
            ]);

            $request->session()->put('LoggedUserName',$request->userName);
            $request->session()->put('LoggedName',$request->name);
            $request->session()->put('LoggedIDNumber',$request->idNumber);
            $request->session()->put('LoggedEmail',$request->email);

        }

        else if($request->email !== $sEmail){ 

            $request->validate([
          
                'email'=>'required|unique:teachers'
               
            ]);

            $request->session()->put('LoggedUserName',$request->userName);
            $request->session()->put('LoggedName',$request->name);
            $request->session()->put('LoggedIDNumber',$request->idNumber);
            $request->session()->put('LoggedEmail',$request->email);

        }

    
        
      $destination = 'images/avatar/'.$user->profile;

      $default = 'images/avatar/profile.png';

      try{
      if($_FILES['profile']['name'] != "") {

        if($destination !== $default){
            if(File::exists($destination)){
                    
                File::delete($destination);
            }

            
        }

        $file=$request->profile;
        
        $extension = $file->getClientOriginalExtension();
        $name = $user->id;
        $userName = $user->name;
    
        $filename = $name.$userName.'.'.$extension;
    
        $file->move('images/avatar', $filename);
       
        $user->profile = $filename;
        //$userAdclass->profile = $filename;
        AdClass::where('user', session('LoggedUser'))->update(['profile' => $filename]); 
           
        }
      
    }
    catch(\Exception $ex) {

        $user->profile = "profile.png";
        $user->update();

        return back()->with('fail', 'Failed to upload, image might be too large');

    }

    $userInfo = Teacher::where('username','=',$request->userName)->first();
    
    $password = $request->input('password');

    if($password) {
                
        $request->validate([
          
            'newPassword'=>'required|min:5|max:12',
           
        ]);

            

            if(Hash::check($request->newPassword, $userInfo->password))
                {
                    return back()->with('fail', 'Password entered is same as the old password, password was not changed');
                }

                else if(Hash::check($request->password, $userInfo->password))
                {
                    $user->password = Hash::make($request->newPassword);
                }

            else{
                    return back()->with('fail', 'Incorrect password, password was not changed');
                }
        }

        $save = $user->update();

        if($save){
            return back()->with('success', 'Profile changes has been applied.');
        }

    }

    public function signupcode(){

        $scodes = Scode::all();

        $data = ['LoggedUserInfo'=>Teacher::where('id','=',session('LoggedUser'))->first()];

        return view('auth.signupcode', $data, ['scodes'=>$scodes]);

    }

    public function generateSignupCode(Request $request){

          //Code

          $codeLength = 8;
          $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
          $code = substr(str_shuffle($str), 0, $codeLength);

          $scode = Scode::where('id', '=' ,'1')->first();

          $scode->code = 'BCT'.''.$code;
          $scode->user = session('LoggedName');

          $userInfo = Teacher::where('username','=',session('LoggedUserName'))->first();

          $password = $request->input('password');
          
          if($password) {
                
            $request->validate([
              
                'password'=>'required',
               
            ]);

          if(Hash::check($password, $userInfo->password))
          {
            $save = $scode->update();

            if($save){
                return back()->with('success', 'You have generated a new sign up code, copy the code now.');
            }
          }
          else
          {
            return back()->with('fail', 'You have entered incorrect password.');
          }
        }

         

    }

}
