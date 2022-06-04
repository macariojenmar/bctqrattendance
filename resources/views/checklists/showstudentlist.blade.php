@extends('layouts.app')

@section('content')





<div class="animateFast">

    <div class="row mb-2">
        <div class="col-md">
            <h6 class="text-color-gray text-xs ">Select students below that you wanted to add on your subject checklist</h6>

        </div>
        <div class="col-md text-end">
            <a href="/addstudent">
                <span style="text-decoration: underline;" class="text-white" >
                    <h6 class="text-xs mb-2">Back Select</h6>
                </span>
              </a>
        </div>
    </div>

                <div class="bg-black p-4 rounded mb-4">
                    <div class="row align-items-center mt-2">
                        <div class="col-md-3 mb-3">
              
                            <img src="/images/avatar/{{$selected->profile}}" class="rounded-circle d-block mx-auto" style="width: 100px; height: 100px">
                            
                        </div>
                        <div class="col-md mb-3">
                            <h6 class="text-color-gray text-xs">Advisory Class</h6>
                            <h4 class="fw-bold text-uppercase">{{$selected->gradeLevel}} - {{$selected->strand}}</h4>
                        </div>
                        <div class="col-md mb-3">
                            <h6 class="text-color-gray text-xs">Adviser</h6>
                            <h4 class="fw-bold text-capitalize">{{$selected->name}}</h4>
                        </div>
                    </div>
              
              
                </div>

                @if(count($students) > 0)

     
                
                
                   

                <h6 class="text-color-gray text-xs text-capitalize">{{$selected->name}} student list</h6>

                <form href="{{ route('checklist.showstudentlist', $selected->classTitle) }}" method="GET" autocomplete="off">

                    @csrf

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


                <form action="{{ route('checklist.copyStudent') }}" method="POST" autocomplete="off">
                    
                    @csrf

                <div class="modal fade animateFast" id="continueModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" >
                      <div class="modal-content border-0 shadow">
                        <div class="modal-body">
                            <div class="text-end">
                            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: #2a2a2a" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
                            </button>
                            </div>
                        
                            
                
                            <div class="container p-4 pt-2 pb-5 text-white">
                              <h6>Select Subject Checklist</h2>
                                <h6 class="text-xs text-color-gray">Select below where the students will be added</h6>
                                
                
                                    <select class="form-select text-xs bg-black p-3 mt-4 div-hover text-capitalize" name="subjectTitle" id="gradeLevel" required>
                                               
                                        <option value="" disabled selected hidden>Select what checklist</option>
                                        
                                        @foreach($checklists as $checklist)
                                            <option class="text-capitalize" value="{{$checklist->strand}}-{{$checklist->subject}}">{{$checklist->strand}}-{{$checklist->subject}}</option>
                                        @endforeach
                                      
                                    </select>
                
                                <div class="d-grid d-flex justify-content-end mt-4 gap-2">
                  
                                  
                                  
                                  <button type="submit" class="btn btn-primary border-0 text-xs pt-3 pb-3 ps-4 pe-4 div-hover" >
                                    <svg style="fill: white" class="me-1" class="mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                                    Save
                                  </button>
                                 
                  
                                    <button type="button" class="btn btn-link text-xs div-hover ps-4 pe-4 bg-black" data-bs-dismiss="modal">Close</button>
                               
                                </div>
                  
                            </div>
                 
                           
                        </div>
                      </div>
                       
                      </div>
                    </div>
                
         


            <div class="row">
                <div class="col-md text-white">

                    <div class="form-check form-check-inline text-xs">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="all" value="option1" onclick="selects()" checked>
                        <label class="form-check-label" for="all">Select All</label>
                      </div>
                      <div class="form-check form-check-inline text-xs">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="custom" value="option2" onclick="deSelect()">
                        <label class="form-check-label " for="custom">Custom</label>
                      </div>
                      
                </div>
                <div class="col-md d-grid d-md-flex justify-content-md-end">
                      

                    <h6 class="text-xs text-white">
                        <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
                        {{$students->count()}} students 
                    </h6>
                
                
               
            </div>
            </div>
           
            <div class="row row-cols-2 row-cols-md-5 mb-3 align-items-center mt-3">

                @foreach($students as $student)
                <label class="form-check-label" for="check{{$student->id}}">
                <div class="col mb-3 bg-black p-4 rounded div-hover" style="min-height: 110px; max-height: 110px">
                    <div class="row">
                        
                        <div class="col-md-3 text-center">
                            <input class="form-check-input" type="checkbox" name="student[]" value="{{$student->idNum}}" id="check{{$student->id}}" checked>
                            
                        </div>
                        <div class="col-md">
                            
                            <h6 class="text-xs text-capitalize">{{$student->name}}</h6>
                            <h6 class="text-xs text-color-gray">{{$student->idNum}}</h6>
                            
                        </div>

                    
                    </div>
                   
                </div>
                </label>
                
                @endforeach

            </div>
            
              
            <div class="d-grid d-md-flex justify-content-md-end gap-2 mt-4">

                <button type="button" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover" data-bs-toggle="modal" data-bs-target="#continueModal">
                    Continue
                <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
            </button>
            
            </div>

            @else

            <div class="container text-center mt-4 mb-5">
                <img src="/images/search.svg" class="img-fluid" style="max-width: 300px">
                <h4 class="fw-bold text-white">This is empty</h4>
                <h6 class="text-color-gray text-sm"> The adviser haven't added students here yet</h6>
            </div>

            @endif

              
        </form>
   

</div>



<script>

 function selects(){  
                var ele=document.getElementsByName('student[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
function deSelect(){  
                var ele=document.getElementsByName('student[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             

</script>

@endsection