@extends('layouts.homepage')

@section('content')
<div>
    <div class="row flex-lg-row-reverse align-items-center mt-5">
        <div class="col-md-5 mb-4">
            <div class="container-fluid bg-black rounded shadow">
                <img src="/images/Dashboard.svg" style="width: 320px" class="d-block mx-auto img-fluid">
            </div>
        </div>
        <div class="col-md mb-3">

            <h2 class="text-white">
               Attendance Checking Using <span class="fw-bold" style="color: #3498DB">QR CODES</span>
            </h2>
            <h6 class="text-sm text-color-gray lh-lg mt-3 mb-4">Achieve faster way of checking and monitoring students' attendance by using QR Codes.
                This web app is mainly for the SHS students of Baguio College of Technology.
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">

                <a href="/scanner">
                <button type="button" class="btn text-xs bg-black pt-3 pb-3 pe-4 ps-4 div-hover text-white fw-lighter" style="min-width: 200px !important">
                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 0A1.75 1.75 0 002 1.75v12.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 14.25V1.75A1.75 1.75 0 0012.25 0h-8.5zM3.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25V1.75zM8 13a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                    QR Code Scanner
                </button>
                </a>
                
                <a href="/learnmore">
                <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover" style="color: #3498DB; border: 2px solid #3498DB; min-width: 200px !important">
                    Learn More
                    <svg  style="fill: #3498DB" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                </button>
                </a>
        

            </div>

            
        </div>
    </div>

    <div class="row align-items-center mt-5 gap-5">
        <div class="col-md-5">
            <div class="container-fluid bg-black rounded shadow">
                <img src="/images/Integrated.svg" style="width: 320px" class="d-block mx-auto img-fluid">
            </div>
        </div>
        <div class="col-md">
            <h3 class="text-white">
                Get to know the developers!
            </h3>
            <h6 class="text-sm text-color-gray lh-lg mb-4">
               A team composed with bright minds that is currently studying at Baguio College of Technology for the school year 2021-2022.
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">
                <a href="/about">
                <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover" style="color: #3498DB; border: 2px solid #3498DB; min-width: 200px !important">
                   More About Us
                    <svg class="ms-1" style="fill: #3498DB" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                </button>
                </a>

            </div>
    
            
        </div>
    </div>

    <div class="row flex-lg-row-reverse align-items-center mt-5 mb-5">
        <div class="col-md-5 mb-3">
            <div class="container-fluid bg-black rounded shadow">
                <img src="/images/Support.svg" style="width: 320px" class="d-block mx-auto img-fluid">
            </div>
        </div>
        <div class="col-md mb-3">

            <h3 class="text-white">
                Let's start a conversation
            </h3>
            <h6 class="text-sm text-color-gray lh-lg mt-3 mb-4">
               We'd love to hear from you. We're here to help and answer any questions you might have. Feel free to visit us or send us a message. 
            </h6>
            <div class="d-grid d-md-flex justify-content-md-start gap-2">
                <a href="/contactUs">
                <button type="button" class="btn text-xs pt-3 pb-3 pe-4 ps-4 div-hover" style="color: #3498DB; border: 2px solid #3498DB; min-width: 200px !important">
                   Contact Us
                     <svg class="ms-1" style="fill: #3498DB" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>
                 </button>
                </a>
            </div>

            
        </div>
    </div>

</div>
@endsection