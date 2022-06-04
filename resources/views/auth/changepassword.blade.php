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

        
        @if ($errors->any())
    
            
<div class="alert alert-dismissible fade show text-xs bg-black fw-lighter shadow-sm mb-4">
    
    <div class="row">
        <div class="col-md">
            <span class="text-danger">

            <svg class="me-1" style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
            
            <strong>Whoops! </strong> There were some problems with your input.
            </span>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-2 mt-2 text-end fw-bold text-white" style="text-decoration: underline;" >
            <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
        </div>
    </div>

</div>

@endif


            


        <form action="{{ route('auth.savePassword') }}" method="POST">
        
            @csrf

        <h6 class="text-xs text-color-gray">New password</h6>
            
                        <div class="input-group gap-3 mb-4">
                            <svg class="mt-2" style="fill: #aaaaaa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
                        
                        <input class="form-control text-xs rounded" name="password" type="password" placeholder="Enter new password"  data-bs-toggle="tooltip" data-bs-html="true" title="*Maximum of 12 characters<br>*Minimum of 5 characters" data-bs-placement="bottom" required>
                        </div>
                        
                        <h6 class="text-xs text-color-gray">Re-enter password</h6>
                        

                        <div class="input-group gap-3">

                       
                            <svg class="mt-2" style="fill: #aaaaaa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>

                        <input class="form-control text-xs rounded text-capitalize" name="password_confirmation" type="password" placeholder="Confirm password" required>
                        </div>

                     


                        <div class="d-grid d-md-flex justify-content-md-end gap-2 mt-5">


                            
                            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 pe-4 ps-4 div-hover">
                                Save Changes
                            <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
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