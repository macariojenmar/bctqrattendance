@extends('layouts.app')

@section('content')

<div class="animateFast">
    
  <h6 class="text-color-gray text-xs">Discover Absences</h6>

    <div class="bg-black border border-1 rounded p-4 shadow-sm ">

        @if(count($dropped) > 0)

      

        <div class="table-responsive" id="no-more-tables">

        <table class="table table-borderless text-xs">
          <thead>
            <tr>
              <th scope="col">ID Number</th>
              <th scope="col">Name</th>
              <th scope="col">Subject</th>
              <th scope="col">Absences</th>
              
              <th scope="col">Dropped</th>
      
            </tr>
          </thead>
          <tbody>
            @foreach ($dropped as $drop)
            
            <tr>
              
              <td data-title="ID Number" >{{$drop->idNumber}}</td>
              <td data-title="Name" class="fw-bold">{{$drop->name}}</td>
              
              <td data-title="Subject" >{{$drop->subjectTitle}}</td>


              <td data-title="Absent" class="fw-bold">{{$drop->absent}}</td>

              <td data-title="Dropped" class="fw-bold">@if($drop->absent > 4)Yes @else No @endif</td>

              @if($drop->absent > 4)
              <td data-title="Status" class="fw-bold">Subject <span class="fw-normal">Send Email</span></td>
             @endif
              
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

</div>

@endsection