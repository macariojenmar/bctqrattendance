<form action="{{ route('auth.saveProfile', $LoggedUserInfo['id']) }}" method="POST" enctype="multipart/form-data" autocomplete="off">

    @csrf
  
    @method('PUT')

  <div class="modal fade animateFast" id="profileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content border-0">
        <div class="modal-body">
            <div class="text-end">
            
            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
            </button>

            </div>
            <input type="file" id="profile" name="profile" onchange="loadFile(event)" accept=".png, .jpg, .jpeg" hidden>
            <div class="text-center text-xs">
                
                <label for="profile" style="cursor: pointer">

                <img src="/images/avatar/{{ $LoggedUserInfo['profile'] }}" id="profileImage" class="d-block mx-auto mb-3 rounded-circle" style="width: 130px !important; height: 130px !important;">
                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
            Change Profile
            </label>
            </div>

          
            <div class="container p-4 mt-3">

                <div class="row">
                    <div class="col-md">
                        <h6 class="text-xs fw-bold mb-3">Profile Details</h6>

            
                        <h6 class="text-xs text-color-gray">Full Name</h6>

                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                        <input type="text" class="form-control text-xs text-capitalize mb-3 rounded" name="name" value="{{ $LoggedUserInfo['name'] }}" placeholder="Enter name here" required>
                        </div>
            
                       
                        <h6 class="text-xs text-color-gray">ID Number</h6>
                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M3 7.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-3zm10 .25a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75zM10.25 11a.75.75 0 000-1.5h-2.5a.75.75 0 000 1.5h2.5z"></path><path fill-rule="evenodd" d="M7.25 0A1.75 1.75 0 005.5 1.75V3H1.75A1.75 1.75 0 000 4.75v8.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H10.5V1.75A1.75 1.75 0 008.75 0h-1.5zm3.232 4.5A1.75 1.75 0 018.75 6h-1.5a1.75 1.75 0 01-1.732-1.5H1.75a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25h-3.768zM7 1.75a.25.25 0 01.25-.25h1.5a.25.25 0 01.25.25v2.5a.25.25 0 01-.25.25h-1.5A.25.25 0 017 4.25v-2.5z"></path></svg>
                        <input type="number" class="form-control text-xs text-capitalize mb-3 rounded" name="idNumber" value="{{ $LoggedUserInfo['idnumber'] }}" placeholder="Enter ID number here" required>
                        </div>
                        
                       
                    </div>

                    <div class="col-md">
                        <h6 class="text-xs fw-bold mb-3">Contact Details</h6>
                        <h6 class="text-xs text-color-gray">Username</h6>
                        
                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>
                        <input type="text" class="form-control text-xs mb-3 rounded" name="userName" value="{{$LoggedUserInfo['username'] }}" placeholder="Enter username here" required>
                        </div>

                        <h6 class="text-xs text-color-gray">Email</h6>

                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>
                        <input type="email" class="form-control text-xs mb-3 rounded" name="email" value="{{$LoggedUserInfo['email'] }}" placeholder="Enter email here" required>
                        </div>

                    </div>
                    <div class="col-md">
                        <h6 class="text-xs fw-bold mb-3">Change Password</h6>

                        <h6 class="text-xs text-color-gray">Old Password</h6>

                        <div class="input-group gap-3">
                        <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                        <input type="password" class="form-control text-xs mb-3 rounded" name="password" placeholder="Enter old password here">
                        </div>

                        <h6 class="text-xs text-color-gray">New Password</h6>
                        <div class="input-group gap-3">
                            <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                            <input type="password" class="form-control text-xs mb-3 rounded" name="newPassword" placeholder="Enter new password here">
                            </div>
                    </div>
                </div>

                <div class="d-grid d-flex justify-content-center mt-5 gap-3">

                    <button type="submit" class="btn btn-primary text-xs div-hover pt-3 pb-3 ps-3 pe-3">
                        <svg class="me-1" style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                        Save Changes</button>
                    <button type="button" class="btn btn-link text-xs div-hover pt-3 pb-3 ps-3 pe-3" data-bs-dismiss="modal" >Close</button>
               
                
                </div>

            </div>

           
        </div>
       
      </div>
    </div>
  </div>

</form>

