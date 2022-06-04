@extends('layouts.app')

@section('content')

<div class="modal fade animateFast" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" >
    <div class="modal-content border-0 shadow">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
              
    <form action="{{ route('checklist.updateChecklist', $checklists->id) }}" method="POST" enctype="multipart/form-data">
  
      @csrf

      @method('PUT')

          <div class="container p-4 pt-2 pb-5 text-white">
            <h6>Update Details</h2>
              <h6 class="text-xs text-color-gray mb-4">Change details below</h6>
              
              <div class="row row-cols-1 row-cols-md-2">

                <div class="col mb-3">

                  <h6 class="text-xs">Current: {{$checklists->subject}}</h6>
                  <select class="form-select text-xs" name="subject" required>
                    <option value="" disabled selected hidden>Select new subject</option>

                    @foreach($subjects as $subject)
                    <option value="{{$subject->title}} ({{$subject->subjectCode}})">{{$subject->title}} ({{$subject->subjectCode}})</option>
                    @endforeach
                    
                  </select>
                  
                </div>

                

                <div class="col mb-3">
                  
                    <h6 class="text-xs">Current: {{$checklists->grade}}</h6>
                    <select class="form-select text-xs" name="grade" required>
                      <option value="" disabled selected hidden>Select new grade level</option>
                      <option value="Grade 11">Grade 11</option>
                      <option value="Grade 12">Grade 12</option>
                    </select>
                  
                </div>
                <div class="col mb-3">

                  <h6 class="text-xs">Current: {{$checklists->strand}}</h6>
                  <select class="form-select text-xs" name="strand" required>
                    <option value="" disabled selected hidden>Select new strand</option>
                    <option value="STEM">STEM</option>
                    <option value="HUMSS">HUMSS</option>
                    <option value="IA EPAS">IA EPAS</option>
                    <option value="IA EIM">IA EIM</option>
                    <option value="ICT ANIMATION">ICT ANIMATION</option>
                    <option value="ICT CP">ICT CP</option>
                    <option value="ICT CSS">ICT CSS</option>
                  </select>
                  
                </div>

                <div class="col mb-3">

                  <h6 class="text-xs">Current: {{$checklists->schedule}}</h6>
                  <input type="text" class="form-control text-xs" name="schedule" value="{{$checklists->schedule}}" required>
                  
                </div>

                <div class="col mb-3">
                  <div class="row row-cols-2">
                    <div class="col">
                      <h6 class="text-xs">Current: {{$checklists->start}}</h6>
                      <input type="text" class="form-control text-xs" name="start" value="{{$checklists->start}}" required>
                    </div>
                   
                    <div class="col">
                      <h6 class="text-xs">Current: {{$checklists->end}}</h6>
                      <input type="text" class="form-control text-xs" name="end" value="{{$checklists->end}}" required>
                    </div>
                  </div>
                
                  
                </div>

                <div class="col mb-3">

                  <h6 class="text-xs">Current: {{$checklists->late}}</h6>
                  <select class="form-select text-xs" name="late" required>
                    <option value="" disabled selected hidden>Select new late timer</option>
                    <option value="15">15 minutes</option>
                    <option value="None">None</option>
                  </select>
                  
                </div>
              </div>
  

              <div class="d-grid d-flex justify-content-end mt-4 gap-2">

                
                
                <button type="submit" class="btn btn-primary border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >
                  <svg style="fill: white" class="me-1" class="mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                  Save Changes
                </button>
               

                  <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
             
              </div>

          </div>

    </form>
         
      </div>
    </div>
     
    </div>
  </div>

