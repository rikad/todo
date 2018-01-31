@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Roles & Permission</h2>
  </div>

  <!-- Example Tab -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            List Roles & Permission
          </h2>
        </div>
        <div class="body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li role="presentation"><a href="{{ route('roles.index') }}">Permission</a></li>
            <li role="presentation"><a href="{{ route('roles.index') }}">Role Assigned</a></li>
            <li role="presentation"  class="active"><a href="#">Add Role</a></li>
          </ul>

          <br>

            @if(isset($data))
              {!! Form::model($data, ['url' => route('roles.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
            @else
              {!! Form::open(['url' => route('roles.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
            @endif

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="name">Role Name</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('name') ? ' error' : '' }}">
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('name'))
                      <label class="error" for="name">
                          {{ $errors->first('name') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="display_name">Display Name</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('display_name') ? ' error' : '' }}">
                    {!! Form::text('display_name', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('display_name'))
                      <label class="error" for="display_name">
                          {{ $errors->first('display_name') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="description">Description</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('description') ? ' error' : '' }}">
                    {!! Form::text('description', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('description'))
                      <label class="error" for="description">
                          {{ $errors->first('description') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Horizontal Layout -->

</div>
@endsection

@section('css')
<link href="{{ asset('plugins') }}/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
@endsection
