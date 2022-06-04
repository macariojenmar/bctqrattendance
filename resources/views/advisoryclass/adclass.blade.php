@extends('layouts.app')

@section('content')
    
        <div class="animateFast">
            
            <div class="row">
                <div class="col-md">
                    <h6 class="text-color-gray text-xs mb-3">My Advisory Class</h6>
                </div>
                <div class="col-md d-grid d-md-flex justify-content-md-end">
                    <h6 class="text-white text-xs mb-3">{{$outputs->count()}}/3 class</h6>
                </div>
            </div>
          

            <div class="row row-cols-1 row-cols-md-3 mb-3 align-items-center">

                @if(count($outputs) > 0)

                @foreach($outputs as $output)
                <div class="col mb-3">

                    <a href="/showadclass/{{$output->id}}">

                    <div class="container-fluid bg-black text-capitalize rounded p-5 div-hover" style="min-height: 160px">

                        <h6 class="text-color-gray text-xs">Strand & Grade Level</h6>
                        <h4 class="fw-bold">
                          
                           {{$output->strand}}
                        
                        </h4>

                        <h6>{{$output->gradeLevel}}</h6>
                        
                    </div>

                    </a>
                   
                </div>

                @endforeach

                @if(count($outputs) < 3)

                <div class="col-md-2 d-grid d-flex justify-content-end justify-content-md-start">

                    <a href="/newadclass">

                    <button type="button" class="btn btn-primary text-xs rounded-circle" style="height: 40px !important; width: 40px !important">
                        <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.75 2a.75.75 0 01.75.75V7h4.25a.75.75 0 110 1.5H8.5v4.25a.75.75 0 11-1.5 0V8.5H2.75a.75.75 0 010-1.5H7V2.75A.75.75 0 017.75 2z"></path></svg>               
                    </button>
                    </a>
                </div>

                @endif

                @else
                
                <div class="container text-center mt-4 mb-5">

                @include('inc.empty')

               

                    <a href="/newadclass">

                    <button type="button" class="btn btn-primary text-xs rounded-circle mt-3" style="height: 40px !important; width: 40px !important">
                        <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.75 2a.75.75 0 01.75.75V7h4.25a.75.75 0 110 1.5H8.5v4.25a.75.75 0 11-1.5 0V8.5H2.75a.75.75 0 010-1.5H7V2.75A.75.75 0 017.75 2z"></path></svg>               
                    </button>
                    </a>
         

                </div>

              

                @endif
          

               

            </div>
                     
        </div>
      


@endsection