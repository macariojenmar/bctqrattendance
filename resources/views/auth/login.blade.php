@extends('layouts.nonav')

@section('content')


<div class="row p-4 pb-3 mt-3 gap-4">

    


    <div class="col-md-5 p-5 bg-black rounded ">
      

        <img src="/images/Security.svg" class="d-block mx-auto img-fluid">

        <h6 class="text-xs text-color-gray text-center mt-5">
            Don't have an accout? <a href="/signup" class="text-primary fw-bold">Sign up</a>
         </h6>
    
    </div>

    <div class="col-md bg-black p-5">








        <form action="{{ route('auth.check') }}" method="POST">
        
            @csrf

           
            <h4 class="text-white">
                Login
            </h4>

            <div class="row">
                <div class="col-md mb-4">
                    <h6 class="text-xs text-color-gray">
                        Please enter credentials below to login
                    </h6>
                </div>
                <div class="col-md mb-4">
                    <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="/forgot">
                        <h6 class="text-xs text-white fw-lighter">
                            <svg class="me-1" style="fill: #585858" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.533.133a1.75 1.75 0 00-1.066 0l-5.25 1.68A1.75 1.75 0 001 3.48V7c0 1.566.32 3.182 1.303 4.682.983 1.498 2.585 2.813 5.032 3.855a1.7 1.7 0 001.33 0c2.447-1.042 4.049-2.357 5.032-3.855C14.68 10.182 15 8.566 15 7V3.48a1.75 1.75 0 00-1.217-1.667L8.533.133zm-.61 1.429a.25.25 0 01.153 0l5.25 1.68a.25.25 0 01.174.238V7c0 1.358-.275 2.666-1.057 3.86-.784 1.194-2.121 2.34-4.366 3.297a.2.2 0 01-.154 0c-2.245-.956-3.582-2.104-4.366-3.298C2.775 9.666 2.5 8.36 2.5 7V3.48a.25.25 0 01.174-.237l5.25-1.68zM9.5 6.5a1.5 1.5 0 01-.75 1.3v2.45a.75.75 0 01-1.5 0V7.8A1.5 1.5 0 119.5 6.5z"></path></svg>
                        Forgot your password?
                        </h6>
                    </a>
                    </div>
                </div>
            </div>
            

            
        @if(Session::get('success'))
        
       
        <div class="alert alert-dismissible fade show text-xs border-0 fw-lighter shadow-sm mb-4" style="background-color: #D5F5E3">
        
            <div class="row">
                <div class="col-md mb-2 mt-2">
                    <span>
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM0 8a8 8 0 1116 0A8 8 0 010 8zm11.78-1.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z"></path></svg>
                        <strong>Success!</strong>
                    </span>
                    {{ Session::get('success') }}
                </div>
                <div class="col-md-3 mt-2 text-end fw-bold" style="text-decoration: underline;" >
                    <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
                </div>
            </div>
        </div>
        
        
        @endif

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

@if ($errors->any())
    
            
<div class="alert alert-dismissible fade show text-xs bg-black fw-lighter shadow-sm mb-4">
    
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

            
            <h6 class="text-sm text-color-gray">Username</h6>
            
            <div class="input-group div-hover bg-black rounded">
            <span class="input-group-text bg-black border-0 p-4">
            <svg style="fill: #aaaaaa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
            </span>

            <input class="form-control text-xs p-3 bg-black border-0" name="username" type="text" placeholder="Enter username" aria-label="default input example" required>
            </div>
          

        <h6 class="text-xs text-color-gray mt-4">Password</h6>
            
        <div class="input-group div-hover bg-black rounded">
            <span class="input-group-text bg-black border-0 p-4">
            <svg style="fill: #aaaaaa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
            </span>
            <input class="form-control text-xs p-3 bg-black border-0" name="password" id="password" type="password" placeholder="Enter password" aria-label="default input example" required>
        </div>

        <div class="text-xs mt-4 text-white fw-lighter" >
            <input onclick="showPass()" class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Show Password
            </label>
        </div>


        <div class="d-grid d-md-flex justify-content-md-end gap-2 mt-5">

            <a href="/">
            <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover bg-black" style="width: 100%">
                Home
            </button>
            </a>
        
            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover">
                Login
            <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
        </button>
        
        </div>

   

       
        
    
        
    </form>
       
        

    </div>

</div>

@endsection