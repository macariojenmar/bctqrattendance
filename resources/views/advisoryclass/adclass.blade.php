@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div>
                <div class="row align-items-center mb-3">
                    <div class="col-md">
                      <h5 class="fw-bold">My Advisory Class</h5>
                      <h6 class="text-xs">Create advisory classes and add students</h6>
                    </div>
                    <div class="col-md" >
                      
                        <div class="d-grid d-md-flex justify-content-md-end">
                            <a href="/user">
                            <button type="button" class="btn btn-link text-xs mt-3 mb-3" style="width: 100%">
                              <svg class="me-1" style="fill: #0D6EFD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path></svg>
                              Go Back
                            </button>
                            </a>
                            </div>

                    </div>
                </div>

                <div>
                  <div class="container-fluid shadow-xs p-4 mb-3 bg-body rounded ">
              
                    <div class="mb-4">
                        <div class="row align-items-center mt-4">
                            <div class="col-md">
                                <img src="images/advisory.svg" class="d-block mx-auto pb-3" style="width: 160px">
                            </div>
    
                            <div class="col-md">
                                <a href="/showadclass" class="text-uppercase">
                                    <h4 class="fw-bold">
                                        
                                       Grade 11 - STEM
                                      
                                    </h4>
                                </a>
                                <h6 class="text-xs pt-3">
                                  <a href="/showadclass" class="text-primary pe-3">
                                  <svg style="fill: #0D6EFD; margin-right: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="13" height="13"><path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5zm1.75-.25a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM3.5 6.25a.75.75 0 01.75-.75h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h4a.75.75 0 000-1.5h-4z"></path></svg>
                                  View Class
                                  </a>
                                  <a href="#" class="text-danger">
                                  <svg style="fill: #DC3545; margin-right: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="13" height="13"><path fill-rule="evenodd" d="M2.75 2.5h10.5a.25.25 0 01.25.25v10.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V2.75a.25.25 0 01.25-.25zM13.25 1H2.75A1.75 1.75 0 001 2.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0015 13.25V2.75A1.75 1.75 0 0013.25 1zm-2 7.75a.75.75 0 000-1.5h-6.5a.75.75 0 000 1.5h6.5z"></path></svg>
                                  Remove Class
                                  </a> 
                                </h6>
                               

                            </div>
                        </div>
                    </div>
            </div>

            <div class="d-grid d-md-flex justify-content-md-end">
                <a href="/newadclass">
                <button type="button" class="btn btn-primary text-xs mb-3 ps-3 pe-3" style="width: 100%">
                  <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                  New
                </button>
                </a>
                </div>

            </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection