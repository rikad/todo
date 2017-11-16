@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Sensors</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">

    @if(!isset($data))
      {!! Form::open(['url' => route('sensors.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
    @else
      {!! Form::model($data, ['url' => route('sensors.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
    @endif

    <div class="form-group {{ $errors->has('serial') ? 'has-error' : ''}}">
      {!! Form::label('serial', 'Serial', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('serial', null, ['class'=>'form-control']) !!}
        {!! $errors->first('serial', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
      {!! Form::label('password', 'Password', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('password', null, ['class'=>'form-control']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
      {!! Form::label('type', 'Type', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('type', ['outdoor'=>'outdoor','indoor'=>'indoor','hidroponik'=>'hidroponik'], null, ['class' => 'form-control', 'placeholder'=>'Pilih Type'] ) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
      {!! Form::label('user_id', 'Users', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('user_id', app\User::join('role_user','role_user.user_id','users.id')->where('role_user.role_id',2)->pluck('name','id')->all(), null, ['class' => 'form-control', 'placeholder'=>'Pilih User'] ) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
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