<div class="modal fade animateFast" id="delete" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content border-0 shadow">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
              
         

          <div class="container p-4 pt-2 pb-5 text-white">
            <h6 class="text-white mb-3">Delete Checklist</h6>
            <h6 class="text-white text-xs mb-4">This checklist will be deleted permanently.</h6>
            <h6 class="text-color-gray text-xs">Note: All attendances recored in this checklist and students copied to this checklist will be permanently deleted.</h6>
            
              <div class="d-grid d-flex justify-content-end mt-4 gap-2">

                
                <a href="{{route('checklist.deletechecklist', $checklists->id)}}">
                <button type="button" class="btn btn-danger border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >

                  I understand, delete anyway
                </button>
                </a>

                  <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
             
              </div>

            </div>

 
         
      </div>
    </div>
     
    </div>
  </div>

    <div class="row gap-4 text-xs">
        <div class="col-md animateFast">

          <div class="container-fluid rounded p-4 pb-5 pt-5 mb-4 shadow-sm background-image">

            <div class="row align-items-center">

            <div class="col-md pt-2" style="color: white">
                
                <h4 class="fw-bold text-uppercase">
                  {{$checklists->subject}}
                </h4>
                <h6 class="text-sm"> {{$checklists->grade}} -  {{$checklists->strand}}</h6>
                 
                
                <div class="row">
                  <div class="col-md">
                    <h6 class="text-xs text-color-gray pt-2">Details</h6>
                    <h6 class="text-xs text-capitalize">
                      <span class="me-1">
                        {{$checklists->schedule}}
                    </span>
                    {{$checklists->start}} - 
                    {{$checklists->end}}
                    </h6>
                  </div>
                  <div class="col-md">
                    <h6 class="text-xs text-color-gray pt-2">Late</h6>
                    <h6 class="text-xs">
                      <span class="me-1">
                      {{$checklists->late}}
                      <span class="me-1">
                        minutes
                    </h6>
                  </div>
                </div>

                          
            </div>
            <div class="col-md-3">
              
              @if(count($checklistStudents) > 0)
              <div class="btn-group gap-3" role="group">

                <a href="/subjectqr/{{$checklists->id}}">

                <button type="button" class="btn text-xs p-3 div-hover rounded bg-body" style="width: 63px; height: 60px !important;" data-bs-toggle="tooltip" title="Generate Subject QR Code" data-bs-placement="bottom">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#2E86C1" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                  </svg>          
                </button>
                </a>

                <a href="/scanqr/{{$checklists->id}}">

              <button type="button" class="btn text-xs p-3 div-hover rounded bg-body" style="width: 100%; !important; height: 60px !important;"  data-bs-toggle="tooltip" title="Scan Student QR Code" data-bs-placement="bottom">
                <svg style="fill: #16A085" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24"><path fill-rule="evenodd" d="M2.75 2.5a.25.25 0 00-.25.25v2.5a.75.75 0 01-1.5 0v-2.5C1 1.784 1.784 1 2.75 1h2.5a.75.75 0 010 1.5h-2.5zM10 1.75a.75.75 0 01.75-.75h2.5c.966 0 1.75.784 1.75 1.75v2.5a.75.75 0 01-1.5 0v-2.5a.25.25 0 00-.25-.25h-2.5a.75.75 0 01-.75-.75zM1.75 10a.75.75 0 01.75.75v2.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 011 13.25v-2.5a.75.75 0 01.75-.75zm12.5 0a.75.75 0 01.75.75v2.5A1.75 1.75 0 0113.25 15h-2.5a.75.75 0 010-1.5h2.5a.25.25 0 00.25-.25v-2.5a.75.75 0 01.75-.75z"></path></svg>              </button>
              </a>

          

              </div>

              @endif

            </div>

          </div>
        </div>

        @if(count($checklistStudents) > 0)

        <form action="{{ route('checklist.showchecklist', $checklists->id) }}" method="GET" autocomplete="off">
                
          @csrf

        <h6 class="text-color-gray text-xs">Student List</h6>
   
        <div class="input-group mb-4 div-hover">
          <span class="input-group-text bg-black p-3">
              
              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
              
          </span>
      <input class="form-control text-xs bg-black" placeholder="Search subject here" name="search" value="{{$search}}">
      <button type="submit" class="text-xs bg-black ps-3 pe-3">
          Search
      </button>
      </div>

        </form>
    
        <div class="row row-cols-1 row-cols-md-3 align-items-center">

          @foreach($checklistStudents as $checklistStudent)
          
        
          <form action="{{ route('checklist.deleteStudentChk', $checklistStudent->id) }}" method="POST" autocomplete="off">
                
            @csrf
          
          <div class="col mb-2">
            <div class="bg-black rounded p-3 ps-4 div-hover">
              <div class="row align-items-center">
                <div class="col">

                

                  <h6 class="text-color-gray text-xs">ID Number</h6>
                  
                  <h6 class="text-white text-sm">{{$checklistStudent->idNumber}}</h6>

                

                </div>
                <div class="col text-end">
                  <button type="submit" class="btn rounded text-xs bg-black">
                    <svg style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path></svg>
                  </button>
                </div>
              </div>
              
          </div>

        </div>

          </form>

        

          @endforeach
    
        </div>
        @else 

        <div class="container text-center mt-4 mb-5">
            
          @include('inc.empty')

      </div>

        @endif
      
      </div>
        
        <div class="col-md-3">
            
            
            <div class="pb-4">

              <div class="border-2 border-bottom pb-3 mb-3">
                  <h6 class="text-xs fw-lighter text-white">Subject Navigation</h6>
                  <h6 class="text-xs text-color-gray">Showing navigations for this subject</h6>
                      </div>
                      
                      @if(count($attendances) != 0)
                      <a href="{{ route('checklist.report', $checklists->id)}}">
                      <button type="button" class="btn text-xs pb-3  pt-3 ps-4  div-hover text-start" style="width: 100%; color: #16A085;">
                        <svg class="me-1" style="fill: #16A085" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                        Attendance Reports
                    </button>
                      </a>
                      @else

                      <button type="button" class="btn text-xs pb-3  pt-3 ps-4  div-hover text-start" style="width: 100%; color: #16A085;" disabled>
                        <svg class="me-1" style="fill: #16A085" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                        Attendance Reports
                    </button>

                    @endif
                    
                    @if(count($attendances) != 0)

                    <a href="{{ route('checklist.editreport', $checklists->id)}}">
                    <button type="button" class="btn text-xs pb-3  pt-3 ps-4  div-hover text-start" style="width: 100%; color: #5DADE2;">
                      <svg class="me-1" style="fill: #5DADE2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>
                      Edit Daily Summary
                  </button>
                    </a>

                    @else

                    <button type="button" class="btn text-xs pb-3  pt-3 ps-4  div-hover text-start" style="width: 100%; color: #5DADE2;" disabled>
                      <svg class="me-1" style="fill: #5DADE2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>
                      Edit Daily Summary
                  </button>

                    @endif
                    
                    @if(count($attendances) == 0)
                  <button type="button" class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start" style="width: 100%; color: #A569BD" data-bs-toggle="modal" data-bs-target="#updateModal">
                      <svg class="me-1" style="fill: #A569BD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                      Edit Checklist
                  </button>
                  @else

                  <button type="button" class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start" style="width: 100%; color: #A569BD" disabled>
                    <svg class="me-1" style="fill: #A569BD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                    Edit Checklist
                </button>

                  @endif
      
                  <button type="button" class="btn text-xs pt-3 pb-3  ps-4 div-hover text-start" style="width: 100%; color: #EC7063;" data-bs-toggle="modal" data-bs-target="#delete">
                      <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.75 2.5a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25H1.75zM0 2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75v1.5A1.75 1.75 0 0114.25 6H1.75A1.75 1.75 0 010 4.25v-1.5zM1.75 7a.75.75 0 01.75.75v5.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25v-5.5a.75.75 0 111.5 0v5.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25v-5.5A.75.75 0 011.75 7zm4.5 1a.75.75 0 000 1.5h3.5a.75.75 0 100-1.5h-3.5z"></path></svg>
                      Delete Checklist
                  </button>

        

        

          </div>

          <h6 class="text-xs text-color-gray mb-3">My Advisory Class</h6>
                
          @foreach($outputSide as $output)
          <a href="/showchecklist/{{$output->id}}">

          <button type="button" class="btn text-xs text-white fw-bold ps-4 pt-3 pb-3 mb-3 text-start bg-black div-hover" style="width: 100%;">
            {{$output->subject}}
            <br>
            <h6 class="text-xs text-color-gray">{{$output->grade}} - {{$output->strand}}</h6>
         </button>

          </a>

         @endforeach


        </div>
    </div>

    <script>
         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    
      </script>

@endsection

