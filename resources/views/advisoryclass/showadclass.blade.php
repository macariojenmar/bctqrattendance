@extends('layouts.app')

@section('content')

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
            <h6 class="text-white mb-3">Delete Class</h6>
            <h6 class="text-white text-xs mb-4">This class will be deleted permanently.</h6>
            <h6 class="text-color-gray text-xs">Note: Users who copied the students in this class will NOT be affected</h6>
            
              <div class="d-grid d-flex justify-content-end mt-4 gap-2">

                
                <a href="{{route('advisoryclass.deleteClass', $outputs->id)}}">
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

<div class="modal fade animateFast" id="clear" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content border-0 shadow">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
              
          <form action="{{ route('advisoryclass.clearList', $outputs->id) }}" method="POST" enctype="multipart/form-data">
  
            @csrf

          <div class="container p-4 pt-2 pb-5 text-white">
            <h6 class="text-white mb-3">Clear student list</h6>
            <h6 class="text-white text-xs mb-4">The students on this class will be deleted permanently.</h6>
            <h6 class="text-color-gray text-xs">Note: Users who copied the students in this list will NOT be affected</h6>
            
              <div class="d-grid d-flex justify-content-end mt-4 gap-2">

                
                
                <button type="submit" class="btn btn-danger border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >

                  I understand, clear anyway
                </button>
               

                  <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
             
              </div>

          </div>

          </form>

 
         
      </div>
    </div>
     
    </div>
  </div>

  <div class="modal fade animateFast" id="uploadStudentList" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" >
      <div class="modal-content border-0 shadow">
        <div class="modal-body">
            <div class="text-end">
            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
            </button>
            </div>
        
                
      <form action="{{ route('advisoryclass.importStudent') }}" method="POST" enctype="multipart/form-data">
    
        @csrf

            <div class="container p-4 pt-2 pb-5 text-white">
              <h6>Upload Student List</h2>
                <h6 class="text-xs text-color-gray">Select file to upload</h6>
                
                <div class="bg-black p-5 mt-4 mb-4 rounded text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" class="mb-4" viewBox="0 0 16 16" width="18" height="18"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                  <h6 id="label" class="mb-3">No file yet</h6>
                  <input type="file" name="file" id="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" hidden>

                  <label for="file" style="cursor: pointer">
                  <h6 class="text-xs fw-normal" style="text-decoration: underline">Browse file to upload</h6>
                  </label>

                </div>
    

                <div class="d-grid d-flex justify-content-end mt-4 gap-2">
  
                  
                  
                  <button type="submit" class="btn btn-primary border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >
                    <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" class="me-1" class="mb-4" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.53 1.22a.75.75 0 00-1.06 0L3.72 4.97a.75.75 0 001.06 1.06l2.47-2.47v6.69a.75.75 0 001.5 0V3.56l2.47 2.47a.75.75 0 101.06-1.06L8.53 1.22zM3.75 13a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5z"></path></svg>

                    Upload
                  </button>
                 
  
                    <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
               
                </div>
  
            </div>
  
      </form>
           
        </div>
      </div>
       
      </div>
    </div>



    <div class="modal fade animateFast" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" >
        <div class="modal-content border-0 shadow">
          <div class="modal-body">
              <div class="text-end">
              <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
              <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
              </button>
              </div>
          
                  
        <form action="{{ route('advisoryclass.updateClassAd', $outputs->id) }}" method="POST" enctype="multipart/form-data">
      
          @csrf

          @method('PUT')
  
              <div class="container p-4 pt-2 pb-5 text-white">
                <h6>Update Details</h2>
                  <h6 class="text-xs text-color-gray mb-4">Change details below</h6>
                  
                  <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                      
                        <h6 class="text-xs">Current: {{$outputs->gradeLevel}}</h6>
                        <select class="form-select text-xs" name="grade" required>
                          <option value="" disabled selected hidden>Select new grade level</option>
                          <option value="Grade 11">Grade 11</option>
                          <option value="Grade 12">Grade 12</option>
                        </select>
                      
                    </div>
                    <div class="col">

                      <h6 class="text-xs">Current: {{$outputs->strand}}</h6>
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

  <div class="modal fade animateFast" id="addStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content border-0 shadow">
        <div class="modal-body">
            <div class="text-end">
            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
            </button>
            </div>
        
            
            
            <form action="{{ route('advisoryclass.savestudent', $outputs->id) }}" method="POST" autocomplete="off">
                    
              @csrf

            <div class="container p-4 pt-2 pb-5 text-white">
              <h6>Add Student</h2>
                <h6 class="text-xs text-color-gray">Please complete the information needed below</h6>
                
               
                  
                  <div class="row mt-5">
                    <div class="col-md">
                      <h6 class="text-xs mb-3">Student Details</h6>

                      <h6 class="text-color-gray text-xs">ID Number</h6>
   
                      <div class="input-group mb-4 div-hover">
                          <span class="input-group-text bg-black p-3">
                              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M3 7.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-3zm10 .25a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75zM10.25 11a.75.75 0 000-1.5h-2.5a.75.75 0 000 1.5h2.5z"></path><path fill-rule="evenodd" d="M7.25 0A1.75 1.75 0 005.5 1.75V3H1.75A1.75 1.75 0 000 4.75v8.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H10.5V1.75A1.75 1.75 0 008.75 0h-1.5zm3.232 4.5A1.75 1.75 0 018.75 6h-1.5a1.75 1.75 0 01-1.732-1.5H1.75a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25h-3.768zM7 1.75a.25.25 0 01.25-.25h1.5a.25.25 0 01.25.25v2.5a.25.25 0 01-.25.25h-1.5A.25.25 0 017 4.25v-2.5z"></path></svg>
                            </span>
                      <input type="number" name="idNum" class="form-control text-xs bg-black text-white" placeholder="Enter ID number" required>
                      </div>

                      <h6 class="text-color-gray text-xs">Student Name</h6>
   
                      <div class="input-group mb-4 div-hover">
                          <span class="input-group-text bg-black p-3">
                              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                          </span>
                      <input type="text" name="name" class="form-control text-xs bg-black text-capitalize" placeholder="Last name First name" required>
                      </div>

                      <h6 class="text-color-gray text-xs">Student Email (Optional)</h6>
   
                      <div class="input-group mb-4 div-hover">
                          <span class="input-group-text bg-black p-3">
                              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>
                            </span>
                      <input type="email" name="email" class="form-control text-xs bg-black " placeholder="Enter email of student">
                      </div>

                    </div>
                    <div class="col-md">
                      <h6 class="text-xs mb-3">Guardian Details (Optional)</h6>
                      <h6 class="text-color-gray text-xs">Guardian Name</h6>
   
                      <div class="input-group mb-4 div-hover">
                          <span class="input-group-text bg-black p-3">
                              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                          </span>
                      <input type="text" name="guardian" class="form-control text-xs bg-black text-capitalize" placeholder="Enter name of guardian">
                      </div>

                      <h6 class="text-color-gray text-xs">Guardian Email</h6>
   
                      <div class="input-group mb-4 div-hover">
                          <span class="input-group-text bg-black p-3">
                              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>
                            </span>
                      <input type="email" name="guardianemail" class="form-control text-xs bg-black" placeholder="Enter email of student">
                      </div>

                    </div>
                  </div>
                
               

                <div class="d-grid d-flex justify-content-end mt-4 gap-2">
  
                  
                  
                  <button type="submit" class="btn btn-primary border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >
                    <svg style="fill: white" class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                    Save
                  </button>
                 
  
                    <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
               
                </div>
  
            </div>

          </form>
  
           
        </div>
      </div>
       
      </div>
    </div>


    

    <div class="row gap-4 text-xs">

     
    
        <div class="col-md animateFast">

          <div class="container-fluid background-image rounded p-4 ps-5 pe-5 mb-4 shadow-sm">

            <div class="row align-items-center">

            <div class="col-md pt-2" >
                
             
                <h3 class="fw-bold text-uppercase" style="color: white">
                  {{$outputs->gradeLevel}} - {{$outputs->strand}}
                </h3>

               

            
            </div>
            <div class="col-md-3 text-center">
              
              <div class="bg-black p-3 border-0 rounded">
                <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="15" height="15"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                {{$students->count()}} students 
              </div>

            </div>

          </div>
        </div>

        <h6 class="text-color-gray text-xs">Student List</h6>
        
        <form action="{{ route('advisoryclass.showadclass', $outputs->id) }}" method="GET" autocomplete="off">
                
          @csrf

        <div class="input-group mb-4 div-hover">
          <span class="input-group-text bg-black p-3">
              
              <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
              
          </span>
      <input class="form-control text-xs bg-black" placeholder="Type student name here" name="search" value="{{$search}}">
      <button type="submit" class="text-xs bg-black ps-3 pe-3">
          Search
      </button>
      </div>
     
        </form>

      
   

        @if($students->count() > 0)

        <div class="row row-cols-1 row-cols-md-3">
          @foreach ($students as $student)

          <form action="{{ route('advisoryclass.deleteStudentAd', $student->id) }}" method="POST" autocomplete="off">
                
            @csrf

          <div class="col mb-3">

            <div class="bg-black p-3 rounded">

            <div class="row align-items-center">
              <div class="col">
                  <h6 class="text-xs fw-bold">{{$student->name}}</h6>
                  <h6 class="text-xs">{{$student->idNum}}</h6>
                  
              </div>
              <div class="col-3">
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
          
          <div class="container text-center mt-5">
             @include('inc.empty')

             <h6 class="text-white text-xs mt-4">Add Student or Upload Student List to add</h6>
          </div>

          @endif



        </div>

 

        <div class="col-md-3">

          
          <div class="bg-black p-4 rounded mb-4 shadow-sm">


              <h6 class="text-xs fw-lighter text-color-gray mb-3">Class Navigation</h6>
                
               
                    <button type="button" class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start" style="width: 100%; color: #2E86C1" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                      <svg class="me-1" style="fill: #2E86C1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                      Add Student
                  </button>
                    

                  @if($students->count() == 0)
                  <button type="button" class="btn text-xs pt-3 pb-3  ps-4  div-hover text-start" style="width: 100%; color: #16A085;" data-bs-toggle="modal" data-bs-target="#uploadStudentList"> 
                    <svg class="me-1" style="fill: #16A085" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                    Upload Student List
                </button>

                @else

                  <button type="button" class="btn text-xs pt-3 pb-3  ps-4  div-hover text-start" style="width: 100%; color: #16A085;" data-bs-toggle="modal" data-bs-target="#clear"> 
                    <svg class="me-1" style="fill: #16A085" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                    Clear list & Upload new
                </button>

                @endif

                
                @if(count($students) == 0)

                <button class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start text-white fw-lighter mb-1" style="width: 100%;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                  <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                  Edit this class
                  <svg class="ms-2" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>
                </button>

                @else 

               
                <button class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start text-white fw-lighter mb-1" style="width: 100%;" type="button" disabled>
                  <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                  Edit this class
                  <svg class="ms-2" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>
                </button>

                @endif

                <div class="collapse animateFast" id="collapseExample1">

                <button type="button" class="btn text-xs ps-4 pt-3 pb-3 div-hover text-start" style="width: 100%; color: #A569BD" data-bs-toggle="modal" data-bs-target="#updateModal">
                    <svg class="me-1" style="fill: #A569BD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                    Update Class
                </button>
                
              
                <button type="button" class="btn text-xs pt-3 pb-3  ps-4 div-hover text-start" style="width: 100%; color: #EC7063;" data-bs-toggle="modal" data-bs-target="#delete">
                    <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.75 2.5a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25H1.75zM0 2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75v1.5A1.75 1.75 0 0114.25 6H1.75A1.75 1.75 0 010 4.25v-1.5zM1.75 7a.75.75 0 01.75.75v5.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25v-5.5a.75.75 0 111.5 0v5.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25v-5.5A.75.75 0 011.75 7zm4.5 1a.75.75 0 000 1.5h3.5a.75.75 0 100-1.5h-3.5z"></path></svg>
                    Delete Class
                </button>

               
                
                
          </div>

      </div>
            
           
              <h6 class="text-xs text-color-gray mb-3">My Advisory Class</h6>
                
                  @foreach($outputSide as $output)
                  <a href="/showadclass/{{$output->id}}">

                  <button type="button" class="btn text-xs text-white fw-bold ps-4 pt-3 pb-3 mb-3 text-start bg-black div-hover" style="width: 100%;">
                    {{$output->gradeLevel}} - {{$output->strand}}
                    <br>
                   
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

   document.querySelector("#file").onchange = function(){
    document.querySelector("#label").textContent = this.files[0].name;
  }
 
   </script>
    

@endsection