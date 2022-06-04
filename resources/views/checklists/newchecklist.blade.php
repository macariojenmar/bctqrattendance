@extends('layouts.app')

@section('content')

<div class="modal fade animateFast" id="timeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content border-0 p-3">
      <div class="modal-body">
          <div class="text-end">
          <button type="button" class="btn bnt-link" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
          </div>
      
          </div>
          

          <div class="container p-4 pb-5 text-center">

              <h6 class="text-sm fw-bold">Select Time</h6>
              <h6 class="text-xs text-color-gray mb-3">Set start & end of class below</h6>
              
              <div class="container p-4 rounded border border-2 mb-3 shadow-sm">
                <h6 class="text-xs mb-3">Start of class</h6>

                <div class="row">
                  <div class="col-md mb-3">
                    <h6 class="text-xs text-color-gray">Hour</h6>

                    <select class="form-select text-xs" id="hour1" aria-label="Default select example">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8" selected>8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="col-md mb-3">
                    <h6 class="text-xs text-color-gray">Minute</h6>

                    <select class="form-select text-xs" id="minute1" aria-label="Default select example">
                      <option value="00">00</option>
                      <option value="15">15</option>
                      <option value="30">30</option>
                      <option value="45">45</option>
                    </select>
                  </div>

                  <div class="col-md mb-3">
                    <h6 class="text-xs text-color-gray">Am/Pm</h6>

                    <select class="form-select text-xs" id="ampm1" aria-label="Default select example">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>


                </div>

            </div>

            <div class="container p-4 rounded border border-2 shadow-sm">
              <h6 class="text-xs mb-3">End of class</h6>

              <div class="row">
                <div class="col-md mb-3">
                  <h6 class="text-xs text-color-gray">Hour</h6>

                  <select class="form-select text-xs" id="hour2" aria-label="Default select example">
                    <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9" selected>9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                  </select>
                </div>
                <div class="col-md mb-3">
                  <h6 class="text-xs text-color-gray">Minute</h6>

                  <select class="form-select text-xs" id="minute2" aria-label="Default select example">
                    <option value="00">00</option>
                      <option value="15">15</option>
                      <option value="30">30</option>
                      <option value="45">45</option>
                  </select>
                </div>

                <div class="col-md mb-3">
                  <h6 class="text-xs text-color-gray">Am/Pm</h6>

                  <select class="form-select text-xs" id="ampm2" aria-label="Default select example">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                  </select>
                </div>


              </div>

          </div>
           

 

              <div class="d-grid d-flex justify-content-center mt-5 gap-3">

                
                
                <button type="button" onclick="setTime()" class="btn btn-primary text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4" data-bs-dismiss="modal">
                 Ok
                </button>
               

                  <button type="button" class="btn btn-link text-xs div-hover" data-bs-dismiss="modal">Close</button>
             
              </div>

          </div>

         
      </div>
     
    </div>
  </div>


  <div class="modal fade animateFast" id="schedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
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
                <h6 class="text-sm fw-bold">Select Schedule</h6>
                <h6 class="text-xs text-color-gray mb-3">Set schedule of class below</h6>
              </div>

                <div class="container p-4 rounded border border-2 mb-3 text-xs shadow-sm">
                  
                  <div class="row">
                    <div class="col-md">
                      <div class="form-check">
                        <input class="form-check-input" id="monday" type="checkbox" value="Mon" checked>
                        <label class="form-check-label" for="monday">
                          Monday
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" id="tuesday" type="checkbox" value="Tues">
                        <label class="form-check-label" for="tuesday">
                          Tuesday
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" id="wednesday"  type="checkbox" value="Wed">
                        <label class="form-check-label" for="wednesday">
                          Wednesday
                        </label>
                      </div>
                    </div>

                    <div class="col-md">
                      <div class="form-check">
                        <input class="form-check-input" id="thursday"  type="checkbox" value="Thurs">
                        <label class="form-check-label" for="thursday">
                          Thursday
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" id="friday"  type="checkbox" value="Fri">
                        <label class="form-check-label" for="friday">
                          Friday
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" id="saturday"  type="checkbox" value="Sat">
                        <label class="form-check-label" for="saturday">
                          Saturday
                        </label>
                      </div>
                    </div>
                  </div>
  
              </div>

                <div class="d-grid d-flex justify-content-center mt-5 gap-3">
  
                  
                  
                  <button type="button" onclick="setSched()" class="btn btn-primary text-xs div-hover border-0 pt-2 pb-2 ps-4 pe-4" data-bs-dismiss="modal">
                   Ok
                  </button>
                 
  
                    <button type="button" class="btn btn-link text-xs div-hover" data-bs-dismiss="modal">Close</button>
               
                </div>
  
            </div>
  
           
        </div>
       
      </div>
    </div>

        <div class="animateFast">

          <h6 class="text-sm text-color-gray mb-2 ">Create Subject Checklist</h6>
           
                  <form action="{{ route('checklist.savechecklist') }}" method="POST" autocomplete="off">
                    
                    @csrf

               

                    <div class="input-group">
                        
                        <div class="container-fluid">
                           
                          <div class="row">
                           
                            <div class="col-md mb-3">
  
                              <h6 class="text-xs text-color-gray">Strand</h6>

                              <select class="form-select text-xs bg-black p-3 mb-4 div-hover" name="strand">
                                <option selected value="STEM">STEM</option>
                                <option value="HUMSS">HUMSS</option>
                                <option value="IA EPAS">IA EPAS</option>
                                <option value="IA EIM">IA EIM</option>
                                <option value="ICT Animation">ICT Animation</option>
                                <option value="ICT CP">ICT CP</option>
                                <option value="ICT CSS">ICT CSS</option>
                              </select>

                        
                            
                              <h6 class="text-xs text-color-gray">Grade Level</h6>

                              <select class="form-select text-xs bg-black p-3 mb-4 div-hover" name="grade" id="gradeLevel" required>
                               
                                <option value="Grade 11">Grade 11</option>
                                <option value="Grade 12">Grade 12</option>
                      
                              </select>
                            

                             

                              <h6 class="text-xs text-color-gray">Schedule</h6>

                                <div class="input-group mb-4 div-hover" data-bs-toggle="modal" data-bs-target="#schedModal">
                                  
                                  <span class="input-group-text bg-black p-3">
                                  <svg style="fill: #4f4f4f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 0a.75.75 0 01.75.75V2h5V.75a.75.75 0 011.5 0V2h1.25c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V3.75C1 2.784 1.784 2 2.75 2H4V.75A.75.75 0 014.75 0zm0 3.5h8.5a.25.25 0 01.25.25V6h-11V3.75a.25.25 0 01.25-.25h2zm-2.25 4v6.75c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V7.5h-11z"></path></svg>
                                  </span>
                                  <input class="form-control text-xs bg-black " id="schedule" name="schedule" type="text" placeholder="Set schedule" style="background-color: white" required readonly  >
                                </div>
                      



                            <h6 class="text-xs text-color-gray">Time</h6>
                              
                              <div class="input-group mb-3 div-hover" data-bs-toggle="modal" data-bs-target="#timeModal">
                                
                                <span class="input-group-text bg-black p-3">
                                  <svg style="fill: #4f4f4f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.5 4.75a.75.75 0 00-1.5 0v3.5a.75.75 0 00.471.696l2.5 1a.75.75 0 00.557-1.392L8.5 7.742V4.75z"></path></svg>
                                </span>
                              
                                <input class="form-control text-xs bg-black" id="start" name="start" type="text" placeholder="Set start of class" style="background-color: white" readonly required>
                              </div>
                              
                              
                              <div class="input-group mb-4 div-hover" data-bs-toggle="modal" data-bs-target="#timeModal">
                                <span class="input-group-text bg-black p-3">
                                  <svg style="fill: #4f4f4f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.5 4.75a.75.75 0 00-1.5 0v3.5a.75.75 0 00.471.696l2.5 1a.75.75 0 00.557-1.392L8.5 7.742V4.75z"></path></svg>
                                </span>
                              
                                <input class="form-control text-xs bg-black" id="end" name="end" type="text" placeholder="Set end of class here" style="background-color: white" readonly required>
                              </div>
                            

                            <h6 class="text-xs text-color-gray">Late Timer</h6>

                                    <select class="form-select text-xs bg-black div-hover p-3" name="late">
                                      <option selected value="15">15 minutes</option>
                                      <option value="None">None</option>
                            
                                    </select>
                              
                            
                            </div>
                            
                            <div class="col-md mb-3">
                              
                           
                              <h6 class="text-xs text-color-gray">Subject</h6>


                              <div class="input-group mb-3 div-hover">
                                
                                <span class="input-group-text bg-black p-3">
                                <svg style="fill: rgb(159, 159, 159);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                                </span>

                                <input class="form-control text-xs input-focus bg-black text-white remove-blue" onkeyup="searchSubject()" id="subjectInput" type="text" placeholder="Search subject here" aria-label="default input example">
                              </div>

                              <div class="bg-black p-4 pb-1 ps-4 gap-2 rounded" style="min-height: 460px !important">

                              <section>
                                  
                                <table class="table-subject text-white" id="subjectTable" style="width: 100%">

                                  <tbody class="tbody-subject">

                                  @foreach($subjects as $subject)
                                  <tr>
                                    <td>
                                    <div class="form-check text-xs">
                                      <input class="form-check-input" type="radio" name="subject" id="subject{{$subject->id}}" value="{{$subject->title}} ({{$subject->subjectCode}})" required>
                                      <label class="form-check-label mb-2" for="subject{{$subject->id}}">
                                        {{$subject->title}} ({{$subject->subjectCode}})
                                      </label>
                                    </div>
                                    </td>
                                  </tr>

                                  @endforeach
                                  </tbody>

                                </table>
                              </section>

                              </div>


                         
                            </div>

                          </div> 
                          
                          <div class="d-md-flex d-grid justify-content-md-end mt-1">

                            <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 ps-4 pe-4 div-hover" id="save" >
                              <svg style="fill: white" class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                               Save
                            </button>
                            
                            
                            </div>

                        </div>
                    </div>
              </form>
                 
        </div>      
    <script>

    function searchSubject() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("subjectInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("subjectTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }

      function setTime(){

        let start = document.querySelector('#start');
        let end = document.querySelector('#end');

        let txtHour = document.querySelector('#hour1').value;
        let txtMinute = document.querySelector('#minute1').value;
        let txtAmPm = document.querySelector('#ampm1').value;

        let txtHour2 = document.querySelector('#hour2').value;
        let txtMinute2 = document.querySelector('#minute2').value;
        let txtAmPm2 = document.querySelector('#ampm2').value;

        const timeArray1 = [txtHour, txtMinute, txtAmPm];
        const timeArray2 = [txtHour2, txtMinute2, txtAmPm2];

        let time1 = timeArray1[0] + ":" + timeArray1[1] + " " + timeArray1[2]
        let time2 = timeArray2[0] + ":" + timeArray2[1] + " " + timeArray2[2]

        start.setAttribute('value', time1);
        end.setAttribute('value', time2);


      }

      function setSched(){ 

        let schedule = document.querySelector('#schedule');

        var schedArray = new Array();


        if(document.querySelector('#monday').checked){

          let mondayRes = document.querySelector('#monday').value;
          schedArray.push(mondayRes);

        }

        if(document.querySelector('#tuesday').checked){

        let tuesdayRes = document.querySelector('#tuesday').value;
        schedArray.push(tuesdayRes);

        }

        if(document.querySelector('#wednesday').checked){

        let wednesdayRes = document.querySelector('#wednesday').value;
        schedArray.push(wednesdayRes);

        }

        if(document.querySelector('#thursday').checked){

        let thursdayRes = document.querySelector('#thursday').value;
        schedArray.push(thursdayRes);

        }

        if(document.querySelector('#friday').checked){

        let fridayRes = document.querySelector('#friday').value;
        schedArray.push(fridayRes);

        }

        if(document.querySelector('#saturday').checked){

        let saturdayRes = document.querySelector('#saturday').value;
        schedArray.push(saturdayRes);

        }

        schedule.setAttribute('value', schedArray.join(", "));

      } 

      </script>

@endsection