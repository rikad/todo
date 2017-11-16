@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data User</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <div align="right">
      <a href="{{ route('user.create') }}"><button class="btn btn-primary">Tambah</button></a>
    </div>
    <hr>

    <table class="table table-bordered" id="users-table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Is Active</th>
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

  var editPath = '{{ url("/admin/user/") }}/';
  var deletePath =  '{{ route("user.destroy",'') }}/';

  $(function() {

    function genEditPath(id) {
      return editPath+id+'/edit';
    }


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
      { data: 'is_active', name: 'is_active' ,render: function(data) {
        if (data == 1) {
          return '<span class="btn btn-small btn-success">Active</span>';
        } else {
          return '<span class="btn btn-small btn-danger">Disabled</span>';
        }
      }},
      { data: 'id', name: 'id', render: function(data) {
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
