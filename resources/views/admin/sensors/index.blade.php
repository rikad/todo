@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Sensors</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <div align="right">
      <a href="{{ route('sensors.create') }}"><button class="btn btn-primary">Tambah</button></a>
    </div>
    <hr>

    <table class="table table-bordered" id="users-table">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Password</th>
          <th>Type</th>
          <th>User</th>
          <th>Action</th>
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
  var editPath = '{{ url("/admin/sensors/") }}/';
  var deletePath =  '{{ route("sensors.destroy",'') }}/';

  $(function() {

    function genEditPath(id) {
      return editPath+id+'/edit';
    }

    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('sensors.index') !!}',
      columns: [
      { data: 'serial', password: 'serial' },
      { data: 'password', password: 'password' },
      { data: 'type', password: 'type' },
      { data: 'user', password: 'user' },
      { data: 'id', password: 'id', render: function(data) {
        return '<a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-sm">Ubah</button></a> <button onclick="deleteData('+data+')" class="btn btn-danger">Hapus</button>';
      }},
      ]
    });
  });

  function deleteData(id) {
    $.ajax({
      url: deletePath+id,
      data: { '_token': '{{ csrf_token() }}' },
      type: 'DELETE',
      error: function() {
        location.reload();
      },
      success: function(res) {
        location.reload();
      }
    }); 
  }
</script>

@endsection
