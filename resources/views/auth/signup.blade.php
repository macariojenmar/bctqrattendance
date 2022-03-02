@extends('layouts.homepage')

@section('content')
<div>
        <h4 class="fw-bold pt-3">Sign up</h4>
        <div class="row">
            <div class="col-md">
                <h6 class="text-xs text-color-gray pb-2">
                    Please sign up to create an account
                </h6>
            </div>
            <div class="col-md text-end">
                <h6 class="text-xs text-color-gray pb-2">
                    Already have an account? <span class="fw-bold ms-1" ><a href="/login" class="text-primary">Login</a></span>
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
           </span>{{ Session::get('fail') }}<a href="#" class="fw-bold" style="text-decoration: underline !important">Learn More</a>
            </li>
            </ul>        
        </div>
        @endif

        <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">

            <form action="{{ route('auth.saveteacher') }}" method="POST" autocomplete="off">
        
                @csrf

                
            <div class="row">
                <div class="col-md mb-2">
                    <h6 class="text-xs text-color-gray">Username</h6>
            
                        <div class="input-group gap-2">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                        
                        <input class="form-control text-xs rounded" name="username" type="text" placeholder="Enter username" aria-label="default input example">
                    
                    </div>
                </div>

                <div class="col-md">
                    <h6 class="text-xs text-color-gray">ID Number</h6>
            
                        <div class="input-group gap-2">
                        
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M3 7.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-3zm10 .25a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75zM10.25 11a.75.75 0 000-1.5h-2.5a.75.75 0 000 1.5h2.5z"></path><path fill-rule="evenodd" d="M7.25 0A1.75 1.75 0 005.5 1.75V3H1.75A1.75 1.75 0 000 4.75v8.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H10.5V1.75A1.75 1.75 0 008.75 0h-1.5zm3.232 4.5A1.75 1.75 0 018.75 6h-1.5a1.75 1.75 0 01-1.732-1.5H1.75a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25h-3.768zM7 1.75a.25.25 0 01.25-.25h1.5a.25.25 0 01.25.25v2.5a.25.25 0 01-.25.25h-1.5A.25.25 0 017 4.25v-2.5z"></path></svg>

                        <input class="form-control text-xs rounded" name="idnumber" type="number" placeholder="Enter ID number" aria-label="default input example">
                    
                    </div>
                </div>
            </div>
            
            
            <h6 class="text-xs text-color-gray mt-3">Teacher Name</h6>
            
            <div class="input-group gap-2">
            
            <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>

            <input class="form-control text-xs rounded text-capitalize" name="name" type="text" placeholder="Enter teacher name" aria-label="default input example">
            
            </div>

            <div class="row">
                <div class="col-md">
                    <h6 class="text-xs text-color-gray mt-3">Email</h6>
            
                    <div class="input-group gap-2">
                    
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>

                        <input class="form-control text-xs rounded" name="email" type="email" placeholder="Enter email" aria-label="default input example">
                
                </div>

                </div>
                <div class="col-md">
                    <h6 class="text-xs text-color-gray mt-3">Account Type</h6>
            
                    <div class="input-group gap-2">
                    
                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>

                    <select class="form-select text-xs text-capitalize" name="type">
                        <option value="subject teacher">Subject Teacher</option>
                        <option value="adviser/subject teacher">Adviser/Subject Teacher</option>
                      </select>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <h6 class="text-xs text-color-gray mt-3">Password</h6>
            
                    <div class="input-group gap-2">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                        <input class="form-control text-xs rounded" name="password" type="password" placeholder="Enter password" aria-label="default input example">
                    </div>
                </div>
                <div class="col-md">
                    <h6 class="text-xs text-color-gray mt-3">Confirm Password</h6>
                    
                    <div class="input-group gap-2">
                        <input class="form-control text-xs rounded" name="password_confirmation" type="password" placeholder="Confirm Password" aria-label="default input example">
                    </div>
                </div>
            </div>
            
            <h6 class="text-xs text-color-gray mt-3">Sign up Code</h6>
            
            <div class="input-group gap-2">
            
            <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path></svg>
            
            <input class="form-control text-xs rounded" name="code" type="text" placeholder="Enter sign up code" aria-label="default input example">
            
            
                <svg class="mt-2 ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>

            
               
        </div>
   
        </div>
        
        <div class="d-grid d-md-flex justify-content-md-end gap-2">

            <button type="submit" class="btn btn-primary text-xs pt-2 pb-2 ps-4 pe-4 rounded" id="save">
                Sign up
            </button>
        </div>

    </form>
    
</div>
@endsection