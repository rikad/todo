@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Pengguna</h2>
  </div>

  <!-- Horizontal Layout -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            @if(isset($data))
            Edit Pengguna
            @else
            Tambah Pengguna
            @endif

          </h2>
        </div>
        <div class="body">

            @if(isset($data))
              {!! Form::model($data, ['url' => route('users.update', $data->id), 'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
            @else
              {!! Form::open(['url' => route('users.store'), 'method' => 'post','files'=>true, 'class'=>'form-horizontal']) !!}
            @endif

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="name">Name</label>
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
                <label for="username">Username</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('username') ? ' error' : '' }}">
                    {!! Form::text('username', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('username'))
                      <label class="error" for="username">
                          {{ $errors->first('username') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="email">Email</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('email') ? ' error' : '' }}">
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('email'))
                      <label class="error" for="email">
                          {{ $errors->first('email') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="phone">Phone</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('phone') ? ' error' : '' }}">
                    {!! Form::number('phone', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('phone'))
                      <label class="error" for="phone">
                          {{ $errors->first('phone') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="password">Password</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('password') ? ' error' : '' }}">
                    {!! Form::text('password', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('password'))
                      <label class="error" for="password">
                          {{ $errors->first('password') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="address">Address</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('address') ? ' error' : '' }}">
                    {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
                  </div>
                  @if ($errors->has('address'))
                      <label class="error" for="address">
                          {{ $errors->first('address') }}
                      </label>
                  @endif
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="role">Role</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('role') ? ' error' : '' }}">
                    {!! Form::select('role', App\Role::pluck('display_name','id')->all(), null, ['class' => 'form-control show-tick', 'placeholder'=>'Pilih role'] ) !!}
                  </div>
                  @if ($errors->has('role'))
                      <label class="error" for="role">
                          {{ $errors->first('role') }}
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
