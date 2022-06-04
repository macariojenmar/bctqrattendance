@if ($errors->any())
<div class="container mt-3" style="padding-left: 2em; padding-right: 2em;" >
    
    <div class="container alert alert-dismissible fade show text-xs bg-black fw-lighter border-0">
        
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
</div>
@endif

@if(Session::get('success'))

<div class="container mt-3" style="padding-left: 2em; padding-right: 2em;">
    <div class="container ps-4 pe-4 alert alert-dismissible fade show text-xs border-0" style="background-color: #D5F5E3">

        <div class="row">
            <div class="col-md mb-2 mt-2">
                <span>
                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM0 8a8 8 0 1116 0A8 8 0 010 8zm11.78-1.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z"></path></svg>
                    <strong>Success! </strong>
                </span>
                {{ Session::get('success') }}
            </div>
            <div class="col-md-3 mt-2 text-end fw-bold" style="text-decoration: underline;" >
                <span data-bs-dismiss="alert" style="cursor: pointer;">Ok, got it
            </div>
        </div>
    </div>
</div>

@endif

@if(Session::get('fail'))

<div class="container mt-3" style="padding-left: 2em; padding-right: 2em;">
    <div class="container ps-4 pe-4 alert alert-dismissible fade show text-xs border-0 bg-black fw-lighter">

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
</div>

@endif
