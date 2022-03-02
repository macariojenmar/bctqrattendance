@extends('layouts.app')

@section('content')
    

   <!-- Modal -->
   <div class="modal fade animateFast" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-2">
        <div class="modal-header">
          <h6 class="modal-title fw-bold" id="staticBackdropLabel"> 
            Code copied to clipboard
          </h6>
          
        </div>
        <div class="modal-body">

          <div class="row align-items-center">
            <div class="col-md-3">
              <img src="/images/copied.svg" class="d-block mx-auto img-fluid">
            </div>
            <div class="col-md text-sm">
              You can now send the code to the user who wants to sign up.
            </div>
          </div>
        
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary text-sm ps-3 pe-3" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>

 
    <div class="row text-xs mt-3">

      <div class="col-md-2"></div>

        <div class="col-md animateFast">
            
            <div class="container-fluid shadow-xs p-5 bg-body rounded mb-3">

              @foreach ($scodes as $scode)

                <h2 class="fw-bold text-capitalize">Generate Sign up Code</h2>
                <h6 class="text-xs mt-3 lh-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                    This sign up code is used by users who wants to create an account. Generate or copy the code and share it to the users who wants to sign up.
                </h6>

                <h6 class="text-sm mt-4 mb-3">
                    <strong class="text-uppercase">{{ $scode->user }}</strong> last updated the sign up code
                </h6>
                
                    <!-- THE CODE -->

                    <input class="form-control rounded text-capitalize fw-bold" name="scode" id="code" type="text" value="{{ $scode->code }}" placeholder="Generate sign up code" aria-label="default input example" readonly>
                    
                    <!-- THE CURRENT USER (THIS IS HIDDEN) -->

                    <input class="form-control rounded text-capitalize" name="user" type="text" value="{{ $LoggedUserInfo['name'] }}" hidden readonly>

                    <div class="d-grid gap-1 d-md-flex justify-content-md-end mt-3">
                      
                      <a href="#">
                        <button type="submit" onclick="generate()" class="btn btn-primary text-xs pt-2 pb-2 ps-4 pe-4 rounded mb-2" id="save" >
                            Generate new code
                          </button>
                        </a>                      
                       
                        <button type="button" onclick="copyCode()" class="btn btn-light text-xs pt-2 pb-2 ps-4 pe-4 rounded mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path></svg>
                          Copy
                      </button>                  
                    </div>
     
                @endforeach

                </div>
            
            </div>


            <div class="col-md-2"></div>
        </div>
      
      
@endsection