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

                <a href="{{ route('home') }}" class="shortcut shortcut-active"><i class="shortcut-icon icon-globe"></i><span class="shortcut-label">Planting Guides</span> </a>

                <a href="{{ route('plant.index') }}" class="shortcut"> <i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Field Status</span> </a>
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
                {!! Form::select('plants', [''=>'']+App\Plant::pluck('name','id')->all(), null, ['onchange' => 'changePlant(this.value)', 'class' => 'js-selectize', 'placeholder'=>'Select Plant'] ) !!}

                <hr>

                <div class="row">
                  <div class="span8">

                    <table class="table table-striped table-bordered">
                      <tr>
                        <td><b>Plant Name</b></td>
                        <td id="name">-</td>
                      </tr>
                      <tr>
                        <td><b>Optimum Temperature</b></td>
                        <td id="temperature">-</td>
                      </tr>
                      <tr>
                        <td><b>Light Preference</b></td>
                        <td id="intensity">-</td>
                      </tr>
                      <tr>
                        <td><b>Air Humidity</b></td>
                        <td id="humidity">-</td>
                      </tr>
                      <tr>
                        <td><b>Photoperiodism</b></td>
                        <td id="photoperiodism">-</td>
                      </tr>
                      <tr>
                        <td><b>Harvesting Time</b></td>
                        <td id="panen">-</td>
                      </tr>
                      <tr>
                        <td><b>Climate Suggestion</b></td>
                        <td id="climate">-</td>
                      </tr>
                      <tr>
                        <td><b>Optimum Planting Distance</b></td>
                        <td id="distance"></td>
                      </tr>
                      <tr>
                        <td><b>Optimum Planting Depth</b></td>
                        <td id="depth"></td>
                      </tr>
                    </table>
                  </div>

                  <div class="span3" style="text-align: center">

                    <img id="gambar" src="{{ asset('img/plants/default.png') }}" class="img-rounded img-responsive">
                    <h3 id="nameLabel"></h3><br>
                    <a href="{{ route('plant.create') }}"><button class="btn btn-success btn-lg">Start Plan</button></a>
                  </div>


                </div>

                  <hr>

                  @if(isset($data) && count($data) > 0)
                  <h2 align="center">My Active Plants</h2><br>
                    <table class="table table-striped table-bordered">
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Plant</th>
                        <th>Area</th>
                        <th>Capground</th>
                        <th>Coordinate</th>
                        <th>Action</th>
                      </tr>
                      @foreach($data as $v)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->area }}</td>
                        <td>{{ $v->capground }}</td>
                        <td>{{ $v->city }}</td>
                        <td><a href="{{ url('/user/plant/') }}/{{ $v->id }}/edit"><button class="btn btn-primary btn-sm">Ubah</button></a> <button onclick="deleteData({{ $v->id }})" class="btn btn-danger">Hapus</button></td>
                      </tr>
                      @endforeach
                    </table>

                  @endif

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
<link href="{{ asset('css/selectize.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="{{ asset('js/selectize.min.js') }}"></script>
<script>

  $(document).ready(function () {
    // add selectize to select element
    $('.js-selectize').selectize({
      sortField: 'text'
    });
  });

  $("#gambar").on("error", function(){
    $(this).attr('src', "{{ asset('img/plants/default.png') }}");
  });

  var currentPlantId = Math.floor((Math.random() * 10) + 1);
  updateStatus(currentPlantId);

  function checkNull(data) {
    if (data == null) {
      return '-';
    }

    return data
  };

  function checkNullSatuan(min,max,satuan) {
    if (min == null & max == null) {
      return '-';
    }
    if (min == null) {
      return '0 ' + satuan;
    }
    if (max == null) {
      return min + ' ' +satuan;
    }

    return min + ' - ' + max + ' ' + satuan;
  };

  function updateStatus(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);

        document.getElementById("name").innerHTML = checkNull(data.name);
        document.getElementById("nameLabel").innerHTML = checkNull(data.name);
        document.getElementById("humidity").innerHTML = checkNullSatuan(data.hmin,data.hmax,'%');
        document.getElementById("temperature").innerHTML = checkNullSatuan(data.tmin,data.tmax,'&#8451');
        document.getElementById("intensity").innerHTML = checkNullSatuan(data.imin,data.imax,'Lux');
        document.getElementById("panen").innerHTML = checkNullSatuan(data.panenmin,data.panenmax,'HST');
        document.getElementById("climate").innerHTML = checkNull(data.climate);
        document.getElementById("distance").innerHTML = checkNullSatuan(data.distancemin,data.distancemax,'CM');
        document.getElementById("depth").innerHTML = checkNullSatuan(data.depthmin,data.depthmax,'CM');
      }
    };
    xhttp.open("GET", "{{ url('/user/data') }}/plantbyid/"+id, true);
    xhttp.send();

  }

  function changePlant(id) {
    currentPlantId = id;

    var image = "{{ asset('img/plants') }}/"+id+".png";
    document.getElementById("gambar").src = image;


    updateStatus(currentPlantId);
  }

  var deletePath =  '{{ route("plant.destroy",'') }}/';

  function deleteData(id) {
    $.ajax({
      url: deletePath+id,
      data: { '_token': '{{ csrf_token() }}' },
      type: 'DELETE',
      error: function() {
        location.reload();
      },
      success: function(res) {
        location.reload();
      }
    }); 
  }



</script>
@endsection
