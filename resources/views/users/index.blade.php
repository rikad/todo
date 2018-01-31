@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Pengguna</h2>
  </div>
  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-blue-grey">
          <h2>
            List Pengguna
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="{{ route('users.create') }}">Tambah</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="body table-responsive">
          <table class="table" id="users-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Is Active</th>
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

  var editPath = '{{ url("/settings/users/") }}';
  var deletePath =  '{{ route("users.destroy",'') }}';
  var addPath =  '{{ route("users.create") }}';
  var showPath =  '{{ route("users.show",'') }}';

  $(function() {

    function genEditPath(id) {
      return editPath+'/'+id+'/edit';
    }

    function genShowPath(id) {
      return showPath+'/'+id;
    }


    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('users.index') !!}',
      columns: [
      { data: 'name', name: 'name' },
      { data: 'username', name: 'username' },
      { data: 'email', name: 'email' },
      { data: 'is_active', name: 'is_active' , searchable: false,render: function(data) {
        if (data == 1) {
          return '<span class="btn btn-xs btn-success">Active</span>';
        } else {
          return '<span class="btn btn-xs btn-danger">Disabled</span>';
        }
      }},
      { data: 'id', name: 'id', sortable: false,render: function(data) {
        return '<a href="'+genShowPath(data)+'"><button class="btn btn-success btn-xs">Lihat</button></a> @if(\Laratrust::can("update-users")) <a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-xs">Ubah</button></a>@endif @if(\Laratrust::can("delete-users")) <button onclick="deleteData('+data+')" class="btn btn-danger btn-xs">Hapus</button> @endif';
      }},
      ],
      dom: 'Bfrtip',
      responsive: true,
      buttons: [
      {
        extend: 'pageLength',
        className: 'btn btn-xs',
        text: '<i class="material-icons">toc</i>'
      },
      {
        extend: 'excel',
        className: 'btn btn-xs',
        text: '<i class="material-icons">print</i>'
      },
      {
        text: '<i class="material-icons">add</i>',
        className: 'btn btn-xs',
        action: function () {
          window.location.href = addPath;
        }
      }
      ]
    });
  });

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

</script>
@endsection
