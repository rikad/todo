@extends('layouts.app')

@section('content')

<div class="widget">
  <div class="widget-header"> <i class="icon-user"></i>
    <h3> Data Tanaman</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="padding-left: 35px">

    <div align="right">
      <a href="{{ route('plants.create') }}"><button class="btn btn-primary">Tambah</button></a>
    </div>
    <hr>

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
  var editPath = '{{ url("/admin/plants/") }}/';
  var deletePath =  '{{ route("plants.destroy",'') }}/';

  $(function() {

    function genEditPath(id) {
      return editPath+id+'/edit';
    }

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
            { data: 'panenmax', name: 'panenmax' },
            { data: 'id', name: 'id', render: function(data) {
              return '<a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-sm">Ubah</button></a> <button onclick="deleteData('+data+')" class="btn btn-danger">Hapus</button>';
            }}
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
