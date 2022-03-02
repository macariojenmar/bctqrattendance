@extends('layouts.app')

@section('content')

    <div class="row gap-4 text-xs">
        <div class="col-md animateFast">

              <div class="row align-items-center mb-3">
                <div class="col-md">
                  <h5 class="fw-bold">Add Student</h5>
                  <h6 class="text-xs">Complete the information below to add new student</h6>
                </div>
                <div class="col-md" >
                  
                    <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="/showadclass">
                    <button type="button" class="btn btn-link text-xs mt-3 mb-3" style="width: 100%">
                      <svg class="me-1" style="fill: #0D6EFD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path></svg>
                      Go Back
                    </button>
                    </a>
                    </div>

                </div>
            </div>

                  @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-0">
                      
                        <strong>Whoops!</strong> There were some problems with your input.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        
                    </div>
                  @endif

                  @if(Session::get('success'))
                  
                  <div class="alert alert-success text-xs">
                      <span><strong>Success! </strong></span>{{ Session::get('success') }}

                  </div>
                  @endif

                  <div class="container shadow-xs pt-4 pb-2 ps-2 pe-2 mb-3 bg-body rounded">

                 

                    <form action="" method="POST" autocomplete="off">
                    
                      @csrf

                    <div class="input-group">
                        
                        <div class="container-fluid">

                            <h6 class="text-xs mb-4">Student Details</h6>

                            <h6 class="text-xs text-color-gray">ID Number</h6>
                            <input class="form-control text-xs rounded mb-3" name="title" type="number" placeholder="Enter ID number here" aria-label="default input example">

                            <h6 class="text-xs text-color-gray">Student Name</h6>
                            <input class="form-control text-xs rounded text-capitalize mb-3" name="title" type="text" placeholder="Enter student name here" aria-label="default input example">

                            <div class="row">
                              <div class="col-md">
                                <h6 class="text-xs text-color-gray">Email</h6>
                                <input class="form-control text-xs rounded mb-3" name="title" type="email" placeholder="name@email.com" aria-label="default input example">
                              </div>
                              <div class="col-md">
                                    
                              <h6 class="text-xs text-color-gray">Contact Number</h6>
                              <input class="form-control text-xs rounded mb-4" name="title" type="number" placeholder="09" aria-label="default input example">
                              </div>
                            </div>
                        
                            <h6 class="text-xs mb-4">Guardian Details</h6>

                            <h6 class="text-xs text-color-gray">Guardian Name</h6>
                            <input class="form-control text-xs rounded text-capitalize mb-3" name="title" type="text" placeholder="Enter guardian name here" aria-label="default input example">

                            
                            <div class="row">
                              <div class="col-md">
                                <h6 class="text-xs text-color-gray">Email</h6>
                                <input class="form-control text-xs rounded mb-3" name="title" type="email" placeholder="name@email.com" aria-label="default input example">
                              </div>
                              <div class="col-md">
                                    
                              <h6 class="text-xs text-color-gray">Contact Number</h6>
                              <input class="form-control text-xs rounded mb-4" name="title" type="number" placeholder="09" aria-label="default input example">
                              </div>
                            </div>
                            
                        </div>
                    </div>
                  

                </div>

            

                <div class="d-grid d-md-flex justify-content-md-end">

                <button type="submit" class="btn btn-primary text-xs fw-bold pt-2 pb-2 ps-4 pe-4" id="save" >
                  Save
                </button>
                
                
                </div>

              </form>
            

            
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection