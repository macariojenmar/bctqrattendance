@extends('layouts.nonav')

@section('content')




<form action="{{ route('auth.saveteacher') }}" method="POST">
        
    @csrf


<div class="row p-4 pb-3 gap-4">
    


    <div class="col-md-5 bg-black rounded p-5">
        <h6 class="text-sm text-color-gray">
            Welcome Ma'am/Sir! 
         </h6>
        <h4 class="text-white">
            Sign up
        </h4>
      
           
        <h6 class="text-xs text-color-gray mb-5">
            Join us by completing the form
        </h6>
       

            <img src="/images/Signin.svg" style="width: 400px" class="d-block mx-auto img-fluid">

            <h6 class="text-xs text-color-gray text-center mt-5">
                Already have an accout? <a href="/login" class="text-primary fw-bold">Login</a>
             </h6>
            
       
    </div>

    <div class="col-md bg-black rounded p-5 shadow-sm">

        @if ($errors->any())
    
            
        <div class="container alert alert-dismissible fade show text-xs border-0 bg-black fw-lighter shadow-sm">
            
            <div class="row">
                <div class="col-md">
                    <span class="text-danger">
        
                    <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
                    
                    <strong>Whoops! </strong> There were some problems with your input.
                    </span>
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        
                <div class="col-md-2 mt-2 text-end fw-bold text-white" style="text-decoration: underline;" >
                    <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
                </div>
            </div>
        
        </div>
        
        @endif
        
        @if(Session::get('fail'))
        
        
        <div class="container alert alert-dismissible fade show text-xs border-0 bg-black fw-lighter shadow-sm">
        
            <div class="row">
                <div class="col-md mb-2 mt-2">
                    <span class="text-danger">
                        <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
                        <strong>Failed! </strong>
                    </span>
                    {{ Session::get('fail') }}
                </div>
                <div class="col-md-3 mt-2 text-end fw-bold text-white" style="text-decoration: underline;" >
                    <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
                </div>
            </div>
        </div>
        
        
        @endif
        
            <div class="row">
                <div class="col-md mb-4">
                    
                   
                    <h6 class="text-xs text-color-gray">Username</h6>
            
                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                        
                        <input class="form-control text-xs rounded" name="username" type="text" placeholder="Enter username"  required>
                        </div>
                 

                </div>

                <div class="col-md mb-4">

                   
                    <h6 class="text-xs text-color-gray">ID Number</h6>
            
                        <div class="input-group gap-3">
                        
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M3 7.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-3zm10 .25a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75zM10.25 11a.75.75 0 000-1.5h-2.5a.75.75 0 000 1.5h2.5z"></path><path fill-rule="evenodd" d="M7.25 0A1.75 1.75 0 005.5 1.75V3H1.75A1.75 1.75 0 000 4.75v8.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H10.5V1.75A1.75 1.75 0 008.75 0h-1.5zm3.232 4.5A1.75 1.75 0 018.75 6h-1.5a1.75 1.75 0 01-1.732-1.5H1.75a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25h-3.768zM7 1.75a.25.25 0 01.25-.25h1.5a.25.25 0 01.25.25v2.5a.25.25 0 01-.25.25h-1.5A.25.25 0 017 4.25v-2.5z"></path></svg>

                        <input class="form-control text-xs rounded" name="idnumber" type="number" placeholder="Enter ID number" required>
                    
                
                    </div>
                </div>
            </div>
            
           
            <h6 class="text-xs text-color-gray">Teacher Name</h6>
            
            <div class="input-group gap-3 mb-4">
            
            <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>

            <input class="form-control text-xs rounded text-capitalize" name="name" type="text" placeholder="Enter your name" required>
            
            </div>
            

            <div class="row">
                <div class="col-md mb-4">
                    
            
                    

                        <h6 class="text-xs text-color-gray">Email</h6>
                        

                        <div class="input-group gap-3">

                       
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>

                        <input class="form-control text-xs rounded" name="email" type="email" placeholder="Enter email" required>
                        </div>
                

                </div>
             
            </div>
         

            <div class="row">
                
                <div class="col-md mb-4">

                    <h6 class="text-xs text-color-gray">Password</h6>
            
                    <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                        <input class="form-control text-xs rounded" name="password" type="password" placeholder="Enter password" data-bs-toggle="tooltip" data-bs-html="true" title="*Maximum of 12 characters<br>*Minimum of 5 characters" data-bs-placement="bottom" required>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <h6 class="text-xs text-color-gray">Confirm password</h6>
                    
                    <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                        <input class="form-control text-xs rounded" name="password_confirmation" type="password" placeholder="Confirm Password" required>
                    </div>
                </div>
                </div>
          
            
            

            <h6 class="text-xs text-color-gray">Sign up Code</h6>
            
            <div class="input-group gap-3">
                    
            <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6.5 5.5a4 4 0 112.731 3.795.75.75 0 00-.768.18L7.44 10.5H6.25a.75.75 0 00-.75.75v1.19l-.06.06H4.25a.75.75 0 00-.75.75v1.19l-.06.06H1.75a.25.25 0 01-.25-.25v-1.69l5.024-5.023a.75.75 0 00.181-.768A3.995 3.995 0 016.5 5.5zm4-5.5a5.5 5.5 0 00-5.348 6.788L.22 11.72a.75.75 0 00-.22.53v2C0 15.216.784 16 1.75 16h2a.75.75 0 00.53-.22l.5-.5a.75.75 0 00.22-.53V14h.75a.75.75 0 00.53-.22l.5-.5a.75.75 0 00.22-.53V12h.75a.75.75 0 00.53-.22l.932-.932A5.5 5.5 0 1010.5 0zm.5 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>

            <input class="form-control text-xs rounded" name="code" type="text" placeholder="Enter sign up code" data-bs-toggle="tooltip" data-bs-html="true" title="<strong>What is this?</strong><br>Sign up code can be acquired from other teachers who are registered." data-bs-placement="bottom" required>
            
        </div>
            
  

        <div class="d-grid d-md-flex justify-content-md-start mt-4 pb-3">
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}
        </div>

        <div class="d-grid d-md-flex justify-content-md-end gap-2 mt-5">

            <a href="/">
            <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover border border-2 text-color-gray" style="width: 100%">
                Home
            </button>
            </a>
        
            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover">
                Sign up
            <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
        </button>
        
        </div>
    </div>
    
    

</div>



</form>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl)
 })

 </script>

@endsection