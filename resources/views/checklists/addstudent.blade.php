@extends('layouts.app')

@section('content')

<div class="animateFast">

    <h6 class="text-color-gray text-xs mb-2">Advisers (Add students from advisory classes below)</h6>
   


@if(count($outputs) > 0)

<form action="{{ route('checklist.addstudent') }}" method="GET" autocomplete="off">
                
    @csrf


<div class="input-group mb-4 div-hover">
    <span class="input-group-text bg-black p-3">
        
        <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
        
    </span>
<input class="form-control text-xs bg-black" placeholder="Type strand or adviser name here" name="search" value="{{$search}}">

<button type="submit" class="text-xs bg-black ps-3 pe-3">
    Search
</button>

</div>

</form>


<div class="row row-cols-1 row-cols-md-3 mb-3 align-items-center">

    @foreach($outputs as $output)
    <div class="col mb-3 ">

        <a href="/showstudentlist/{{$output->classTitle}}">

        <div class="container-fluid text-capitalize bg-black rounded p-3 div-hover text-white" style="min-height: 200px">
            
                <div class="row mt-4 align-items-center">
                    <div class="col-md-5">
                        <img src="/images/avatar/{{$output->profile}}" class="rounded-circle d-block mx-auto" style="width: 90px; height: 90px">
                        
                    </div>
                    <div class="col-md">
                        <h6 class="text-color-gray text-xs">Adviser</h6>
                        <h6 class="text-sm fw-bold mb-3">{{$output->name}}</h6>

                        <h6 class="text-color-gray text-xs">Advisory Class</h6>
                        <h6 class="fw-bold text-uppercase">{{$output->strand}}</h6>
                        <h6 class="text-color-gray text-xs ">{{$output->gradeLevel}}</h6>

                        
                    </div>
                </div>
           
            
        </div>
        </a>

    </div>

    @endforeach

</div>

@else

<div class="container text-center mt-5 mb-5">
    
    <img src="/images/search.svg" class="img-fluid" style="max-width: 300px">
    <h4 class="fw-bold text-white">This is empty</h4>
    <h6 class="text-color-gray text-sm">No advisory classes created</h6>

</div>

@endif

</div>

@endsection