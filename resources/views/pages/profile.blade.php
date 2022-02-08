@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div class="row mb-4 mt-4">
                <div class="col-md-3">
                    <img src="images/user.jpg" class="d-block mx-auto mb-3 rounded-circle" style="width: 140px">
                </div>
                <div class="col-md" >
                    
                    <h6 class="text-xs pt-3">6001984</h6>
                    <h1 class="fw-bold">Jane Doe</h1>
                    <h6 class="text-xs">Adviser/Subject Teacher</h6>
                    
                </div>
                <div class="col-md pt-4">
                
                    <button type="button" class=" btn btn-primary text-xs mb-2 pt-2 pb-2" style="width: 100%">
                        <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                        Update Profile
                    </button>
                    <button type="button" class=" btn btn-light btn-gray text-xs border-0 pt-2 pb-2" style="width: 100%">
                        <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.533.133a1.75 1.75 0 00-1.066 0l-5.25 1.68A1.75 1.75 0 001 3.48V7c0 1.566.32 3.182 1.303 4.682.983 1.498 2.585 2.813 5.032 3.855a1.7 1.7 0 001.33 0c2.447-1.042 4.049-2.357 5.032-3.855C14.68 10.182 15 8.566 15 7V3.48a1.75 1.75 0 00-1.217-1.667L8.533.133zm-.61 1.429a.25.25 0 01.153 0l5.25 1.68a.25.25 0 01.174.238V7c0 1.358-.275 2.666-1.057 3.86-.784 1.194-2.121 2.34-4.366 3.297a.2.2 0 01-.154 0c-2.245-.956-3.582-2.104-4.366-3.298C2.775 9.666 2.5 8.36 2.5 7V3.48a.25.25 0 01.174-.237l5.25-1.68zM9.5 6.5a1.5 1.5 0 01-.75 1.3v2.45a.75.75 0 01-1.5 0V7.8A1.5 1.5 0 119.5 6.5z"></path></svg>
                        Change Password
                    </button>
                </div>
            </div>

            
            <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">
                <h6 class="text-xs text-color-gray">Teacher Details</h6>
                <div class="row pb-3 mt-4">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">Full Name</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 text-uppercase">Jane Jonas Doe</h6>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">ID Number</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 text-uppercase">6001984</h6>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">Account Type</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 text-uppercase">Adviser/Subject Teacher</h6>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">Gender</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 text-uppercase">Female</h6>
                    </div>
                </div>
                
                <h6 class="text-xs text-color-gray">Teacher Contact Details</h6>
                <div class="row pb-3 mt-4">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">Contact Number</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 text-uppercase">0913781411</h6>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5">
                        <h6 class="text-xs ps-4">Email</h6>
                       
                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold ps-4 ">janedoe@email.com</h6>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection