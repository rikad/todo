@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Projek</h2>
  </div>
  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-blue-grey">
          <h2>
            List Projek
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
              @if(\Laratrust::can("create-projects"))
                <li><a href="{{ route('projects.create') }}">Tambah</a></li>
              @endif
              </ul>
            </li>
          </ul>
        </div>
        <div class="body table-responsive">
          <table class="table" id="konten">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Leader</th>
                <th>Status</th>
                <th>Di Buat</th>
                <th>Di Perbaharui</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>

        </div>
      </div>
    </div>
  </div>
  <!-- #END# Basic Table -->

</div>

@endsection


@section('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Sweetalert Css -->
<link href="{{ asset('plugins') }}/sweetalert/sweetalert.css" rel="stylesheet" />
@endsection

@section('js')

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins') }}/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ asset('plugins') }}/sweetalert/sweetalert.min.js"></script>
<script>

  var showPath = '{{ route("projects.show",'') }}';
  var editPath = '{{ route("projects.edit",'=') }}';
  var deletePath =  '{{ route("projects.destroy",'') }}';
  var addPath =  '{{ route("projects.create") }}';

  $(function() {

    function genEditPath(id) {
      return editPath.replace('=',id);
    }

    function genShowPath(id) {
      return showPath+'/'+id;
    }


    $('#konten').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('projects.index') !!}',
      columns: [
      { data: 'no', name: 'no', searchable:false },
      { data: 'name', name: 'name' },
      { data: 'desc', name: 'desc' },
      { data: 'leader', name: 'leader' },
      { data: 'status', name: 'status',render: function(data) {
          return data == 0 ? '<span class="label label-warning">Belum Selesai</span>' : '<span class="label label-success">Selesai</span>';
      }},
      { data: 'created_at', name: 'created_at' },
      { data: 'updated_at', name: 'updated_at' },
      { data: 'id', name: 'id', sortable: false,render: function(data) {
        return '<a href="'+genShowPath(data)+'"><button class="btn btn-success btn-xs">Lihat</button></a> @if(\Laratrust::can("update-projects")) <a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-xs">Ubah</button></a>@endif @if(\Laratrust::can("delete-projects")) <button onclick="deleteData('+data+')" class="btn btn-danger btn-xs">Hapus</button> @endif';
      }},
      ],
      dom: 'Bfrtip',
      responsive: true,
      buttons: [
      {
        extend: 'excel',
        className: 'btn btn-xs',
        text: '<i class="material-icons">print</i>'
      },
      @if(\Laratrust::can("create-dosen"))
      {
        text: '<i class="material-icons">add</i>',
        className: 'btn btn-xs',
        action: function () {
          window.location.href = addPath;
        }
      }
      @endif
      ]
    });
  });

  @if(\Laratrust::can("delete-projects"))
  function deleteData(id) {
    swal({
        title: "Apakah Anda Yakin ?",
        text: "Data akan Hilang Setelah Di Hapus!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Hapus!",
        closeOnConfirm: false
    }, function() {
        sendAjax();
    } );

    function sendAjax() {
      $.ajax({
        url: deletePath+'/'+id,
        data: { '_token': '{{ csrf_token() }}' },
        type: 'DELETE',
        error: function() {
          alert('error');
        },
        success: function(res) {
            swal({
              title: "Berhasil Di Hapus!",
              text: "Data Telah Berhasil Di Hapus",
              type: "success"
            }, function() {
              location.reload();
            });
        }
      }); 
    }
  }
  @endif

</script>
@endsection
