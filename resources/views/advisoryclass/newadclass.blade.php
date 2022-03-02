@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div>
                <div class="row align-items-center mb-3">
                    <div class="col-md">
                      <h5 class="fw-bold">New Advisory Class</h5>
                      <h6 class="text-xs">Complete the information below to create new advisory class</h6>
                    </div>
                    <div class="col-md-5" >
                        
                      <div class="d-grid d-md-flex justify-content-md-end">
                        <a href="/adclass">
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

                <div class="container shadow-xs pt-4 pe-2 ps-2 pb-2 mb-3 bg-body rounded">

                  
                  <form action="" method="POST">
                    
                    @csrf

                    <div class="input-group">
                        
                        <div class="container-fluid">
                        
                            <form>

                            <div>
                                <div>
                                    
                                    <h6 class="text-xs text-color-gray">Select Grade Level</h6>

     
                                    <div class="form-check">
                                        

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

                                <div>

                                    <h6 class="text-xs text-color-gray mt-2">Select Strand</h6>
                                    <div class="row">
                                      <div class="col-md">
                                        
                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="stem" value="STEM" checked>
                                          <label class="form-check-label mb-3" for="stem">
                                            <span class="fw-bold">STEM</span>
                                            <br>
                                            Science, Technology, Engineering and Mathematics
                                          </label>
                                        </div>
                                      
                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="humss" value="HUMSS">
                                          <label class="form-check-label mb-3" for="humss">
                                            <span class="fw-bold">HUMSS</span>
                                            <br>
                                            Humanities & Social Sciences
                                          </label>
                                        </div>

                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="epas" value="IA EPAS">
                                          <label class="form-check-label mb-3" for="epas">
                                            <span class="fw-bold">IA EPAS</span>
                                            <br>
                                            Industrial Arts: Electronics Product Assembly & Servicing
                                          </label>
                                        </div>
                                        
                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="eim" value="IA EIM">
                                          <label class="form-check-label mb-3" for="eim">
                                            <span class="fw-bold">IA EIM</span>
                                            <br>
                                            Industrial Arts: Electrical Installation & Maintenance
                                          </label>
                                        </div>

                                      </div>
                                      <div class="col-md">
                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="anim" value="ICT ANIMATION">
                                          <label class="form-check-label mb-3" for="anim">
                                            <span class="fw-bold">ICT ANIMATION</span>
                                            <br>
                                            Information & Communication Technology: Animation
                                          </label>
                                        </div>

                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="cp" value="ICT CP">
                                          <label class="form-check-label mb-3" for="cp">
                                            <span class="fw-bold">ICT CP</span>
                                            <br>
                                            Information & Communication Technology: Computer Programming
                                          </label>
                                        </div>

                                        <div class="form-check">
                                        
                                          <input class="form-check-input" type="radio" name="late" id="css" value="ICT CSS">
                                          <label class="form-check-label mb-3" for="css">
                                            <span class="fw-bold">ICT CSS</span>
                                            <br>
                                            Information & Communication Technology: Computer Systems Servicing
                                          </label>
                                        </div>

                                      </div>
                                    </div>
                                </div>
                            </div>

                          

                         
                            </form>
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
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection