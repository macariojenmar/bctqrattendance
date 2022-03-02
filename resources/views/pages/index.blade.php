@extends('layouts.homepage')

@section('content')
<div>
    <div class="row flex-lg-row-reverse align-items-center">
        <div class="col-md">
            <img src="images/1.svg" style="width: 450px" class="d-block mx-auto mb-3 pt-5 pb-5 img-fluid">
        </div>
        <div class="col-md">

            <h1>
                Check Student's Attendance Using <span class="fw-bold text-primary">QR Codes</span>
            </h1>
            <h6 class="text-sm text-color-gray lh-lg mt-4">Achieve faster way of checking and monitoring students' attendance by using QR Codes.
                This web app is mainly for the SHS students of Baguio College of Technology.
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">

            <button type="submit" class="btn btn-primary text-xs mt-4 pt-2 pb-2 ps-4 pe-4" id="save">
                Learn More
                <svg style="fill: white; margin-left: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
            </button>

            </div>

            
        </div>
    </div>

    <div class="row align-items-center mt-5">
        <div class="col-md">

            <img src="images/2.svg" style="width: 450px" class="d-block mx-auto mb-3 pt-5 pb-5 img-fluid">

         
        </div>
        <div class="col-md">

           
            <h1>
                Get to know the developers!
            </h1>
            <h6 class="text-sm text-color-gray lh-lg mt-4">
               A team composed with bright minds that is currently studying at Baguio College of Technology for the school year 2021-2022.
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">

            <button type="submit" class="btn btn-primary text-xs mt-4 pt-2 pb-2 ps-4 pe-4" id="save">
                More About Us
            </button>

            </div>
    
            
        </div>
    </div>

    <div class="row flex-lg-row-reverse align-items-center mt-5 mb-5">
        <div class="col-md">
            <img src="images/3.svg" style="width: 450px" class="d-block mx-auto mb-3 pt-5 pb-5 img-fluid">
        </div>
        <div class="col-md">

            <h1>
                Let's start a conversation
            </h1>
            <h6 class="text-sm text-color-gray lh-lg mt-4">
               We'd love to hear from you. We're here to help and answer any questions you might have. Feel free to visit us or send us a message. 
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">

            <button type="submit" class="btn btn-primary text-xs mt-4 pt-2 pb-2 ps-4 pe-4" id="save">
                Contact us
            </button>

            </div>

            
        </div>
    </div>

</div>
@endsection