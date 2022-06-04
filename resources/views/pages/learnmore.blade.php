@extends('layouts.homepage')

@section('content')
<div>
    <div class="row flex-lg-row-reverse align-items-center mt-5">
        <div class="col-md-5 mb-4">
            
            <div class="container-fluid bg-black rounded shadow p-4 pb-5 pt-5">
                <img src="/images/startChecking.svg" style="width: 200px" class="d-block mx-auto img-fluid">
            </div>
            
        </div>
       
        <div class="col-md mb-3 ">

            
            <h2 class="text-white">
               Generate Subject QR Code
            </h2>
            <h6 class="text-sm text-color-gray lh-lg">
                Teachers can generate subject QR code that the students can scan to be present in their class. In this way, the attendance checking would be faster and efficient for the teachers.
            </h6>

            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M4.927 5.427l2.896 2.896a.25.25 0 00.354 0l2.896-2.896A.25.25 0 0010.896 5H8.75V.75a.75.75 0 10-1.5 0V5H5.104a.25.25 0 00-.177.427z"></path><path d="M1.573 2.573a.25.25 0 00-.073.177v7.5a.25.25 0 00.25.25h12.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-3a.75.75 0 110-1.5h3A1.75 1.75 0 0116 2.75v7.5A1.75 1.75 0 0114.25 12h-3.727c.099 1.041.52 1.872 1.292 2.757A.75.75 0 0111.25 16h-6.5a.75.75 0 01-.565-1.243c.772-.885 1.192-1.716 1.292-2.757H1.75A1.75 1.75 0 010 10.25v-7.5A1.75 1.75 0 011.75 1h3a.75.75 0 010 1.5h-3a.25.25 0 00-.177.073zM6.982 12a5.72 5.72 0 01-.765 2.5h3.566a5.72 5.72 0 01-.765-2.5H6.982z"></path></svg>
            <span>
                <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path></svg>
            </span>
          
            
        
        </div>
    </div>

    <div class="row align-items-center mt-5 gap-5">
        <div class="col-md-5">
            <div class="container-fluid bg-black rounded shadow p-4">
                <img src="/images/Upload.svg" style="width: 320px" class="d-block mx-auto img-fluid">
            </div>
        </div>
        <div class="col-md">

            <h2 class="text-white">
                Scan Student QR Code
             </h2>
             <h6 class="text-sm text-color-gray lh-lg">
                Teachers can check student attendance by scanning the QR codes of their students. In this way, the attendance checking would be faster and efficient for the teachers.
             </h6>

             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.75 0A1.75 1.75 0 002 1.75v12.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 14.25V1.75A1.75 1.75 0 0012.25 0h-8.5zM3.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25V1.75zM8 13a1 1 0 100-2 1 1 0 000 2z"></path></svg>
 
             <span>
                <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>
             </span>
            
        </div>
    </div>

    <div class="row flex-lg-row-reverse align-items-center mt-5 mb-5">
        <div class="col-md-5 mb-3">
            <div class="container-fluid bg-black rounded shadow">
                <img src="/images/Dashboard.svg" style="width: 320px" class="d-block mx-auto img-fluid">
            </div>
        </div>
        <div class="col-md mb-3">

            <h2 class="text-white">
                Attendance Reports
             </h2>
             <h6 class="text-sm text-color-gray lh-lg">
                Teachers can easily print or download in PDF the monthly attendance reports. In this way, the attendance checking would be faster and efficient for the teachers.
             </h6>

             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
             <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>
             </span>
        </div>
    </div>

</div>
@endsection