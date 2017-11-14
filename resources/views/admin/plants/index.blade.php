@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Tanaman</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <table class="table table-bordered" id="users-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Temperature Min</th>
          <th>Temperature Max</th>
          <th>Humidity Min</th>
          <th>Humidity Max</th>
          <th>Intensity Min</th>
          <th>Intensity Max</th>
          <th>Panen Min</th>
          <th>Panen Max</th>
        </tr>
      </thead>
    </table>

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

<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('plants.index') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'tmin', name: 'tmin' },
            { data: 'tmax', name: 'tmax' },
            { data: 'hmin', name: 'hmin' },
            { data: 'hmax', name: 'hmax' },
            { data: 'imin', name: 'imin' },
            { data: 'imax', name: 'imax' },
            { data: 'panenmin', name: 'panenmin' },
            { data: 'panenmax', name: 'panenmax' }
        ]
    });
});
</script>
@endsection
