@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div class="row mb-4 mt-4">
                <div class="col-md-6">
                    <img src="images/explore.svg" class="d-block mx-auto mb-3" style="width: 200px">
                </div>
                <div class="col-md" >
                    
                    <h6 class="text-xs pt-4">Welcome Back!</h6>
                    <h1 class="fw-bold">Jane Doe</h1>
                    <h6 class="text-xs">Good to see you again. Have a great day!</h6>
                    
                </div>
            </div>

            
            <div class="container-fluid shadow-xs p-4 bg-body rounded mb-3">
                
                <div class="row">
                    <div class="col-md-2 mb-2">
                    <a href="/checklists/create">
                    <button type="button" class="btn btn-primary text-xs fw-bold " style="width: 100%">
                        <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                        New
                    </button>
                    </a>
                    </div>

                    <div class="col-md">

                    <div class="input-group gap-2">
                        
                        <input class="form-control text-xs rounded" type="text" placeholder="Search checklist" aria-label="default input example">
                        
                        <button type="button" class="btn btn-light text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                        </button>
                        
                    </div>
                    </div>
                </div>

               
            </div>
            
            <h6 class="text-xs">Subject Checklists</h6>
            <div class="container-fluid shadow-xs p-5 bg-body rounded">
                
                @if(count($checklists) > 0)

                    @foreach ($checklists as $checklists)
                        
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md">
                                    <a href="/checklists/{{$checklists->id}}" class="text-uppercase">
                                        <h6 class="text-sm fw-bold">
                                            
                                            <span class="me-1">
                                            {{$checklists->grade}}
                                            </span>

                                            {{$checklists->strand}} :

                                            {{$checklists->title}}
                                            
                                        </h6>
                                        <h6 class="text-xs">
                                            <span class="me-1">
                                                {{$checklists->schedule}}
                                            </span>
                                            {{$checklists->start}} - 
                                            {{$checklists->end}}
                                        </h6>
                                    </a>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="d-grid d-md-flex justify-content-md-end">
                                        <a href="#">
                                            <button type="button" class="btn btn-light text-uppercase text-xs mt-1 p-3" style="width: 100%; height: 100%">
                                                Generate QR code
                                                <svg class="pb-1" style="margin-left: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 1.5a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25H1.75zM0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0114.25 16H1.75A1.75 1.75 0 010 14.25V1.75zm9.22 3.72a.75.75 0 000 1.06L10.69 8 9.22 9.47a.75.75 0 101.06 1.06l2-2a.75.75 0 000-1.06l-2-2a.75.75 0 00-1.06 0zM6.78 6.53a.75.75 0 00-1.06-1.06l-2 2a.75.75 0 000 1.06l2 2a.75.75 0 101.06-1.06L5.31 8l1.47-1.47z"></path></svg>
                                            </button>
                                            
                                            </a>
                                    </div>
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