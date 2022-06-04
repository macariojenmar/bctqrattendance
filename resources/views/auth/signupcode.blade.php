@extends('layouts.app')

@section('content')
    

   <!-- Modal -->
   <div class="modal fade animateFast" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content border-0 p-3">
       
        <div class="modal-body">
          <h6 class="modal-title fw-bold mb-4 " id="staticBackdropLabel"> 
            Code copied to clipboard
          </h6>

          <div class="row align-items-center">
            <div class="col-md-3">
              <img src="/images/copied.svg" class="d-block mx-auto img-fluid">
            </div>
            <div class="col-md text-sm">
              You can now send the code to the user who wants to sign up.
            </div>
          </div>
          
          <div class="d-grid d-flex justify-content-end mt-4 mb-3">

          <button type="button" class="btn btn-primary text-sm ps-3 pe-3 " data-bs-dismiss="modal">Ok</button>

          </div>

        </div>
  
      </div>
    </div>
  </div>

  <form action="{{ route('auth.generateSignupCode') }}" method="POST" enctype="multipart/form-data" autocomplete="off">

    @csrf

    @method('PUT')

  <div class="modal fade animateFast" id="confirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content border-0 p-3">
        <div class="modal-body">
            <div class="text-end">
            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
            </button>
            </div>
        
            </div>
            
  
            <div class="container p-4 pb-5">
              
              <div class="text-center">
                <h6 class="text-sm fw-bold">Generate New Code</h6>
                <h6 class="text-xs text-color-gray mb-4">Please enter your password below</h6>
              </div>

              <h6 class="text-xs lh-lg mb-4">
                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                NOTE: You will be recorded as the last user who generated a sign up code.
            </h6>

        
            <div class="input-group gap-3">
                <svg class="mt-2" style="fill: #878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                <input class="form-control text-xs rounded" name="password" id="password" type="password" placeholder="Type your password here" aria-label="default input example" required>
            </div>

                <div class="d-grid d-flex justify-content-center mt-5 gap-3">
  
                  
                  
                  <button type="submit" class="btn btn-primary text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4">
                   Continue
                  </button>
                 
  
                    <button type="button" class="btn btn-link text-xs div-hover" data-bs-dismiss="modal">Close</button>
               
                </div>
  
            </div>
  
           
        </div>
       
      </div>
    </div>

  </form>
 
    <div class="row text-xs mt-3">

      <div class="col-md-2"></div>

        <div class="col-md animateFast">



              <div class="container p-5 rounded mb-4 mt-4">
                
                <h6 class="fw-bold mb-3">
                  Generate Sign up Code
              
                 </h6>

                <h6 class="text-xs lh-lg mb-5">
                  <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                  This sign up code is used by users who wants to create an account. Generate or copy the code and share it to the users who wants to sign up.
              </h6>
                
          @foreach ($scodes as $scode)

               
          <div class="row">
            <div class="col-md mb-2">
              <h6 class="text-xs text-color-gray">
                Sign up Code
            
               </h6>
            </div>
            <div class="col-md mb-2">
              <h6 class="text-xs">
                
                <div class="d-grid d-md-flex justify-content-md-end">
                <strong class="text-uppercase">{{ $scode->user }} </strong>&nbsp last generated the code
                </div>
                
            </h6>
            </div>
          </div>
          <input class="form-control rounded text-capitalize fw-bold p-3 mb-3 border-0 text-center" name="scode" id="code" type="text" value="{{ $scode->code }}" placeholder="Generate sign up code" aria-label="default input example" style="font-size: 30px" readonly>
          
        

          
       
           

          @endforeach
        
         

           

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                
         
                  <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 ps-4 pe-4 rounded mb-2 div-hover" id="save" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                      Generate new code
                    </button>

                    <button type="button" onclick="copyCode()" class="btn btn-light border-0 text-xs pt-2 pb-2 ps-4 pe-4 rounded mb-2 div-hover" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path></svg>
                    </button> 
                                     
                 
                                 
              </div>

             
  
                  </div>

                 
            

        </div>

            <div class="col-md-2"></div>
        </div>
      
      
@endsection