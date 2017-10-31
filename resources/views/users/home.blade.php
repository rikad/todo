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
<!--                       <img src="img/sun.png" width="50"><br>
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
                    -->
                    <div>
                      <img src="img/greenhouse.jpg" width="100%">                   
                    </div>
                  </div>


                </div>

                <div class="span2" style="text-align: center">

                  <div class="form-group">
                    <select class="form-control" onchange="changePlant(this.value)">
                      @foreach($data as $value)
                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <table class="table table-bordered">
                    <tr>
                      <td>Suhu</td>
                      <td id="temperature"></td>
                    </tr>
                    <tr>
                      <td>Kelembapan</td>
                      <td id="humidity"></td>
                    </tr>
                    <tr>
                      <td>Tekanan</td>
                      <td id="rssi"></td>
                    </tr>
                    <tr>
                      <td>pH</td>
                      <td id="ph"></td>
                    </tr>
                    <tr>
                      <td>Itensitas Cahaya</td>
                      <td id="itensity"></td>
                    </tr>
                    <tr>
                      <td>Electroconductivity</td>
                      <td id="ec"></td>
                    </tr>
                    <tr>
                      <td>Kecepatan Angin</td>
                      <td id="vwind"></td>
                    </tr>
                  </table>

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
<script src="js/chart.min.js" type="text/javascript"></script> 

<script>

  var currentPlantId = 1;

  function updateStatus(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);

        document.getElementById("temperature").innerHTML = data.temperature;
        document.getElementById("humidity").innerHTML = data.humidity;
        document.getElementById("itensity").innerHTML = data.itensity;
        document.getElementById("rssi").innerHTML = data.rssi;
        document.getElementById("ph").innerHTML = data.ph;
        document.getElementById("ec").innerHTML = data.ec;
        document.getElementById("vwind").innerHTML = data.vwind;

      }
    };
    xhttp.open("GET", "{{ route('logTanaman','') }}/"+id, true);
    xhttp.send();

  }

  function changePlant(id) {
    currentPlantId = id;
    updateStatus(currentPlantId);
  }

  updateStatus(currentPlantId);

  setInterval(function() {
    updateStatus(currentPlantId);
  }, 3000);
</script>
@endsection
