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

                <a href="{{ route('home') }}" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Greenhouse Status</span> </a>

                <a href="{{ route('utilities.index') }}" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                <a href="{{ route('schedule.index') }}" class="shortcut"><i class="shortcut-icon icon-calendar"></i> <span class="shortcut-label">Planting Schedule</span> </a>

                <a href="{{ route('plant.index') }}" class="shortcut shortcut-active"> <i class="shortcut-icon icon-globe"></i><span class="shortcut-label">Plant</span> </a>

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

              <table class="table table-bordered" id="users-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Area</th>
                    <th>Capground</th>
                    <th>City</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
              </table>

              {!! Form::open(['url' => 'foo/bar', 'class'=>'form-horizontal']) !!}

              <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'judul', ['class'=>'col-md-2 control-label']) !!}
                <div class="col-md-4">
                  {!! Form::text('title', null, ['class'=>'form-control']) !!}
                  {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group{{ $errors->has('amount') ? 'has-error' : ''}}">
                {!! Form::label('amount', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}
                <div class="col-md-4">
                  {!! Form::number('amount', null, ['class'=>'form-control', 'min'=>1]) !!}
                  {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group{{ $errors->has('cover') ? 'has-error' : ''}}">
                {!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
                <div class="col-md-4">
                  {!! Form::file('cover') !!}
                  @if(isset($book) && $book->cover)
                  <p>{!! Html::image(asset('img/'.$book->cover), null, ['class' => 'img-rounded','img-responsive']) !!}</p>
                  @endif
                  {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                  {!! Form::submit('Simpan', ['class'=> 'btn btn-primary']) !!}
                </div>
              </div>
              {!! Form::close() !!}

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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/datatables.min.js') }}"></script>

<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('plant.index') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'area', name: 'area' },
            { data: 'capground', name: 'capground' },
            { data: 'city', name: 'city' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            // { data: 'action', name: 'action' ,render: function() {
            //   return '<span class="btn btn-small btn-danger">Not Active</span> <button class="btn btn-small btn-info">Enable</button>';
            // }}
        ]
    });
});
</script>
@endsection


