@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div>
                <div class="row mb-2 mt-3">
                    <div class="col-md-5">
                        <img src="/images/add.svg" class="d-block mx-auto mb-3" style="width: 170px">
                    </div>
                    <div class="col-md" >
                        
                        <h1 class="fw-bold pt-3">New Checklist</h1>
                        <h6 class="text-xs">Complete the information below to create new checklist</h6>
                        
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

                <div class="container shadow-xs pt-5 pb-5 mb-3 bg-body rounded">

                  <form action="{{ route('checklists.store') }}" method="POST">
                    
                    @csrf

                    <div class="input-group">
                        
                        <div class="container-fluid">

                        
                            <form>
                            <h6 class="text-xs text-color-gray">Subject Title</h6>
                            <input class="form-control text-xs rounded" name="title" type="text" placeholder="Enter subject title e.g. Oral Communication" aria-label="default input example">

                            <h6 class="text-xs text-color-gray mt-3">Strand</h6>
                            <input class="form-control text-xs rounded" name="strand" type="text" placeholder="Enter strand e.g. ICT CP" aria-label="default input example">
                          
                            <h6 class="text-xs text-color-gray mt-3">Enter Schedule</h6>
                            <input class="form-control text-xs rounded mb-3" name="schedule" type="text" placeholder="Enter schedule e.g. TThS" aria-label="default input example">

                            <div class="row mt-3">
                                <div class="col-md">
                                    
                                    <h6 class="text-xs text-color-gray">Select Grade Level</h6>

                                    <div class="form-check">
                                        
                                      <!--<h6 id="lblGrade" name="grade">Grade 11</h6>-->

                                        <input class="form-check-input" type="radio" name="grade" id="grade11" value="Grade 11" checked>
                                        <label class="form-check-label" for="grade11">
                                          Grade 11
                                        </label>
                                      </div>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="grade" value="Grade 12" id="grade12">
                                        <label class="form-check-label" for="grade12">
                                          Grade 12
                                        </label>
                                      </div>
                                     
                                      
                                    </div>
                                <div class="col-md">
                                    <h6 class="text-xs text-color-gray mt-2">Select Late Timer</h6>
                                    <div class="row">
                                      <div class="col-md">
                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="10min" value="10" checked>
                                          <label class="form-check-label" for="10min">
                                            10 minutes
                                          </label>
                                        </div>
                                      
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="late" id="15min" value="15">
                                          <label class="form-check-label" for="15min">
                                            15 minutes
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="late" id="none" value="None">
                                          <label class="form-check-label" for="none">
                                            None
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="text-xs text-color-gray mt-3">Enter Start & End of Class</h6>
                                      <input class="form-control text-xs rounded mb-2" name="start" type="text" placeholder="12:00 AM" aria-label="default input example">
                                      <input class="form-control text-xs rounded mb-3" name="end" type="text" placeholder="01:00 PM" aria-label="default input example">
                            <button type="submit" class="btn btn-primary text-xs fw-bold mt-2 pt-2 pb-2" id="save" style="width: 100%">
                                Save
                                <svg style="fill: white; margin-left: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                            </button>

                            <a href="/checklists">
                            <button type="button" class="btn btn-light text-xs fw-bold mt-2 pt-2 pb-2" id="save" style="width: 100%">
                              Go back
                            </button>
                            </a>
                            </form>
                        </div>
                    </div>
                  </form>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection