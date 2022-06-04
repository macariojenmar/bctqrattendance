@extends('layouts.nonav')

@section('content')
<div class="animateFast">
  
  @if(Session::get('success'))

      <div class="ps-4 pe-4 alert alert-dismissible fade show text-xs border-0 mt-4" style="background-color: #D5F5E3">
  
          <div class="row">
              <div class="col-md mb-2 mt-2">
                  <span>
                      <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM0 8a8 8 0 1116 0A8 8 0 010 8zm11.78-1.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z"></path></svg>
                      <strong>Success! </strong>
                  </span>
                  {{ Session::get('success') }}
              </div>
              <div class="col-md-3 mt-2 text-end fw-bold" style="text-decoration: underline;" >
                  <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
              </div>
          </div>
      </div>
 
  
  @endif

  
<div class="modal fade animateFast" id="sendEmail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable  ">
    <div class="modal-content border-0 bg-black">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
          </div>
          

          <div class="container p-4 pb-5 text-center">

            <h6 class="mb-3 fw-lighter">Are you sure you want to <strong>SEND</strong> emails?</h2>
              <h6 class="text-xs text-color-gray">Sending emails to students or guardians might take some time.</h6>

              <div class="d-grid d-flex justify-content-center mt-5 gap-3">

                
                <a href="{{route('checklist.sendEmail', $checklist->id)}}">
                <button type="button" class="btn btn-success text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4" data-bs-dismiss="modal">
                  I understand, send email
                </button>
                </a>
               

                  <button type="button" class="btn btn-link text-xs div-hover text-white" data-bs-dismiss="modal">Close</button>
             
              </div>

          </div>

         
      </div>
     
    </div>
  </div>


<div class="row mt-4 mb-2">
  <div class="col-md">
    <h6 class="text-color-gray text-xs ">Attendance Summary</h6>
  </div>
  <div class="col-md text-end">
    
      <h6 class="text-xs" >
       
        <button type="button" class="dropdown-toggle border-0 text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent">
          Done
        </button>

        <ul class="dropdown-menu dropdown-menu-end text-xs" aria-labelledby="dropdownMenuButton1">

          <li>
            <a class="dropdown-item text-white" href="{{route('checklist.showchecklist', $checklist->id)}}">
              <button type="submit" class="btn text-xs">
              Done checking
              </button>
          </a>
        </li>

        <li>
            <a class="dropdown-item ">
            <button type="submit" class="btn text-xs" data-bs-toggle="modal" data-bs-target="#sendEmail">
            Done checking (Send emails)
            </button>
            </a>
        
      </li>
      
      <form action="{{ route('checklist.reset', $checklist->id) }}" method="POST" autocomplete="off">
                
        @csrf

      <li><a class="dropdown-item" href=""><button type="submit" class="btn text-xs">Reset & Go to checklist</button></a></li>
        
      </form>

    </ul>
        
      
      </h6>
     
  </div>
</div>
    

    <div class="row gap-3">
      <div class="col-md mb-3 bg-black p-4  rounded shadow">
        
       
            
          <h6 class="text-color-gray text-xs">Subject</h6>
          <h4 class="mb-2 text-white fw-bold">{{$checklist->subject}}</h4>
          <h6 class="mb-2 text-white text-xs">{{$checklist->grade}} - {{$checklist->strand}}</h6>

          <h6 class="text-color-gray text-xs">Schedule</h6>
          <h6 class="mb-2 text-white text-xs">{{$checklist->schedule}} {{$checklist->start}} - {{$checklist->end}}</h6>

 
      </div>

      <div class="col-md-5 mb-3 bg-black p-4 rounded shadow">
        
      
        <h6 class="text-color-gray text-xs">Graph</h6>
          <div class="row align-items-center d-grid d-flex justify-content-center">

            <div class="col-md-4">
              <canvas id="subjectStat" style="max-height: 110px"></canvas>
          </div>

            <div class="col-md-3">
                
                <h6 class="text-xs" style="color: #45ad71">
                    <svg style="fill: #45ad71" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                    Present: <span id="present" class="text-white fw-bold">{{$countPresent}}</span>
                    </h6>
    
                    <h6 class="text-xs" style="color: #dbbb39">
                      <svg style="fill: #F4D03F" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                      Late: <span id="late" class="text-white fw-bold">{{$countLate}}</span>
                      </h6>
    
                      <h6 class="text-xs" style="color: #EC7063">
                        <svg style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                        Absent: <span id="absent" class="text-white fw-bold">{{$countAbsent}}</span>
                        </h6>
    
            </div>

            

        </div>
       
      </div>
    </div>
 

    <h6 class="text-color-gray text-xs ">Students</h6>

    @foreach($attendances as $attendance)

    <form action="{{ route('checklist.saveUpdateAttendance', $attendance->id) }}" method="POST" autocomplete="off">
                
        @csrf

    <input type="text" value="{{ $attendance->id }}" hidden>

  
          <div class="row align-items-center bg-black p-3 ps-4 rounded">
            <div class="col-md">
              <h6 class="text-color-gray text-xs">ID Number</h6>
              <h6 class="text-white text-xs fw-bold">{{ $attendance->idNumber }}</h6>
            </div>
            <div class="col-md">
              <h6 class="text-color-gray text-xs">Student Name</h6>
              <h6 class="text-white text-xs fw-lighter text-capitalize">{{ $attendance->name }}</h6>
            </div>
            <div class="col-md">
              <h6 class="text-color-gray text-xs">Time in</h6>
              <h6 class="text-white text-xs fw-lighter">{{ $attendance->time }}</h6>
            </div>
            <div class="col-md-1 mt-1 mb-1">
             
              
              @if($attendance->status == 'Present')
                <div class="p-1 text-center pt-2 shadow-sm" style="background-color: #58D68D; color: #ffffff; border-radius: 30px;">
                <h6 class="text-xs">{{ $attendance->status }}</h6>
                </div>
              @endif
              @if($attendance->status == 'Late')
              <div class="p-1 text-center pt-2 shadow-sm" style="background-color: #F5B041; color: #ffffff; border-radius: 30px;">
              <h6 class="text-xs fw-lighter">{{ $attendance->status }}</h6>
              </div>
             @endif
             @if($attendance->status == 'Absent')
             <div class="p-1 text-center pt-2" style="background-color: #EC7063; color: #ffffff; border-radius: 30px;">
             <h6 class="text-xs fw-lighter">{{ $attendance->status }}</h6>
             </div>
            @endif
              
             
            </div>
            <div class="col-md-1 text-center mt-1 mb-1">
              <div class="dropdown">
                <a href="" class="dropdown-toggle text-white text-xs fw-lighter" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>
                Edit
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  
                <select class="form-select text-xs border-0" name="status" onchange='if(this.value != 0) { this.form.submit(); }'>
                  <option value="" disabled selected hidden>Change status</option>
                  <option value="Present">Present</option>
                  <option value="Late">Late</option>
                  <option value="Absent">Absent</option>
              </select>
                  
              </ul>
  
                </div>
            </div>

            
          </div>
    
       
      
    
   
    
    </form>

    @endforeach


</div>


  <script>

  const present = document.querySelector('#present').textContent;

  const late = document.querySelector('#late').textContent;

  const absent = document.querySelector('#absent').textContent;

    var data = {
             datasets: [{
               data: [present, late, absent],
               backgroundColor: ["#58D68D", "#F4D03F", "#EC7063"]
             }]
           }
           
    const ctx = document.getElementById("subjectStat").getContext('2d');
         const myChart = new Chart(ctx, {
           type: 'doughnut',
           data: data,
         });

         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })

   </script>

@endsection