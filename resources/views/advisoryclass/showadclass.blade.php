@extends('layouts.app')

@section('content')

   <!-- Modal -->
   <div class="modal fade animateFast" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-2">
        <div class="modal-header">
          <h6 class="modal-title fw-bold" id="staticBackdropLabel"> 
            Delete Class
          </h6>
          
        </div>
        <div class="modal-body">

          <div class="row align-items-center">
            <div class="col-md-3">
              <img src="/images/delete.svg" class="d-block mx-auto img-fluid">
            </div>
            <div class="col-md text-sm">
              Are you sure you want to delete this class? This process cannot be undone.
            </div>
          </div>
        
        </div>
        <div class="modal-footer">
          
          <a href="">
          <button type="button" class="btn btn-danger text-sm ps-3 pe-3">I understood, delete it anyway</button>
          </a>

          <button type="button" class="btn btn-light text-sm ps-3 pe-3" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <div class="row gap-4 text-xs">
        <div class="col-md animateFast">

   

          <div class="row mb-4 mt-2 align-items-center">

            <div class="col-md" >
              
                <h2 class="fw-bold text-uppercase">
                  
                Grade 11 - STEM

                </h2>

                <h6 class="text-xs text-color-gray">Created at 2022-02-17 12:56:47</h6>
                

                          
            </div>
            <div class="col-md-4">
              
              <ul class="btn btn-primary text-xs p-0 navbar-nav ms-auto shadow-xs rounded border-0 mb-2">
                <li class="nav-item dropdown ">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" style="color: white !important">
                      
                      <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
  
                      Add students
                    </a>

                    <ul class="dropdown-menu shadow p-3 mb-1 mt-2 bg-body rounded border-0 text-xs" style="width: 100% !important">
                        
                        <li>
                            <a class="dropdown-item border-bottom pt-3 pb-3" href="/addstudent">
                              <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 0a.75.75 0 01.75.75V2h1.25a.75.75 0 010 1.5H14v1.25a.75.75 0 01-1.5 0V3.5h-1.25a.75.75 0 010-1.5h1.25V.75a.75.75 0 01.75-.75zM5.5 4a2 2 0 100 4 2 2 0 000-4zm2.4 4.548a3.5 3.5 0 10-4.799 0 5.527 5.527 0 00-3.1 4.66.75.75 0 101.498.085A4.01 4.01 0 015.5 9.5a4.01 4.01 0 014.001 3.793.75.75 0 101.498-.086 5.527 5.527 0 00-3.1-4.659z"></path></svg> 
                              Input Student
                            </a>
                        </li>
                       
                        
                        <li>
                       
                            <a class="dropdown-item border-bottom pt-3 pb-3">
                              <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.53 1.22a.75.75 0 00-1.06 0L3.72 4.97a.75.75 0 001.06 1.06l2.47-2.47v6.69a.75.75 0 001.5 0V3.56l2.47 2.47a.75.75 0 101.06-1.06L8.53 1.22zM3.75 13a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5z"></path></svg>  
                              Upload Student List
                            </a>
                        </li>
                        
                    </ul>
                </li>

               
            </ul>
                
                <ul class="btn btn-gray text-xs p-0 navbar-nav ms-auto shadow-xs rounded border-0">
                  <li class="nav-item dropdown ">
                      <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        
                          <svg style="fill: black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM1.5 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm13 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                      </a>
                      <ul class="dropdown-menu shadow p-3 mb-1 mt-2 bg-body rounded border-0 text-xs" style="width: 100% !important">
                          
                          <li>
                              <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                                  Edit Class Details
                              </a>
                          </li>
                         
                          
                          <li>
                         
                              <a class="dropdown-item border-bottom pt-3 pb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <svg style="fill: black; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path></svg>
                                  Delete Class
                              </a>
                          </li>
                          
                      </ul>
                  </li>
  
                 
              </ul>
                
                
            </div>
        </div>

      <div class="container-fluid shadow-xs p-4 bg-body rounded">

        <div class="input-group gap-2 mb-4">
                  
          <input class="form-control text-xs rounded" type="text" placeholder="Search in student list" aria-label="default input example">
          
          <button type="button" class="btn btn-light text-xs rounded">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
          </button>
          
      </div>

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