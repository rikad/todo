@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3>Form Data Tanaman</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">

    @if(!isset($data))
      {!! Form::open(['url' => route('plants.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
    @else
      {!! Form::model($data, ['url' => route('plants.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
    @endif


    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'name', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-8">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group{{ $errors->has('gambar') ? 'has-error' : ''}}">
      {!! Form::label('gambar', 'Gambar', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-8">
        {!! Form::file('gambar', null, ['class'=>'form-control']) !!}
        @if(isset($data))
        @if(file_exists(public_path().'/img/plants/'.$data->id.'.png'))
        <hr>
        <p>{!! Html::image(asset('img/plants/'.$data->id.'.png'), null, ['width'=>'20%', 'class' => 'img-rounded','img-responsive']) !!}</p>
        @endif
        @endif
        {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('climate') ? 'has-error' : ''}}">
      {!! Form::label('climate', 'climate', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-8">
        {!! Form::text('climate', null, ['class'=>'form-control']) !!}
        {!! $errors->first('climate', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('umur1') ? 'has-error' : ''}}">
      {!! Form::label('umur1', 'umur', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('umur1', null, ['class'=>'form-control','placeholder'=>'umur1']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('umur2', null, ['class'=>'form-control','placeholder'=>'umur2']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('umur3', null, ['class'=>'form-control','placeholder'=>'umur3']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('umur4', null, ['class'=>'form-control','placeholder'=>'umur4']) !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('kc1') ? 'has-error' : ''}}">
      {!! Form::label('kc1', 'kc', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('kc1', null, ['class'=>'form-control','placeholder'=>'kc1']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('kc2', null, ['class'=>'form-control','placeholder'=>'kc2']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('kc3', null, ['class'=>'form-control','placeholder'=>'kc3']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('kc4', null, ['class'=>'form-control','placeholder'=>'kc4']) !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('tmin') ? 'has-error' : ''}}">
      {!! Form::label('tmin', 'Temperature', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('tmin', null, ['class'=>'form-control','placeholder'=>'tmin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('tmax', null, ['class'=>'form-control','placeholder'=>'tmax']) !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('hmin') ? 'has-error' : ''}}">
      {!! Form::label('hmin', 'Humidity', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('hmin', null, ['class'=>'form-control','placeholder'=>'hmin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('hmax', null, ['class'=>'form-control','placeholder'=>'hmax']) !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('imin') ? 'has-error' : ''}}">
      {!! Form::label('imin', 'Intensity', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('imin', null, ['class'=>'form-control','placeholder'=>'imin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('imax', null, ['class'=>'form-control','placeholder'=>'imax']) !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('panenmin') ? 'has-error' : ''}}">
      {!! Form::label('panenmin', 'HST', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('panenmin', null, ['class'=>'form-control','placeholder'=>'panenmin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('panenmax', null, ['class'=>'form-control','placeholder'=>'panenmax']) !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('depthmin') ? 'has-error' : ''}}">
      {!! Form::label('depthmin', 'Optimum Planting Depth', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('depthmin', null, ['class'=>'form-control','placeholder'=>'depthmin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('depthmax', null, ['class'=>'form-control','placeholder'=>'depthmax']) !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('distancemin') ? 'has-error' : ''}}">
      {!! Form::label('distancemin', 'Optimum Distance Planting', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-2">
        {!! Form::text('distancemin', null, ['class'=>'form-control','placeholder'=>'distancemin']) !!}
      </div>
      <p style="text-align: center; font-size: 2em" class="col-md-1">-</p>
      <div class="col-md-2">
        {!! Form::text('distancemax', null, ['class'=>'form-control','placeholder'=>'distancemax']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2 col-md-offset-8" style="text-align: center">
        {!! Form::submit('Simpan', ['class'=> 'btn btn-primary']) !!}
      </div>
    </div>

    {!! Form::close() !!}

  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget --> 

@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

