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

                  <a href="{{ route('home') }}" class="shortcut shortcut-active"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Greenhouse Status</span> </a>

                  <a href="{{ route('utilities.index') }}" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                  <a href="{{ route('schedule.index') }}" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Planting Schedule</span> </a>

                  <a href="{{ route('plant.index') }}" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Plant</span> </a>

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


                    <div style="text-align: right">
                      <img src="img/sun.png" width="50"><br>
                      Sun: ... lux
                      <br>
                      <table align="right" width="100px" style="text-align: center">
                        <tr>
                          <td style="border:1px solid">&nbsp</td>
                          <td style="border:1px solid">&nbsp</td>
                          <td style="border:1px solid; background:red">&nbsp</td>
                        </tr>
                        <tr>
                          <td>Low&nbsp</td>
                          <td>&nbspOk&nbsp</td>
                          <td>High</td>
                        </tr>
                      </table>

                      <div>
                        <img src="img/greenhouse.jpg" width="100%">                   
                      </div>
                    </div>


                  </div>

                  <div class="span2" style="text-align: center">
                    <h3 style="font-size: 30px">Status</h3><br>
                    <img src="img/smile.jpg" width="150">
                    <p style="font-size:20px">Tomatoes are in Good Condition</p>
                    <br>
                    <h3 style="font-size: 30px">Condition</h3><br>
                    <p style="font-size:20px">Sprinkle is not active</p>
                  </div>
                </div>

              </div>
              <!-- /widget-content --> 
            </div>
            <!-- /widget -->

          </div>
        </div>

        <div class="row">
          <div class="span12">

            <div class="widget">
              <div class="widget-header"> <i class="icon-signal"></i>
                <h3> Grafik Bacaan Sensor</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <canvas id="area-chart" class="chart-holder" height="250" width="1000"> </canvas>
                <!-- /area-chart --> 
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
  <script src="js/chart.min.js" type="text/javascript"></script> 

  <script>     

    var lineChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
      {
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        data: [28, 48, 40, 19, 96, 27, 100]
      }
      ]

    }

    var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


    var barChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
      {
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 96, 27, 100]
      }
      ]

    }
  </script>
  @endsection
