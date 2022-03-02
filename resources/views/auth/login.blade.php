@extends('layouts.homepage')

@section('content')
<div class="row align-items-center mt-4 mb-4">
    <div class="col-md">
        <img src="/images/login2.svg" style="width: 450px" class="d-block mx-auto mb-3 pb-5 img-fluid">
    </div>
    <div class="col-md">
        <h4 class="fw-bold pt-2">Login</h4>
        <div class="row">
            <div class="col-md">
                <h6 class="text-xs text-color-gray pb-2">
                    Please login to continue
                </h6>
            </div>
            <div class="col-md text-end">
                <h6 class="text-xs text-color-gray pb-2">
                    Don't have an account? <span class="fw-bold ms-1" ><a href="/signup" class="text-primary">Sign up</a></span>
                </h6>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show border-0 text-xs">
          
            <strong>Whoops!</strong> There were some problems with your input.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger alert-dismissible fade show border-0 text-xs">
            <span><strong>Whoops!</strong> Failed to login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <br><br>
            <ul>
            <li>
           </span>{{ Session::get('fail') }}
            </li>
            </ul>        
        </div>
        @endif

        <form action="{{ route('auth.check') }}" method="POST">
        
            @csrf

        <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">
            <h6 class="text-xs text-color-gray">Username</h6>
            
            <div class="input-group gap-2">
            <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
            
            <input class="form-control text-xs rounded" name="username" type="text" placeholder="Enter username" aria-label="default input example">
            </div>

            <h6 class="text-xs text-color-gray mt-3">Password</h6>
            
            <div class="input-group gap-2">
                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
            <input class="form-control text-xs rounded" name="password" id="password" type="password" placeholder="Enter password" aria-label="default input example">
            </div>

            <div class="form-check text-xs mt-4 d-md-flex gap-2 justify-content-md-end" >
                <input onclick="showPass()" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Show Password
                </label>
              </div>

        </div>

        
        <button type="submit" class="btn btn-primary text-xs fw-bold pt-2 pb-2" id="save" style="width: 100%">
            Continue
            <svg style="fill: white; margin-left: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
        </button>


    </form>

        <div>
            <a href="#" class="text-primary">
                <h6 class="text-xs text-center mt-4">
                Forgot your password?
                </h6>
            </a>
        </div>
        
    </div>
</div>
@endsection