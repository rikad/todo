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
            <hr>
                          <div class="col-md-12">
                {!! Form::select('plants',App\ActivePlant::where('user_id',Auth::id())->pluck('name','id')->all(), null, ['onchange'=>'changePlant(this.value)','id'=>'selectPlants','class' => 'js-selectize'] ) !!}


              <div class="row">
                <div class="span9">
                <hr>

                  <canvas id="area-chart"></canvas>

                </div>

                <div class="span2" style="text-align: center; padding-top: 1em">
                  <div style="font-size: 25px; padding: 25px; font-family: Comic Sans MS;">
                    <h3 style="font-size: 25px">Total Water Consumption</h3><br>
                    <span id="hariIni"></span><br><br>
                    <i style="text-decoration: underline;">@if($water) {{ $water->average }} @else Belum ada Data @endif</i>
                  </div>
                  <hr>
                  <button class="btn btn-info" onclick="changeChart('week')">Week</button>
                  <button class="btn btn-info" onclick="changeChart('month')">Month</button><hr>
                  <button class="btn btn-info" onclick="changeChart('year')">Year</button>
                  <br>
                </div>
              </div>
            <hr>

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

@section('css')
<link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
<link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/selectize.min.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>


<script>
  $(document).ready(function () {
    // add selectize to select element
    $('.js-selectize').selectize({
      sortField: 'text'
    });
  });


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

  var dateku = new Date();
  dateku = dateku.getFullYear().toString()+'/'+dateku.getMonth().toString()+'/'+dateku.getDate().toString();
  document.getElementById("hariIni").innerHTML = dateku;

  var canvasku = document.getElementById("area-chart");
  var myLine = new Chart(canvasku.getContext("2d")).Line(lineChartData,{
    responsive: true
  });

  var currentPlantId = document.getElementById("selectPlants").value;
  function changePlant(id) {
    currentPlantId = id;
    changeChart('week');
  }

  function changeChart(mode) {
    date = new Date();
    date = date.getFullYear().toString()+date.getMonth().toString()+date.getDate().toString();
    
    $.ajax({
      url: "{{ route('utilities.index') }}",
      data: { 'mode': mode, 'date' : date, 'activeplant': currentPlantId},
      type: 'GET',
      error: function() {
        alert('Gagal ambil data, silahkan coba lagi');
      },
      success: function(res) {
        var data = res;
        lineChartData.labels = data.date;
        lineChartData.data = data.water;

        myLine.destroy();
        myLine = new Chart(canvasku.getContext("2d")).Line(lineChartData,{
          responsive: true
        });

      }
    }); 
  }

  changeChart('week');
</script>
@endsection

