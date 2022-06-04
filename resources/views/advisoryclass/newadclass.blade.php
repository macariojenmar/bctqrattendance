@extends('layouts.app')

@section('content')

<form action="{{ route('advisoryclass.saveAdClass') }}" method="POST" autocomplete="off">
                    
  @csrf

  
      <div class="container animateFast">

        <h6 class="text-xs text-color-gray text-end">Create Advisory Class</h6>

       
      <h6 class="text-xs text-color-gray">Grade Level</h6>

      <select class="form-select text-xs bg-black p-3 mb-4 div-hover" name="grade" id="gradeLevel" required>
       
        <option value="Grade 11">Grade 11</option>
        <option value="Grade 12">Grade 12</option>

      </select>

      <h6 class="text-xs text-color-gray">Strand</h6>

      <div class="bg-black p-5 rounded text-xs text-white">
        
        <div class="row row-cols-1 row-cols-md-2">

      
        <div class="col form-check">
                                        
          <input class="form-check-input" type="radio" name="strand" id="stem" value="STEM" checked>
          <label class="form-check-label mb-3" for="stem">
            <span class="fw-bold">STEM</span>
            <br>
            <span class="text-color-gray">Science, Technology, Engineering and Mathematics</span>
          </label>
        </div>
      
        <div class="col form-check">
        
          <input class="form-check-input" type="radio" name="strand" id="humss" value="HUMSS">
          <label class="form-check-label mb-3" for="humss">
            <span class="fw-bold">HUMSS</span>
            <br>
            <span class="text-color-gray">Humanities & Social Sciences</span>
          </label>
        </div>

        <div class="col form-check">
        
          <input class="form-check-input" type="radio" name="strand" id="epas" value="IA EPAS">
          <label class="form-check-label mb-3" for="epas">
            <span class="fw-bold">IA EPAS</span>
            <br>
            <span class="text-color-gray">Industrial Arts: Electronics Product Assembly & Servicing</span>
          </label>
        </div>
        
        <div class="col form-check">
        
          <input class="form-check-input" type="radio" name="strand" id="eim" value="IA EIM">
          <label class="form-check-label mb-3" for="eim">
            <span class="fw-bold">IA EIM</span>
            <br>
            <span class="text-color-gray">Industrial Arts: Electrical Installation & Maintenance</span>
          </label>
        </div>

        <div class="col form-check">
                                        
          <input class="form-check-input" type="radio" name="strand" id="anim" value="ICT ANIMATION">
          <label class="form-check-label mb-3" for="anim">
            <span class="fw-bold">ICT ANIMATION</span>
            <br>
            <span class="text-color-gray">Information & Communication Technology: Animation</span>
          </label>
        </div>

        <div class="col form-check">
        
          <input class="form-check-input" type="radio" name="strand" id="cp" value="ICT CP">
          <label class="form-check-label mb-3" for="cp">
            <span class="fw-bold">ICT CP</span>
            <br>
            <span class="text-color-gray">Information & Communication Technology: Computer Programming</span>
          </label>
        </div>

        <div class="col form-check">
        
          <input class="form-check-input" type="radio" name="strand" id="css" value="ICT CSS">
          <label class="form-check-label mb-3" for="css">
            <span class="fw-bold">ICT CSS</span>
            <br>
            <span class="text-color-gray">Information & Communication Technology: Computer Systems Servicing</span>
          </label>
        </div>

      </div>

    </div>

    <div class="d-md-flex d-grid justify-content-md-end mt-4">

      <button type="submit" class="btn btn-primary text-xs pt-3 pb-3 ps-4 pe-4 div-hover" id="save" >
        <svg style="fill: white" class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
         Save
      </button>
      
      
      </div>

      </div>

</form>

@endsection