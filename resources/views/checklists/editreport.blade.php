@extends('layouts.nonav')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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

  <form action="{{ route('checklist.editreport', $checklists->id) }}" method="GET" autocomplete="off">
                
    @csrf

  <div class="row mb-2">
    <div class="col text-start">
      <h6 class="text-color-gray text-xs">Attendance Report</h6>
    </div>
    <div class="col text-end">
        <a href="{{route('checklist.showchecklist', $checklists->id)}}">
        <h6 class="text-xs text-white" style="text-decoration: underline">Return Subject</h6>
        </a>
    </div>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text bg-black border border-1">
    <svg style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>
    </span>
    <input type="text" class="form-control text-xs border border-1" id="flatpickr" name="date" placeholder="Select date to display" value="{{$date}}" style="background-color: white" onchange='if(this.value != 0) { this.form.submit(); }'>
    
  </div>

  </form>


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


  <script>

var example = flatpickr('#flatpickr');

flatpickr('#flatpickr',{
  // A string of characters which are used to define how the date will be displayed in the input box. 
  dateFormat: 'M d, Y'
});

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