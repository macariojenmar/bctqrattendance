@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animateFast">
            <div class="row mb-4 mt-4">
                <div class="col-md-6">
                    <img src="images/explore.svg" class="d-block mx-auto mb-3" style="width: 200px">
                </div>
                <div class="col-md" >
                    
                    <h6 class="text-xs pt-4">Welcome Back!</h6>
                    <h1 class="fw-bold text-capitalize">{{ $LoggedUserInfo['name'] }}</h1>
                    <h6 class="text-xs">Good to see you again. Have a great day!</h6>
                    
                </div>
            </div>

            
            <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">
                
                <div class="row">
                    <div class="col-md-2 mb-2">
                    <a href="{{ route('checklist.newchecklist')}}">
                    <button type="button" class="btn btn-primary text-xs fw-bold " style="width: 100%">
                        <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                        New
                    </button>
                    </a>
                    </div>

                    <div class="col-md">

                    <div class="input-group gap-2">
                        
                        <input class="form-control text-xs rounded" type="text" placeholder="Search checklist" aria-label="default input example">
                        
                        <button type="button" class="btn btn-light text-xs rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                        </button>
                        
                    </div>
                    </div>
                </div>

               
            </div>
            
            <h6 class="text-xs">Subject Checklists</h6>
            

            @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 text-xs">
                <span><strong>Success! </strong></span>{{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="container-fluid shadow-xs p-2 mb-3 bg-body rounded ">
                
                @if(count($checklists) > 0)

                @foreach ($checklists as $checklist)

                        <div class="container mb-4">
                            <div class="row align-items-center mt-4">
                                <div class="col-md-3">
                                    <img src="images/checklist1.svg" class="d-block mx-auto pb-3" style="width: 100px">
                                </div>
        
                                <div class="col-md">
                                    <a href="/showchecklist/{{$checklist->id}}" class="text-uppercase">
                                        <h6 class="text-sm fw-bold" style="text-decoration: underline !important">
                                            
                                            
                                            {{$checklist->grade}} - 
                                           

                                            {{$checklist->strand}} :

                                            {{$checklist->title}}
                                            
                                        </h6>
                                        <h6 class="text-xs">
                                            <span class="me-1">
                                                {{$checklist->schedule}}
                                            </span>
                                            {{$checklist->start}} - 
                                            {{$checklist->end}}
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach

                        @else
                            @include('inc.empty')
                        @endif

                
            </div>

          
            

        </div>
      
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection