@extends('layouts.nonav')

@section('content')
  

  <div class="animateFast">
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

 <script crossorigin="anonymous" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<div class="modal fade animateFast" id="doneModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable  ">
    <div class="modal-content border-0 bg-black">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
          </div>
          

          <div class="container p-4 pb-5 text-center">

            <h6 class="mb-3 fw-lighter">Are you sure you want to <strong>STOP</strong> attendance checking?</h2>
              <h6 class="text-xs text-color-gray">You can still edit the summary of this attendance</h6>

              <div class="d-grid d-flex justify-content-center mt-5 gap-3">

                
                <a href="{{route('checklist.summary', $checklists->id)}}">
                <button type="button" class="btn btn-success text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4" >
                  Yes, I'm done checking
                </button>
                </a>
               

                  <button type="button" class="btn btn-link text-xs div-hover text-white" data-bs-dismiss="modal">Close</button>
             
              </div>

          </div>

         
      </div>
     
    </div>
  </div>


<div class="row mb-2 mt-4 align-items-center">
  <div class="col-md text-start">
    <h6 class="text-color-gray"><span class="text-white">{{$checklists->grade}} - {{$checklists->strand}}: {{$checklists->subject}}</span></h6>
  </div>
  <div class="col-md text-end">
   
    <h6 class="text-xs" >


      <a href="" data-bs-toggle="modal" data-bs-target="#doneModal">
      <span style="text-decoration: underline;" class="text-white" >
      Done Checking
      </span>
    </a>

    

  </h6>
  </div>
</div>



<div class="row gap-3">
  <div class="col-md">

   
    <video id="preview" class="shadow" style="width: 100%; border-radius: 5px !important"></video>
    <div class="text-center">
      <button type="button" class="btn text-sm pt-3 pb-3 rounded ps-4 pe-4 mb-2 mt-3" style="color: #28B463 !important; min-width: 140px">
        <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
        Please SCAN your QR codes...
      </button>
      <br>
      <button type="button" class="btn btn-link text-xs text-white" data-bs-toggle="collapse" data-bs-target="#typeID" data-toggle="popover" data-bs-placement="bottom" title="Can't scan?" data-bs-content="Type student ID number above and press SAVE STUDENT">
      Do you have problem scanning?
      </button>

      </div>
   
  </div>
  <div class="col-md-4 ">
    
    @if($checklists->late != 'None')
    <div class="bg-black p-3 pb-2 shadow-sm rounded mb-3">
      <h6 class="text-color-gray text-xs text-center ">Late Countdown</h6>
      <input type="text" id="time" name="time" class="form-control border-0 text-center" placeholder="00:00" readonly style="background-color: white; font-size: 30px !important">
      <h6 class="text-color-gray text-xs text-center">minutes</h6>
      </div>

    @endif

    <input class="form-control text-sm bg-black p-4 text-center mb-3 fw-bold" type="text" name="idNumber" id="idNumber" placeholder="Your ID number will appear here">
    <input type="text" value="{{$checklists->id}}" id="checklistID" name="checklistID" hidden>
   
    <div class="collapse animateFast mb-3" id="typeID">
      <button type="button" class="btn btn-primary p-3 text-xs" onclick="ajax()" style="width: 100%">Save student</button>
    </div>

    <div class="bg-black p-3 pb-2 shadow-sm rounded">
      <button class="btn btn-link text-xs fw-lighter mb-3" style="width: 100%; color:#2a2a2a" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <svg style="fill: #2a2a2a" class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M16 3.75a.75.75 0 00-1.136-.643L11 5.425V4.75A1.75 1.75 0 009.25 3h-7.5A1.75 1.75 0 000 4.75v6.5C0 12.216.784 13 1.75 13h7.5A1.75 1.75 0 0011 11.25v-.675l3.864 2.318A.75.75 0 0016 12.25v-8.5zm-5 5.075l3.5 2.1v-5.85l-3.5 2.1v1.65zM9.5 6.75v-2a.25.25 0 00-.25-.25h-7.5a.25.25 0 00-.25.25v6.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-4.5z"></path></svg>
        Select Camera
        <svg style="fill: #2a2a2a" class="ms-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>
      </button>

      <div class="collapse animateFast" id="collapseExample">
        
        <label class="btn active text-white text-xs mb-3" style="width: 100%">
      
          <input autocomplete="off" checked="" name="options" type="radio" value="1" /> Front Camera
     
        </label>
        
        
      <label class="btn text-xs mb-3 text-white"  style="width: 100%">
      
        <input autocomplete="off" name="options" type="radio" value="2" /> Back Camera
   
         </label>

      </div>

    </div>
   
    

    <div id="response3" class="mt-4 animateFast"></div>
    <div id="response" class="animateFast"></div>
    <div id="response2" class="animateFast"></div>
    
    <div id="response4" class="animateFast mt-4"></div>
    <div id="response5" class="animateFast mt-3"></div>

    
  </div>



</div>



<script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

function ajax(){

var data = {
     'idNumber':$('#idNumber').val(),
     'checklistID':$('#checklistID').val(),
     'time':$('#time').val(),
   }
   //console.log(data);

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
     type: "POST",
     url: "/saveAttendance",
     data: data,
     dataType: "json",
     success: function(response){
       //console.log(response)

       if(response.status == 200){

         present();

         $('#response3').html('<h6 class="text-xs text-color-gray">Good Day!</h6>');
         $('#response').html('<h2 class="text-white fw-bold text-capitalize">'+response.name+'</h2>');
         $('#response2').html(' <h6 class="text-sm fw-bold" style="color: #82E0AA">Your attendance has been recorded</h6>');

         $('#response4').html(
           '<h6 class="text-xs text-color-gray">Date</h6><h6 class="text-xs text-white">'+response.date+'</h6>'
         
         
         );

         $('#response5').html(
           '<h6 class="text-xs text-color-gray">Time</h6><h6 class="text-xs text-white">'+response.time+'</h6>'
         
         
         );

         

       }

       if(response.status == 400){
         
       
         
         unres();

         $('#response3').html('<h6 class="text-xs text-color-gray">Whoops!</h6>');
         $('#response').html('<h3 class="text-white text-uppercase fw-bold" style="color: #EC7063 !important">Unregistered!</h3>');
         $('#response2').html('<h2 class="text-white" >Unfortunately, you are not registered to this subject</h2>');
         
        
       }

       if(response.status == 500){
         
       
         
         saved();

         $('#response3').html('<h6 class="text-xs text-color-gray">Whoops!</h6>');
         $('#response').html('<h3 class="text-white text-uppercase fw-bold" style="color: #F8C471 !important">Already Saved!</h3>');
         $('#response2').html('<h2 class="text-white" >Your attendance has been recorded earlier</h2>');
         
        
       }
         
     }
   });
}


var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 100, mirror: true });


$(document).ready(function() {

    scanner.addListener('scan',function(content){

    document.getElementById("idNumber").value = content;

    ajax();


    });

  });

  
    function present()
    {
      var audio = new Audio('/audio/sound_present.mp3');
      audio.play();
    }

    function unres()
    {
      var audio = new Audio('/audio/sound_unres.mp3');
      audio.play();
    }

    function saved()
    {
      var audio = new Audio('/audio/sound_saved.mp3');
      audio.play();
    }

    Instascan.Camera.getCameras().then(function (cameras){

     if(cameras.length>0){

      scanner.start(cameras[0]);

      $('[name="options"]').on('change',function(){

       if($(this).val()==1){

        if(cameras[0]!=""){

         scanner.start(cameras[0]);

        }else{

         alert('No Front camera found!');

        }

       }else if($(this).val()==2){

        if(cameras[1]!=""){

         scanner.start(cameras[1]);

        }else{

         alert('No Back camera found!');

        }

       }

      });

     }else{

      console.error('No cameras found.');

      alert('No cameras found.');

     }

    }).catch(function(e){

     console.error(e);

     alert(e);

    });

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