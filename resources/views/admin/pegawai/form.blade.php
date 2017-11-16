@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Pegawai</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">

    @if(!isset($data))
      {!! Form::open(['url' => route('pegawai.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
    @else
      {!! Form::model($data, ['url' => route('pegawai.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
    @endif

    <div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
      {!! Form::label('nip', 'NIP', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('nip', null, ['class'=>'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'name', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : ''}}">
      {!! Form::label('birthdate', 'birthdate', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('birthdate', null, ['class'=>'form-control','placeholder'=>'YYYY-MM-DD']) !!}
        {!! $errors->first('birthdate', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
      {!! Form::label('gender', 'gender', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('gender', ['L'=>'L','P'=>'P'], null, ['class' => 'form-control', 'placeholder'=>'Pilih Gender'] ) !!}
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
      {!! Form::label('address', 'address', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::textarea('address', null, ['rows'=>3,'class'=>'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
      {!! Form::label('phone', 'phone', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('department') ? 'has-error' : ''}}">
      {!! Form::label('department', 'department', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('department', null, ['class'=>'form-control']) !!}
        {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('jabatan') ? 'has-error' : ''}}">
      {!! Form::label('jabatan', 'jabatan', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('jabatan', null, ['class'=>'form-control']) !!}
        {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2 col-md-offset-6" style="text-align: center">
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

