@extends('layouts.app')

@section('content')
  

  <div class="animateFast">

    <div class="row mb-2">
      <div class="col-md">
          <h6 class="text-color-gray text-xs">Student Details</h6>
      </div>
      <div class="col-md text-end">
        <a href="{{route('checklist.showchecklist', $checklists->id)}}">
              <h6 class="text-xs text-white" style="text-decoration: underline">Return Subject Checklist</h6>
          </a>
      </div>
  </div>

    <div class="bg-black p-5 rounded shadow-sm mb-4">

      <div class="row align-items-center">
        <div class="col-md">
          <h6 class="text-color-gray text-xs">Name & ID Number</h6>
          <h3 class="text-capitalize fw-bold">{{$studentInfo->name}}</h3>
          {{$selected->idNumber}}
    
          <h6 class="text-color-gray text-xs mt-4">Student Email: 
          <span class="text-xs text-white fw-lighter">{{$studentInfo->email}}</span>
        </h6>
        <h6 class="text-color-gray text-xs mt-3">Guaradian: 
          <span class="text-xs text-white fw-lighter text-capitalize">{{$studentInfo->guardian}}</span>
        </h6>
        <h6 class="text-color-gray text-xs mt-3">Guaradian Email: 
          <span class="text-xs text-white fw-lighter">{{$studentInfo->guardianemail}}</span>
        </h6>
    
       
        @if($selected->percentage != '')

        <h6 class="text-color-gray text-xs mt-5">Attendance Status </h6>

        <div class="row row-cols-2 row-cols-md-2 mb-3">
          <div class="col">
            <h6 class="text-color-gray text-xs mt-4">Present</h6>
            <h5 class="fw-bold" style="color: #58D68D">{{$selected->present}}</h5>
          </div>
          <div class="col">
            <h6 class="text-color-gray text-xs mt-4">Late</h6>
            <h5 class="fw-bold" style="color: #F4D03F">{{$selected->late}}</h5>
          </div>
          <div class="col">
            <h6 class="text-color-gray text-xs mt-4">Absences</h6>
            <h5 class="fw-bold" style="color: #EC7063">{{$selected->absent}}</h5>
          </div>
          <div class="col">
            <h6 class="text-color-gray text-xs mt-4">Dropped</h6>
            <h5 class="fw-bold" style="color: #647687">{{$selected->dropped}}</h5>
          </div>
        </div>


        @endif
        
        </div>
        <div class="col-md">
          @if($selected->percentage != '')

          <div class="text-center">
            <h6 class="text-color-gray text-xs">Percentage</h6>
            <h1 class="fw-bold" style="color: #58D68D; font-size: 100px">{{$selected->percentage}}%</h1>

            <h6 class="text-color-gray text-xs mt-4">Graph</h6>
          <canvas class="mt-3" id="subjectStat" style="max-height: 160px"></canvas>

          </div>

          @else

        <div class="container p-4 text-color-gray text-sm text-center">
          No records yet
        </div>

        @endif

          

        </div>
      </div>
     

    
    </div>

  </div>

  <script>
    const ctx = document.getElementById("subjectStat").getContext('2d');
         const myChart = new Chart(ctx, {
           type: 'doughnut',
           data: {
             datasets: [{
               data: [80, 40, 30, 10],
               backgroundColor: ["#58D68D", "#F4D03F", "#EC7063","#566573"]
             }]
           },
         });
   </script>

      
@endsection