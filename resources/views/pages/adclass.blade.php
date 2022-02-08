@extends('layouts.app')

@section('content')
    <div class="row gap-4 text-xs">
        <div class="col-md animate">
            <div>
                <div class="row mb-2 mt-3">
                    <div class="col-md-5">
                        <img src="/images/adclass.svg" class="d-block mx-auto mb-3" style="width: 170px">
                    </div>
                    <div class="col-md" >
                        
                        <h1 class="fw-bold pt-3">My Advisory Class</h1>
                        <h6 class="text-xs">Create advisory classes and add students</h6>
                        <a href="/newadclass">
                        <button type="button" class="btn btn-primary text-xs mt-3 mb-3" style="width: 100%">
                          <svg style="fill: white; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                          Create advisory class
                        </button>
                        </a>
                        
                    </div>
                </div>

                <div>
                  <div class="row gap-3">
                    <div class="col-md text-center container-fluid shadow-xs bg-body rounded pt-5 pb-5 mb-2">
                      <img src="/images/class.svg" class="d-block mx-auto mb-5" style="width: 170px">
                      <h3 class="fw-bold"><span class="me-2">Grade 12 :</span>STEM</h3>
                      
                      <div class="container-fluid">
                      <button type="button" class="btn btn-light text-uppercase text-xs mt-3 p-3" style="width: 100%;">
                        Go to class
                        <svg style="margin-left: 5px; margin-bottom: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                      </button>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('inc.side')
        </div>
    </div>
@endsection