<nav class="navbar navbar-expand-lg text-xs" style=" background-color: white">
    <div class="container pt-3 " style="padding-left: 2em; padding-right: 2em;">
        <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <svg style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg> 
        </button>
        
    
        <div class="collapse navbar-collapse pb-3 " id="main_nav">

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold text-uppercase" href="#" data-bs-toggle="dropdown">

                        <div class="row align-items-center gap-3">
                            <div class="col-2">
                                
                                <img src="/images/avatar/{{ $LoggedUserInfo['profile'] }}" class="rounded-circle me-2" style="width: 40px; height: 40px !important">
                               
                            </div>

                            <div class="col text-white">
                                {{ $LoggedUserInfo['name'] }}
                                <svg class="pb-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>
                                <br>
                                <span class="badge rounded-pill fw-normal text-capitalize" style="background-color: #4ec27e; margin-top: 3px">Online</span>
                            
                            </div>

                        </div>
                       
                        
                        
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow p-3 bg-body rounded border-0 text-xs animateFast" style="width: max !important">
                        
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#profileModal">
                                Signed in as
                                <h6 class="fw-bold text-xs text-capitalize">{{ $LoggedUserInfo['name'] }}</h6>
                            </a>
                        </li>
                        <hr>
                    

                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                            My Profile</a></li>
                        
                        <li><a class="dropdown-item" href="/signupcode">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path></svg>
                            Sign up Code</a></li>
                     

          
                        <hr>
                        

                        <li><a class="dropdown-item" href="/about" target="_blank">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                            Developer</a></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('auth.signout') }}">
                                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path></svg>
                                    Sign out
                                </a>
                            </li>
                    </ul>
                </li>
                
            </ul>

      
           
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="/user" >
                        <svg class="pb-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"><path fill-rule="evenodd" d="M8.156 1.835a.25.25 0 00-.312 0l-5.25 4.2a.25.25 0 00-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 01.75-.75h3.5a.75.75 0 01.75.75v5.25h2.75a.25.25 0 00.25-.25V6.23a.25.25 0 00-.094-.195l-5.25-4.2zM6.906.664a1.75 1.75 0 012.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0113.25 15h-3.5a.75.75 0 01-.75-.75V9H7v5.25a.75.75 0 01-.75.75h-3.5A1.75 1.75 0 011 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2h-.001z"></path></svg>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white" href="/adclass" >
                        <svg class="pb-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>
                        My Advisory Class
                    </a>
                </li>

                <!--
                <li class="nav-item dropdown ">
                    
                    <a class="nav-link text-white" href="#" data-bs-toggle="dropdown" >
                        <svg class="pb-1" style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"><path d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z"></path><path fill-rule="evenodd" d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z"></path></svg>
                        Notifications
                        <span class="badge rounded-pill bg-danger ms-1">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow p-3 mb-1 bg-body rounded border-0 text-xs animateFast" style="width: max !important">
                        <li>
                            <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2.8 2.06A1.75 1.75 0 014.41 1h7.18c.7 0 1.333.417 1.61 1.06l2.74 6.395a.75.75 0 01.06.295v4.5A1.75 1.75 0 0114.25 15H1.75A1.75 1.75 0 010 13.25v-4.5a.75.75 0 01.06-.295L2.8 2.06zm1.61.44a.25.25 0 00-.23.152L1.887 8H4.75a.75.75 0 01.6.3L6.625 10h2.75l1.275-1.7a.75.75 0 01.6-.3h2.863L11.82 2.652a.25.25 0 00-.23-.152H4.41zm10.09 7h-2.875l-1.275 1.7a.75.75 0 01-.6.3h-3.5a.75.75 0 01-.6-.3L4.375 9.5H1.5v3.75c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V9.5z"></path></svg>
                                Inbox
                                <span class="badge rounded-pill bg-danger ms-1">1</span>
                            </a>
                        </li>
                       

                        <li>
                            <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2.5a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25H1.75zM0 2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75v1.5A1.75 1.75 0 0114.25 6H1.75A1.75 1.75 0 010 4.25v-1.5zM1.75 7a.75.75 0 01.75.75v5.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25v-5.5a.75.75 0 111.5 0v5.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25v-5.5A.75.75 0 011.75 7zm4.5 1a.75.75 0 000 1.5h3.5a.75.75 0 100-1.5h-3.5z"></path></svg>
                                Archive
                            </a>
                        </li>
                        

                        <li>
                            <a class="dropdown-item pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                                Saved
                            </a>
                        </li>
                        
                    </ul>
                </li>
            -->
               
            </ul>

           

        </div> 
        
    </div>
    </nav>

    <script>

    var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                var output = document.getElementById('profileImage');
                output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };
    </script>