@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Pegawai</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <div align="right">
      <a href="{{ route('pegawai.create') }}"><button class="btn btn-primary">Tambah</button></a>
    </div>
    <hr>

    <table class="table table-bordered" id="users-table">
      <thead>
        <tr>
          <th>Nip</th>
          <th>Name</th>
          <th>Birthdate</th>
          <th>Gender</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Department</th>
          <th>Jabatan</th>
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
  var editPath = '{{ url("/admin/pegawai/") }}/';
  var deletePath =  '{{ route("pegawai.destroy",'') }}/';

  $(function() {

    function genEditPath(id) {
      return editPath+id+'/edit';
    }

    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('pegawai.index') !!}',
      columns: [
      { data: 'nip', name: 'nip' },
      { data: 'name', name: 'name' },
      { data: 'birthdate', name: 'birthdate' },
      { data: 'gender', name: 'gender' },
      { data: 'address', name: 'address' },
      { data: 'phone', name: 'phone' },
      { data: 'department', name: 'department' },
      { data: 'jabatan', name: 'jabatan' },
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
