@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
          <div class="row mb-4">
            
            <div class="col-md pt-2" >
                

                <h6 class="text-xs text-color-gray pt-3">Checklist Title</h6>
                <h1 class="fw-bold text-lg text-uppercase">
                  
                  <span class="me-1">
                  {{$checklists->grade}}
                  </span>

                  {{$checklists->strand}} :

                  {{$checklists->title}}
                </h1>
                
                <div class="row">
                  <div class="col-md">
                    <h6 class="text-xs text-color-gray pt-2">Schedule</h6>
                    <h6 class="text-xs text-uppercase">
                      <span class="me-1">
                        {{$checklists->schedule}}
                    </span>
                    {{$checklists->start}} - 
                    {{$checklists->end}}
                    </h6>
                  </div>
                  <div class="col-md">
                    <h6 class="text-xs text-color-gray pt-2">Late Timer</h6>
                    <h6 class="text-xs">
                      <span class="me-1">
                      {{$checklists->late}}
                      <span class="me-1">
                        minutes
                    </h6>
                  </div>
                </div>

                          
            </div>
            <div class="col-md-4 pt-4">
            
                <button type="button" class="btn btn-primary text-xs border-0  mb-2 pt-2 pb-2" style="width: 100%">
                  <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.75 1.5a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25H1.75zM0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0114.25 16H1.75A1.75 1.75 0 010 14.25V1.75zm9.22 3.72a.75.75 0 000 1.06L10.69 8 9.22 9.47a.75.75 0 101.06 1.06l2-2a.75.75 0 000-1.06l-2-2a.75.75 0 00-1.06 0zM6.78 6.53a.75.75 0 00-1.06-1.06l-2 2a.75.75 0 000 1.06l2 2a.75.75 0 101.06-1.06L5.31 8l1.47-1.47z"></path></svg>
                    Generate QR-Code
                </button>
                
                <button type="button" class="btn btn-light btn-gray text-xs border-0 mb-2 pt-2 pb-2" style="width: 100%">
                  <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path d="M10.75 9a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5h-1.5z"></path><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm14.5 0V5h-13V3.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25zm0 2.75h-13v5.75c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V6.5z"></path></svg>
                  Scan student QR-Codes
                </button>
                
                <ul class="btn btn-gray text-xs p-0 navbar-nav ms-auto shadow-xs rounded border-0">
                  <li class="nav-item dropdown ">
                      <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        
                          <svg style="fill: black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM1.5 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm13 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                      </a>
                      <ul class="dropdown-menu shadow p-3 mb-1 mt-2 bg-body rounded border-0 text-xs" style="width: 100% !important">
                          <li>
                              <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                                  Edit Checklist
                              </a>
                          </li>
                         
  
                          <li>
                              <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path></svg>
                                  Delete Checklist
                              </a>
                          </li>

                          <li>
                            <a class="dropdown-item pt-3 pb-3" href="#">
                              <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="13" height="13"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                                Attendance Report
                            </a>
                        </li>
                          
                          
                      </ul>
                  </li>
  
                 
              </ul>
                
                
            </div>
        </div>

        <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">
                
          <div class="row">
              <div class="col-md-3 mb-2">
              <a href="#">
              <button type="button" class="btn btn-light btn-gray text-xs border-0 " style="width: 100%">
                  <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                  Add Student
              </button>
              </a>
              </div>

              <div class="col-md">

              <div class="input-group gap-2">
                  
                  <input class="form-control text-xs rounded" type="text" placeholder="Search student" aria-label="default input example">
                  
                  <button type="button" class="btn btn-light text-xs">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                  </button>
                  
              </div>
              </div>
          </div>

         
      </div>
        
      <h6 class="text-xs">Students</h6>
      <div class="container-fluid shadow-xs p-4 bg-body rounded">
        <div class="row">
          <div class="col-md-3">
            <h6 class="text-xs text-color-gray">ID Number</h6>
            <h6 class="text-xs pt-2">6001672</h6>
          </div>
          <div class="col-md">
            <h6 class="text-xs text-color-gray">Student Name</h6>
            <h6 class="text-xs pt-2 text-uppercase">Herbert, Adam Ermantrud</h6>
          </div>
          <div class="col-md-4">
            <h6 class="text-xs text-color-gray">Action</h6>
            
            <h6 class="text-xs pt-2">
              <a href="#" class="text-primary pe-3">
              <svg style="fill: #0D6EFD; margin-right: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="13" height="13"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>
              View Details
              </a>
              <a href="#" class="text-danger">
              <svg style="fill: #DC3545; margin-right: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="13" height="13"><path fill-rule="evenodd" d="M2.75 2.5h10.5a.25.25 0 01.25.25v10.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V2.75a.25.25 0 01.25-.25zM13.25 1H2.75A1.75 1.75 0 001 2.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0015 13.25V2.75A1.75 1.75 0 0013.25 1zm-2 7.75a.75.75 0 000-1.5h-6.5a.75.75 0 000 1.5h6.5z"></path></svg>
              Remove
              </a>
            </h6>
            
          </div>
        </div>
      </div>
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection