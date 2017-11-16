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

              <div class="col-md-12">

              <hr>

    @if(isset($data))
      {!! Form::model($data, ['url' => route('plant.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
    @else
      {!! Form::open(['url' => route('plant.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
    @endif

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'name', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('plant_id') ? 'has-error' : ''}}">
      {!! Form::label('plant_id', 'Plant', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('plant_id', [''=>'']+App\Plant::pluck('name','id')->all(), null, ['class' => 'js-selectize', 'placeholder'=>'Select Plant'] ) !!}
        {!! $errors->first('plant_id', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('sensor_id') ? 'has-error' : ''}}">
      {!! Form::label('sensor_id', 'Sensor', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('sensor_id', [''=>'']+App\Sensor::pluck('serial','id')->all(), null, ['class' => 'js-selectize', 'placeholder'=>'Select Sensor'] ) !!}
        {!! $errors->first('sensor_id', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
      {!! Form::label('area', 'area', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('area', null, ['class'=>'form-control']) !!}
        {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('capground') ? 'has-error' : ''}}">
      {!! Form::label('capground', 'capground', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('capground', null, ['class'=>'form-control']) !!}
        {!! $errors->first('capground', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
      {!! Form::label('city', 'city', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::hidden('city', null, ['id'=>'city','class'=>'form-control disabled']) !!}
        <p>One Click To select coordinate and save</p>
        <hr>
		<div id="mapid" style="width: 100%; height: 200px;"></div>
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <hr>
    <div class="form-group">
      <div class="col-md-2 col-md-offset-6" style="text-align: center">
        {!! Form::submit('Simpan', ['class'=> 'btn btn-primary']) !!}
      </div>
    </div>

    {!! Form::close() !!}

              <hr>

              </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

        </div>
      </div>


    </div>
  </div>
</div>
</div>
@endsection

@section('css')
<link href="{{ asset('css/selectize.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
@endsection

@section('js')
<script src="{{ asset('js/selectize.min.js') }}"></script>
<script>

  $(document).ready(function () {
    // add selectize to select element
    $('.js-selectize').selectize({
      sortField: 'text'
    });


	var mymap = L.map('mapid').setView([-6.93001, 107.60696], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	var popup = L.popup();

	function onMapClick(e) {
		popup
		.setLatLng(e.latlng)
		.setContent("You clicked the map at "+ e.latlng.toString())
		.openOn(mymap);

		console.dir(e);

		document.getElementById('city').value = e.latlng.lat+','+e.latlng.lng;
	}

	mymap.on('click', onMapClick);

  });


</script>
@endsection
