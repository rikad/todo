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
                <a href="{{ route('plant.index') }}" class="shortcut shortcut-active"> <i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Field Status</span> </a>

                <a href="{{ route('utilities.index') }}" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

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

                <hr>

                <div class="row">
                  <div class="span8">

                    <table id="myTable" class="table table-striped table-bordered">
                      <tr>
                        <td rowspan="7" colspan="2" style="text-align: center"><img id="gambar" src="{{ asset('img/plants/default.png') }}" width="40%"><u><h3 id="name"></h3></u><h4 id="type">type</h4></td>
                        <td><b>Temperature</b></td>
                        <td id="temperature"></td>
                      </tr>
                      <tr>
                        <td><b>Soil Humidity</b></td>
                        <td id="shumidity"></td>
                      </tr>
                      <tr>
                        <td><b>Air Humidity</b></td>
                        <td id="humidity"></td>
                      </tr>
                      <tr>
                        <td><b>Ec</b></td>
                        <td id="ec"></td>
                      </tr>
                      <tr>
                        <td><b>Light Intensity</b></td>
                        <td id="intensity"></td>
                      </tr>
                      <tr>
                        <td><b>pH</b></td>
                        <td id="ph"></td>
                      </tr>
                      <tr>
                        <td><b>Wind Speed</b></td>
                        <td id="vwind"></td>
                      </tr>
<!--                       <tr>
                        <td><b>Rssi</b></td>
                        <td id="rssi"></td>
                      </tr>
                      <tr>
                        <td><b>Pressure</b></td>
                        <td id="pressure"></td>
                      </tr>
 -->                      <tr>
                        <td colspan="2"><h3 id="tanggal"></h3></td>
                        <td colspan="2"><b>Weather Forecast</b></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td rowspan="2"><img id="signal" src="{{ asset('img/signal/signal3.png') }}" width="15%"></td>
                        <td colspan="2" rowspan="2" style="padding: 20px">
                          <div class="row">
                            <div class="col-md-4" id="weather1"></div>
                            <div class="col-md-4" id="weather2"></div>
                            <div class="col-md-4" id="weather3"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Active</td>
                      </tr>
                    </table>
                  </div>

                  <div class="span3" style="text-align: center">

                    <h2>CONDITION</h2>
                    <img src="{{ asset('img/good.png') }}" width="50%" class="img-rounded">
                    <br>
                    <br>
                    <h4><b id="name2"></b><br> Are In Good Condition</h4>

                  </div>

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

@section('css')
<link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
<link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">

<style>

  td {
    text-align: center !important;
    vertical-align: middle !important;
  }

</style>

@endsection

@section('js')
<script src="{{ asset('js/selectize.min.js') }}"></script>

<script>

  var currentPlantId = document.getElementById("selectPlants").value;
  var currentDate = new Date();
  document.getElementById("tanggal").innerHTML = currentDate.getDate()+'/'+currentDate.getMonth()+'/'+currentDate.getFullYear();

  $(document).ready(function () {
    // add selectize to select element
    $('.js-selectize').selectize({
      sortField: 'text'
    });
  });

  $("#gambar").on("error", function(){
    $(this).attr('src', "{{ asset('img/plants/default.png') }}");
  });

  function updateStatus(id) {
    var xhttp = new XMLHttpRequest();
    var image = "{{ asset('img/plants') }}/";

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);



        document.getElementById("temperature").innerHTML = data.temperature + ' &#8451';
        document.getElementById("humidity").innerHTML = data.humidity + ' %';
        document.getElementById("intensity").innerHTML = data.intensity + ' Lux';
        document.getElementById("ph").innerHTML = data.ph;
        document.getElementById("ec").innerHTML = data.ec;
        document.getElementById("vwind").innerHTML = data.vwind + ' m/s';

        if (!isImgGet) {
          image = data.plant_id+".png";
          document.getElementById("gambar").src = image;
          document.getElementById("name").innerHTML = data.name;
          document.getElementById("name2").innerHTML = data.name;
          document.getElementById("type").innerHTML = data.type;
          layoutChange(data.type);

          isImgGet = true;
        }
        if (!isWeatherGet) {
            weather(data.city);
            isWeatherGet = true;
        }
      }
    };
    xhttp.open("GET", "{{ url('/user/data') }}/activeplant/"+id, true);
    xhttp.send();

  }

  var isWeatherGet = false;
  var isImgGet = false;

  function changePlant(id) {
    isWeatherGet = false;
    isImgGet = false;
    currentPlantId = id;
    updateStatus(currentPlantId);
  }

  var i = 1;
  function signal() {
    var path = "{{ asset('img/signal/signal') }}";
    document.getElementById("signal").src = path + i + '.png';

    if (i == 4) {
      i = 1;
    }
    else {
      i++;
    }
  }

  changePlant(currentPlantId);

  setInterval(function() {
    signal();
    updateStatus(currentPlantId);
  }, 3000);

  function weather(coordinate) {

    try {
      coordinate = coordinate.split(',');

      //jika gagal hentikan
      if (coordinate.length < 1) {
        return false;
      }

      var weather1 = document.getElementById("weather1");
      var weather2 = document.getElementById("weather2");
      var weather3 = document.getElementById("weather3");

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          var listDate;
          var condition;
          var step = 0;

          data.list.forEach(function(item,index) {
            if (step == 3) {
              return true; 
            }

            listDate = new Date(item.dt_txt);
            condition = '<img src="http://openweathermap.org/img/w/'+item.weather[0].icon+'.png" /><br>' +item.weather[0].description+'<br>'+listDate.getDate()+'/'+listDate.getMonth()+'/'+listDate.getFullYear();


            if (currentDate.getDate() == listDate.getDate() && step == 0) {
              step++;
              weather1.innerHTML = condition;
            }
            if (currentDate.getDate()+1 == listDate.getDate() && step == 1) {
              step++;
              weather2.innerHTML = condition;
            }
            if (currentDate.getDate()+2 == listDate.getDate() && step == 2) {
              step++;
              weather3.innerHTML = condition;
            }

          });

        }
      };
      xhttp.open("GET", "http://api.openweathermap.org/data/2.5/forecast?lat="+coordinate[0]+"&lon="+coordinate[1]+"&APPID=213c70a4ea67dc4a1d76415b9d88df3c", true);
      xhttp.send();
    }
    catch(err) {
      return false;
    }

  }


  //layout section
  function layoutChange(type) {

    // type = 'indo';

    //rowSpan
    //style.display = none

    var table = document.getElementById('myTable');
    var gambar = table.rows[0].cells[0];

    if (type == 'hidroponik') {
      //hide
      table.rows[1].style.display = 'none'; //soil
      table.rows[6].style.display = 'none'; //vwind

      //show
      table.rows[3].style.display = ''; //ec
      table.rows[5].style.display = ''; //ph

      gambar.rowSpan = 5;
    }

    else if (type == 'indoor') {
      //hide
      table.rows[1].style.display = ''; //soil
      table.rows[6].style.display = 'none'; //vwind

      //show
      table.rows[3].style.display = 'none'; //ec
      table.rows[5].style.display = 'none'; //ph

      gambar.rowSpan = 4;

    }

    else if (type == 'outdoor') {
      //hide
      table.rows[1].style.display = ''; //soil
      table.rows[6].style.display = ''; //vwind

      //show
      table.rows[3].style.display = 'none'; //ec
      table.rows[5].style.display = 'none'; //ph

      gambar.rowSpan = 5;

    }
  }

</script>
@endsection
