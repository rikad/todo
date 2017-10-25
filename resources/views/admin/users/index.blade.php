@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data User</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <table class="table table-bordered" id="users-table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Active</th>
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
        ajax: '{!! route('user.index') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'username', name: 'username' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'is_active', name: 'is_active' ,render: function(data,type,full) {
                if (data == 1) {
                  return '<span class="btn btn-small btn-success">Active</span> <button class="btn btn-small btn-warning">Disable</button>';
                } else {
                  return '<span class="btn btn-small btn-danger">Not Active</span> <button class="btn btn-small btn-info">Enable</button>';
                }
            }}
        ]
    });
});
</script>
@endsection
