@extends('layouts.app')

@section('content')

<div class="widget" style="margin-top:1em">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3>Update Profile</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">

      {!! Form::model($data, ['url' => route('profiles.store'),'method'=>'post','class'=>'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'Name', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
      {!! Form::label('username', 'Username', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('username', null, ['class'=>'form-control']) !!}
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
      {!! Form::label('email', 'Email', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::email('email', null, ['rows'=>3,'class'=>'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
      {!! Form::label('password', 'Password', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('password', null, ['class'=>'form-control','placeholder'=>'kosongkan jika tidak akan di ubah']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
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

