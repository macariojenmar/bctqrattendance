
        <div class="bg-black shadow-sm p-4 mb-3 rounded">
            <div class="row">
                <div class="col-md">
                    <h6 class="text-xs fw-lighter text-color-gray">Graph</h6>
                </div>
                <div class="col-md d-grid d-flex justify-content-md-end">
                    <h6 class="text-xs fw-bold text-primary">200 days</h6>
                </div>
            </div>
           
            <!--ETO YUNG MISMONG GRAPH -->

            <canvas class="mt-3" id="subjectStat" style="max-height: 160px"></canvas>
        
              <div class="row mt-4">

                <div class="col-md" >
                  <h6 class="text-xs" style="color: #45ad71">
                    <svg style="fill: #45ad71" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                    Present
                    </h6>

                    <h6 class="text-xs" style="color: #dbbb39">
                      <svg style="fill: #F4D03F" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                      Late
                      </h6>
                </div>

                <div class="col-md">
                  <h6 class="text-xs" style="color: #EC7063">
                    <svg style="fill: #EC7063" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                    Absent
                    </h6>

                    <h6 class="text-xs" style="color: #566573">
                      <svg style="fill: #566573" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                      Dropped
                      </h6>
                </div>
                
              </div>

         </div>

    @section('scripts')

    <!--ETO YUNG SCRIPT -->
<script>
 const ctx = document.getElementById("subjectStat").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [80, 40, 30, 10],
            backgroundColor: ["#58D68D", "#F4D03F", "#EC7063","#566573"]
          }]
        },
      });
</script>

@endsection