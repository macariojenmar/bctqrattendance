@extends('layouts.nonav')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<form action="{{ route('checklist.report',  $checklists->id) }}" method="GET">

  @csrf

<div class="modal fade animateFast" id="monthModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable ">
    <div class="modal-content border-0 bg-black shadow">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
          </div>
          
          <div class="container ps-4 pe-4 pb-5">

            <h6 class="text-color-gray text-xs">                     
              Select month to display</h6>

              <div class="input-group gap-3">
              <svg class="mt-2" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>

            <select class="form-select text-xs border border-1 shadow-sm rounded" name="month" onchange='if(this.value != 0) { this.form.submit(); }'>
              <option value="">Select Month</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May ">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
              </div>

             
             

          </div>

         
      </div>
     
    </div>
  </div>
  


 
<div class="animateFast">
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
        <input type="text" class="form-control text-xs border border-1" placeholder="Select month to display" value="{{$month}}" data-bs-toggle="modal" data-bs-target="#monthModal" readonly style="background-color: white;">
        

      <button type="button" class="ms-2 btn rounded text-xs border border-1 bg-black" onclick="window.print()" >
         Print or Download
     </button>

      </div>



              <div class="bg-black p-3 ps-4 pe-4 rounded shadow-sm border border-1">
              
                <h6 class="text-color-gray text-xs">Subject</h6>
                <h4 class="mb-2 fw-bold">{{$checklists->subject}}</h4>
                <h6 class="mb-2 text-xs">{{$checklists->grade}} - {{$checklists->strand}}</h6>
      
                <h6 class="text-color-gray text-xs">Schedule</h6>
                <h6 class="mb-2 text-white text-xs">{{$checklists->schedule}} {{$checklists->start}} - {{$checklists->end}}</h6>
      
                </div>

                <div class="bg-black p-4 rounded shadow-sm mt-3 border border-1" >
                  <h6 class="text-color-gray text-xs">Attendance Summary</h6>
                    
                  <div class="row row-cols-1 row-cols-md-2 align-items-center">

                    <div class="col text-center mb-3">
                      
                      <h6 class="text-color-gray text-xs">Percentage (Present this month)</h6>

                     
                      
                      <h1 class="text-white text-center mt-4" style="font-size: 80px"> {{ round($percentage, 2) }}%</h1>
                      
                      
                    </div>
                    <div class="col">
              
                      <div class="row row-cols-2 row-cols-md-2 mb-3">
                        <div class="col mb-3">
                          <div class="shadow-sm p-2 pb-4 pt-4 rounded text-center" style="background-color: #58D68D">
                            <h2 class="text-white"> <span id="present">{{$presentCounter}}</span></h2>
                            <h6 class="text-white text-xs">Present</h6>
                          </div>
                        </div>
                   
                        <div class="col mb-3">
                          <div class="shadow-sm p-2  pb-4 pt-4 rounded text-center" style="background-color: #EC7063">
                            <h2 class="text-white"> <span id="absent">{{$absentCounter}}</span></h2>
                            <h6 class="text-white text-xs">Absent</h6>
                          </div>
                        </div>
                        <div class="col mb-3">
                          <div class="shadow-sm p-2  pb-4 pt-4 rounded text-center" style="background-color: #F4D03F">
                            <h2 class="text-white"> <span id="late">{{$lateCounter}}</span></h2>
                            <h6 class="text-white text-xs">Late</h6>
                          </div>
                        </div>
                        <div class="col mb-3">
                          <canvas id="subjectStat" style="max-height: 100px"></canvas>
                        </div>
                      </div>
           
              
                    </div>
                    
                  </div>
                </div>


      <div class="row mt-3">
        <div class="col">
          <h6 class="text-color-gray text-xs">Present Summary</h6>
        </div>
        <div class="col">
          <h6 class="text-white fw-bold text-end text-xs">
            <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
            {{$presentCounter}}
            Present
          </h6>
        </div>
      </div>
   
   

      <div class="bg-black border border-1 rounded p-4 shadow-sm ">

        @if(count($presents) > 0)

        <div class="table-responsive" id="no-more-tables">

        <table class="table table-borderless text-xs">
          <thead>
            <tr>
              <th scope="col">ID Number</th>
              <th scope="col">Name</th>
              <th scope="col">Present</th>
              <th scope="col">Absences</th>
              <th scope="col">Percentage</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($presents as $present)
            
            <tr>
              
              <td data-title="ID Number" >{{$present->idNumber}}</td>
              <td data-title="Name" class="fw-bold">{{$present->name}}</td>
              <td data-title="Present" >{{$present->present}} / {{$dateChecked}}</td>
              <td data-title="Absent" >{{$dateChecked - $present->present}}</td>
              <td data-title="Percentage" class="fw-bold">{{round(($present->present / $dateChecked) * 100, 3) }}%</td>
            </tr>

            @endforeach
          
          </tbody>
        </table>

        </div>

        @else

        <div class="container text-center mt-4 mb-5">

        @include('inc.empty')

        </div>

        @endif

    </div>
   
    @if(count($lates) > 0)

  <div class="row mt-3">
    <div class="col">
      <h6 class="text-color-gray text-xs">Late Counter</h6>
    </div>
    <div class="col">
      <h6 class="text-white fw-bold text-end text-xs">
        <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z"></path></svg>
        {{$lateCounter}}
        Lates
      </h6>
    </div>
  </div>

  <div class="bg-black rounded p-4 shadow-sm">

  
    <div class="table-responsive" id="no-more-tables">

      <table class="table table-borderless text-xs">
        <thead>
          <tr>
            <th scope="col">ID Number</th>
            <th scope="col">Name</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lates as $late)
          
          <tr>
            
            <td data-title="ID Number" >{{$late->idNumber}}</td>
            <td data-title="Name" class="fw-bold">{{$late->name}}</td>
            <td data-title="Total" >{{$late->late}}</td>

          </tr>

          @endforeach
        
        </tbody>
      </table>

      </div>

</div>


@endif

        @foreach ($absents as $absent)

        

        @if($absent->absent > 4)


        <h6 class="text-color-gray text-xs mt-3">Dropped</h6>

        <div class="bg-black rounded p-3 shadow-sm">

          <div class="row">
            <div class="col">
              <h6 class="text-xs fw-bold">ID Number</h6>
            </div>
            <div class="col">
              <h6 class="text-xs fw-bold">Name</h6>
            </div>
          </div>

                <div class="row">
                  <div class="col">
                    <h6 class="text-xs">{{$absent->idNumber}}</h6>
                  </div>
                  <div class="col">
                    <h6 class="text-xs fw-bold">{{$absent->name}}</h6>
                  </div>
                </div>
                
        </div>
        @endif

      
        @endforeach


</div>






</div>

</form>

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
      });


</script>

@endsection