@extends('layouts.app')

@section('content')

<form action="{{ route('checklist.user') }}" method="GET" autocomplete="off">
                
    @csrf

<div class="row gap-4 text-xs">
    <div class="col-md animateFast">

        <div class="container-fluid rounded p-5 mb-4 shadow-sm background-image" >
            <div class="row ">
                <div class="col-md-1">
                   <img src="data:image/png;base64,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"/>

                </div>
                <div class="col-md" style="color: white">
                    <h4>
                        Welcome Back <span class="fw-bold text-uppercase">{{ $LoggedUserInfo['name'] }}!</span>
                    </h4>
                    <h6 class="text-sm pt-1 fw-lighter">There are lot of things to do! Have a great day!</h6>
                </div>
            </div>
            
        </div>

        @if(count($checklists) > 0)

        <h6 class="text-color-gray text-xs">Subject Checklists</h6>
   
        <div class="input-group mb-4 div-hover">
            <span class="input-group-text bg-black p-3">
                
                <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                
            </span>
        <input class="form-control text-xs bg-black" placeholder="Search subject here" name="search" value="{{$search}}">
        <button type="submit" class="text-xs bg-black ps-3 pe-3">
            Search
        </button>
        </div>
       

        <div class="row row-cols-1 row-cols-md-3 mb-3 align-items-center">

           

            @foreach ($checklists as $checklist)

            <div class="col mb-3 ">

                <a href="/showchecklist/{{$checklist->id}}">

                <div class="container-fluid text-capitalize bg-black rounded p-4 div-hover text-white" style="min-height: 250px">
                    
                    <h6 class="text-color-gray text-xs ">Subject</h6>
                    <h6 class="text-sm fw-bold">
                        {{$checklist->subject}}
                    
                    </h6>
                   
                    <h6 class="text-color-gray text-xs mt-3">Details</h6>

                    <h6 class="text-xs text-uppercase fw-lighter">
                    {{$checklist->grade}} - {{$checklist->strand}} 
                    </h6>
                    <h6 class="text-color-gray text-xs">Schedule</h6>

                    <h6 class="text-xs text-capitalize fw-lighter">
                    <span class="me-1">
                        {{$checklist->schedule}}
                    </span>
                    {{$checklist->start}} - 
                    {{$checklist->end}}
                    </h6>

                   
                    
                </div>
                </a>
            </div>

            @endforeach

            <div class="col-md-2 d-grid d-flex justify-content-end justify-content-md-start">

                <a href="{{ route('checklist.newchecklist')}}">

                <button type="button" class="btn btn-primary text-xs rounded-circle div-hover" style="height: 40px !important; width: 40px !important">
                    <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.75 2a.75.75 0 01.75.75V7h4.25a.75.75 0 110 1.5H8.5v4.25a.75.75 0 11-1.5 0V8.5H2.75a.75.75 0 010-1.5H7V2.75A.75.75 0 017.75 2z"></path></svg>               
                </button>
                </a>
            </div>

        </div>

        @else


        <div class="container text-center mt-4 mb-5">
            
            @include('inc.empty')

            <a href="{{ route('checklist.newchecklist')}}">

                <button type="button" class="btn btn-primary text-xs rounded-circle div-hover mt-3" style="height: 40px !important; width: 40px !important">
                    <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.75 2a.75.75 0 01.75.75V7h4.25a.75.75 0 110 1.5H8.5v4.25a.75.75 0 11-1.5 0V8.5H2.75a.75.75 0 010-1.5H7V2.75A.75.75 0 017.75 2z"></path></svg>               
                </button>
            </a>
        </div>
        
       
        @endif
      
    </div>
  
    <div class="col-md-3">

      
        @include('inc.side')

        @include('inc.online')

      
      
       

    </div>
</div>

</form>

@endsection