@extends('layouts.nonav')

@section('content')


<div class="row p-4 pb-3 mt-3 gap-4">

    


    <div class="col-md-5 p-5 bg-black rounded ">
      

        <img src="/images/Forgot.svg" class="d-block mx-auto img-fluid">

        <h6 class="text-xs text-center mt-5">
            Forgot Password
        </h6>
        <h6 class="text-xs text-color-gray text-center">
            Complete the information needed to reset your password
        </h6>
    
    </div>


    
    <div class="col-md bg-black p-5 rounded">

        <div class="d-grid d-flex justify-content-center mb-4">
            <img src="/images/logoText.svg" style="width: 200px">
        </div>

        
        @if(Session::get('fail'))


            <div class="alert alert-dismissible fade show text-xs bg-black fw-lighter shadow-sm mb-4">

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

            


        <form action="{{ route('auth.checkForgot') }}" method="POST">
        
            @csrf
        <h6 class="text-xs text-color-gray">Please enter your username</h6>
            
                        <div class="input-group gap-3 mb-4">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                        
                        <input class="form-control text-xs rounded" name="username" type="text" placeholder="Enter username"  required>
                        </div>
                        
                        <h6 class="text-xs text-color-gray">Please enter your name</h6>
                        

                        <div class="input-group gap-3">

                       
                            <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>

                        <input class="form-control text-xs rounded text-capitalize" name="name" type="text" placeholder="Enter name here" required>
                        </div>

                        <h6 class="text-xs text-color-gray mt-4">Please enter your ID number</h6>
                        

                        <div class="input-group gap-3">

                       
                            <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M3 7.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-3zm10 .25a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75zM10.25 11a.75.75 0 000-1.5h-2.5a.75.75 0 000 1.5h2.5z"></path><path fill-rule="evenodd" d="M7.25 0A1.75 1.75 0 005.5 1.75V3H1.75A1.75 1.75 0 000 4.75v8.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H10.5V1.75A1.75 1.75 0 008.75 0h-1.5zm3.232 4.5A1.75 1.75 0 018.75 6h-1.5a1.75 1.75 0 01-1.732-1.5H1.75a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25h-3.768zM7 1.75a.25.25 0 01.25-.25h1.5a.25.25 0 01.25.25v2.5a.25.25 0 01-.25.25h-1.5A.25.25 0 017 4.25v-2.5z"></path></svg>

                        <input class="form-control text-xs rounded" name="idNumber" type="text" placeholder="Enter ID number here" required>
                        </div>

                        <h6 class="text-xs text-color-gray mt-4">Please enter your email</h6>
                        

                        <div class="input-group gap-3">

                       
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>

                        <input class="form-control text-xs rounded" name="email" type="email" placeholder="Enter email here" data-bs-toggle="tooltip" data-bs-html="true" title="<strong>Valid email</strong><br>Make sure to provide valid email because the validation code will be sent to this email." data-bs-placement="bottom" required>
                        </div>


                        <div class="d-grid d-md-flex justify-content-md-end gap-2 mt-5">

                            <a href="/login">
                            <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover bg-black" style="width: 100%">
                                Login
                            </button>
                            </a>
                            
                            
                            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover">
                                Continue
                            <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                        </button>
                            
                        
                        </div>
                    </form>
    </div>

 

</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl)
 })

 </script>


@endsection