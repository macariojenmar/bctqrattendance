@extends('layouts.nonav')

@section('content')

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

 <script crossorigin="anonymous" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<div class="animateFast">
    <div class="row mb-2 mt-4 align-items-center">
        <div class="col-md text-start">
          <h6 class="text-color-gray text-xs">Scan the QR code</h6>
        </div>
        <div class="col-md text-end">
         
          <h6 class="text-xs" >
      
      
            <a href="/">
            <span style="text-decoration: underline;" class="text-white" >
            Go back
            </span>
          </a>
      
          
      
        </h6>
        </div>
      </div>

      <div class="row">

        <div class="col-md">
            <video id="preview" class="shadow" style="width: 100%; border-radius: 5px !important"></video>

            <div class="text-center">

            <button type="button" class="btn text-sm pt-3 pb-3 rounded ps-4 pe-4 mb-2 mt-4" style="color: #28B463 !important; min-width: 140px">
                <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
                Please SCAN the QR code or enter the subject code...
              </button>

            </div>

        </div>

        <div class="col-md-4">
            
          <div class="bg-black p-3 pb-2 shadow-sm rounded mb-3 ">
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

            <input class="form-control text-sm p-4 text-center mb-3 fw-bold bg-black" type="text" name="idNumber" id="idNumber" placeholder="Enter your ID number here" required>

            <input class="form-control text-sm p-4 text-center mb-3 bg-black" type="text" name="code" id="code" placeholder="Subject code will appear here" required>

            
            <button type="button" class="btn btn-primary p-3 text-xs" onclick="ajax()" style="width: 100%">Enter</button>
                
             
                
                
                <div id="response3" class="mt-3 animateFast"></div>
                <div id="response" class="animateFast"></div>
                <div id="response2" class="animateFast"></div>
                
                <div id="response4" class="animateFast mt-4"></div>
                <div id="response5" class="animateFast mt-3"></div>
                
        </div>

      </div>

</div>

<script type="text/javascript">

function ajax(){

var data = {
    'code':$('#code').val(),
    'idNumber':$('#idNumber').val(),
     
   }
   //console.log(data);

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
     type: "POST",
     url: "/saveAttendanceScanner",
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
       if(response.status == 600){
         
         
         unres();

         $('#response3').html('<h6 class="text-xs text-color-gray">Whoops!</h6>');
         $('#response').html('<h3 class="text-white text-uppercase fw-bold" style="color: #EC7063 !important">Invalid Code!</h3>');
         $('#response2').html('<h2 class="text-white" >This code might be invalid or expired</h2>');
         
        
       }
       
      
     }
   });
}

    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 100, mirror: true });

    $(document).ready(function() {

    scanner.addListener('scan',function(content){

    document.getElementById("code").value = content;

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

</script>

@endsection