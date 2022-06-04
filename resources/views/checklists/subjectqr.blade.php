@extends('layouts.nonav')

@section('content')
  

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

 <script crossorigin="anonymous" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- Modal -->

  <form action="{{ route('checklist.endCheckQR',  $checklists->id) }}" method="POST" enctype="multipart/form-data">

    @csrf

    @method('PUT')

  <div class="modal fade animateFast" id="exitModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable ">
      <div class="modal-content border-0 bg-black shadow">
        <div class="modal-body">
            <div class="text-end">
            <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
            <svg style="fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
            </button>
            </div>
        
            </div>
            

            <div class="container p-4 pb-5 text-center">

              <h6 class="mb-3">Are you sure you want to <strong>STOP</strong> attendance checking?</h2>
                <h6 class="text-sm">The subject QR code will change if you generate again.</h6>

                <div class="d-grid d-flex justify-content-center mt-5 gap-3">

                  
                  
                  <button type="submit" class="btn btn-success text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4" >
                    Yes, I'm done checking
                  </button>
                
                 

                    <button type="button" class="btn btn-link text-xs div-hover text-white" data-bs-dismiss="modal">Close</button>
               
                </div>

            </div>

           
        </div>
       
      </div>
    </div>
  </form>


  


  
<div class="pb-1 pt-2 text-center animateFast">

  @if($checklists->status != "Offline")

  
  <div class="row mb-2">
    <div class="col-md text-start">
      <h6 class="text-color-gray"><span class="text-white">{{$checklists->grade}} - {{$checklists->strand}}: {{$checklists->subject}}</span></h6>
    </div>
    <div class="col-md text-end">
      <a href="" data-bs-toggle="modal" data-bs-target="#exitModal" style="min-width: 140px">
      <h6 class="text-xs text-white" style="text-decoration: underline">Done Checking</h6>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md">

      <div class="bg-black p-4 rounded">
        <h6 class="text-xs text-color-gray">Subject Code</h6>
        <h2 class="fw-bold text-white">{{$checklists->code}} </h2>
      </div>

    </div>
    <div class="col-md">
      
      @if($checklists->late != 'None')
    <div class="bg-black p-3 pb-2 shadow-sm rounded mb-3">
      <h6 class="text-color-gray text-xs text-center ">Late Countdown</h6>
      <input type="text" id="time" name="time" class="form-control border-0 text-center" placeholder="00:00" readonly style="background-color: white; font-size: 30px !important">
      <h6 class="text-color-gray text-xs text-center">minutes</h6>
      </div>

    @endif

    </div>


  </div>

  <div class="bg-black rounded p-5 mb-3 mt-3">
    <div class="d-grid d-flex justify-content-center mt-3 mb-3">
      {!! QrCode::style('round')->size(300)->generate($checklists->code); !!}
      </div>
  </div>

  <button type="button" class="btn text-sm pt-3 pb-3 rounded ps-4 pe-4 mb-2" style="color: #28B463 !important; min-width: 140px">
    <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
    Please SCAN the QR code above...
  </button>

  
  @else
  
  
  <form action="{{ route('checklist.startCheckQR',  $checklists->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">

    @csrf

    @method('PUT')
    
    <div class="row mb-2">
      <div class="col-md text-start">
        <h6 class="text-color-gray"><span class="text-white">{{$checklists->grade}} - {{$checklists->strand}}: {{$checklists->subject}}</span></h6>
      </div>
      <div class="col-md text-end">
        <a href="{{route('checklist.showchecklist', $checklists->id)}}">
        <h6 class="text-xs text-white" style="text-decoration: underline">Return Subject</h6>
        </a>
      </div>
    </div>

  <div class="bg-black rounded pt-5 pb-5 p-3">

  <img class="d-block mx-auto img-fluid pt-4" src="/images/startChecking.svg" style="width: 300px">
      
  <h6 class="text-xs text-white fw-lighter mt-5 mb-5">
    <svg class="me-1" style="fill: #2a2a2a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm9 3a1 1 0 11-2 0 1 1 0 012 0zM6.92 6.085c.081-.16.19-.299.34-.398.145-.097.371-.187.74-.187.28 0 .553.087.738.225A.613.613 0 019 6.25c0 .177-.04.264-.077.318a.956.956 0 01-.277.245c-.076.051-.158.1-.258.161l-.007.004a7.728 7.728 0 00-.313.195 2.416 2.416 0 00-.692.661.75.75 0 001.248.832.956.956 0 01.276-.245 6.3 6.3 0 01.26-.16l.006-.004c.093-.057.204-.123.313-.195.222-.149.487-.355.692-.662.214-.32.329-.702.329-1.15 0-.76-.36-1.348-.863-1.725A2.76 2.76 0 008 4c-.631 0-1.155.16-1.572.438-.413.276-.68.638-.849.977a.75.75 0 101.342.67z"></path></svg>
    Click the <strong>Start Checking</strong> button below to generate subject QR code</h6>

  <button type="submit" class="btn btn-primary text-xs div-hover border-0 pt-3 pb-3 ps-4 pe-4" style="min-width: 180px !important">
    <svg style="fill: white; margin-bottom: 2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M2.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v7.736a.75.75 0 101.5 0V1.75A1.75 1.75 0 0011.25 0h-8.5A1.75 1.75 0 001 1.75v11.5c0 .966.784 1.75 1.75 1.75h3.17a.75.75 0 000-1.5H2.75a.25.25 0 01-.25-.25V1.75zM4.75 4a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM4 7.75A.75.75 0 014.75 7h2a.75.75 0 010 1.5h-2A.75.75 0 014 7.75zm11.774 3.537a.75.75 0 00-1.048-1.074L10.7 14.145 9.281 12.72a.75.75 0 00-1.062 1.058l1.943 1.95a.75.75 0 001.055.008l4.557-4.45z"></path></svg>
    Start Checking
  </button>

    </div>

</form>  

  @endif

</div>

<script type="text/javascript">
      
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var counter = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.val(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }

        else if (timer <= 0){
          
          document.getElementById('time').value = "Done";
          
          clearInterval(counter);
                    
        }
        
    }, 1000);

    
}


jQuery(function ($) {
    var fiveMinutes = 60 * 15,
        display = $('#time');

        
    startTimer(fiveMinutes, display);

    
});
</script>
  
      
@endsection