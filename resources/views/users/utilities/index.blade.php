@extends('layouts.app')

@section('content')
<div class="main" style="margin-top: 1em">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">

          <div class="widget">

            <div class="widget-content">


              <div class="shortcuts">

                <a href="{{ route('home') }}" class="shortcut"><i class="shortcut-icon icon-globe"></i><span class="shortcut-label">Planting Guides</span> </a>
                <a href="{{ route('plant.index') }}" class="shortcut"> <i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Field Status</span> </a>

                <a href="{{ route('utilities.index') }}" class="shortcut shortcut-active"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                <a href="{{ route('schedule.index') }}" class="shortcut"><i class="shortcut-icon icon-calendar"></i> <span class="shortcut-label">Planting Schedule</span> </a>

              </div>
              <!-- /shortcuts --> 


            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

        </div>
      </div>

      <div class="row">
        <div class="span12">

          <div class="widget">
            <!-- /widget-header -->
            <div class="widget-content">

              <div class="row">
                <div class="span9">

                  <canvas id="area-chart"></canvas>

                </div>

                <div class="span2" style="text-align: center; padding-top: 5em">
                  <h3 style="font-size: 25px">Total Water Consumption</h3><br>
                  <div style="border-radius: 20px; border: 4px solid black; font-size: 25px; padding: 25px">10 L</div>
                  <br>
                </div>
              </div>

            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

        </div>
      </div>


    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/Chart.min.js') }}"></script>


<script>
  var lineChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

  }

  var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData,{
    responsive: true
  });

</script>
@endsection

