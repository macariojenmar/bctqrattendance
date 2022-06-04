@extends('layouts.nonav')

@section('content')


<div class="row p-4 pb-3 mt-3 gap-4">

    


    <div class="col-md-5 p-5 bg-black rounded ">
      

        <img src="/images/Forgot.svg" class="d-block mx-auto img-fluid">

        <h6 class="text-xs text-center mt-5">
            Forgot Password
        </h6>
        <h6 class="text-xs text-color-gray text-center">
            Complete the information needed to reset your password
        </h6>
    
    </div>



    <div class="col-md bg-black p-5 rounded">

        <div class="d-grid d-flex justify-content-center mb-4">
            <img src="/images/logoText.svg" style="width: 200px">
        </div>

        @if(Session::get('success'))
        
       
        <div class="alert alert-dismissible fade show text-xs border-0 fw-lighter shadow-sm mb-4" style="background-color: #D5F5E3">
        
          
                <div class=" mb-2 mt-2">
                    <span>
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM0 8a8 8 0 1116 0A8 8 0 010 8zm11.78-1.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z"></path></svg>
    
                    </span>
                    {{ Session::get('success') }}
                </div>
                
           
        </div>
        
        
        @endif

        @if(Session::get('fail'))


            <div class="alert alert-dismissible fade show text-xs bg-black fw-lighter shadow-sm mb-4">

                <div class="row">
                    <div class="col-md mb-2 mt-2">
                        <span class="text-danger">
                            <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
                            <strong>Failed! </strong>
                        </span>
                        {{ Session::get('fail') }}
                    </div>
                    <div class="col-md-3 mt-2 text-end fw-bold text-white" style="text-decoration: underline;" >
                        <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
                    </div>
                </div>
            </div>


            @endif

        <form action="{{route('auth.checkCode')}}" method="POST">
        
            @csrf
            
        <h6 class="text-xs text-color-gray text-center">Please enter the code below</h6>
            
                        <div class="input-group gap-3 mb-4">                        
                        <input class="form-control rounded text-center p-3 text-uppercase" name="code" type="text" placeholder="Code here" style="font-size: 20px" required>
                        </div>
                        
                            
                        <div class="d-grid d-flex justify-content-center gap-2 mt-4">

                            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover" style="width: 200px">
                                Verify
                            </button>
                            
                        
                        </div>
                    </form>
    </div>

 

</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl)
 })

 </script>


@endsection