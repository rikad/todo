@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3>Form Data User</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">

    @if(isset($data))
      {!! Form::model($data, ['url' => route('user.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
    @else
      {!! Form::open(['url' => route('user.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
    @endif

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'name', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
      {!! Form::label('username', 'username', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('username', null, ['class'=>'form-control']) !!}
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
      {!! Form::label('email', 'email', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::email('email', null, ['rows'=>3,'class'=>'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
      {!! Form::label('password', 'password', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('password', null, ['class'=>'form-control']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
      {!! Form::label('role', 'role', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('role', App\Role::pluck('display_name','id')->all(), null, ['class' => 'form-control', 'placeholder'=>'Pilih role'] ) !!}
        {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
      {!! Form::label('is_active', 'is_active', ['class'=>'col-md-2 control-label']) !!}
      <div class="col-md-6">
        {!! Form::select('is_active', ['1'=>'Active','0'=>'Disabled'], null, ['class' => 'form-control'] ) !!}
        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
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

