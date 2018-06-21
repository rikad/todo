@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-teal">
        <li><a href="/"><i class="material-icons">home</i> Home</a></li>
        <li class="active"><i class="material-icons">library_books</i> {{ $data->name }}</li>
    </ol>
  </div>

  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            {{ $data->name }}
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                @if(\Laratrust::can("update-projects") || \Laratrust::can("create-projects"))
                <li><a href="{{ route('projects.edit',$data->id) }}">Ubah</a></li>
                @endif
              </ul>
            </li>
          </ul>
        </div>

        <div class="body">
          <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
            <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                <a href="../../images/image-gallery/1.jpg">
                    <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-1.jpg">
                </a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
              <p>
                <b>Nama</b> : {{ $data->name }} <hr>
                <b>Deskripsi</b> : {{ $data->desc }} <hr>
                <b>Leader</b> : {{ $data->leader }} <hr>
                <b>Programmers</b> : {{ implode(',', $programmers) }} <hr>
                <b>Di Buat</b> : {{ $data->created_at }} <hr>
                <b>Di Perbaharui</b> : {{ $data->updated_at }} <br>
              </p>
            </div>

          </div>
        </div>

        </div>
      </div>
    </div>
  <!-- #END# Basic Table -->

  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            List Task
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="{{ route('tasks.create') }}">Tambah</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="body">

          <table class="table" id="konten">
            <thead>
              <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Difficulty</th>
                <th style="text-align: center">Programmer</th>
                <th style="text-align: center">Deadline</th>
                <th style="text-align: center">Status</th>
                @if(\Laratrust::can("update-projects") || \Laratrust::can("delete-projects"))
                <th style="text-align: center">Action</th>
                @endif
              </tr>
            </thead>
          </table>

        </div>

      </div>
    </div>
  </div>

</div>

@endsection

@section('css')

<!-- handsontable Css -->
<link href="{{ asset('plugins') }}/handsontable/handsontable.full.min.css" rel="stylesheet" />

<!-- Sweetalert Css -->
<link href="{{ asset('plugins') }}/sweetalert/sweetalert.css" rel="stylesheet" />

<link href="{{ asset('plugins') }}/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

@endsection

@section('js')
<script src="{{ asset('plugins') }}/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

  <!-- HandsonTable Plugin Js -->
  <script src="{{ asset('plugins') }}/handsontable/handsontable.full.min.js"></script>

  <!-- SweetAlert Plugin Js -->
  <script src="{{ asset('plugins') }}/sweetalert/sweetalert.min.js"></script>

<script>

    var indexPath = '{{ route("tasks.index") }}';
    var deletePath = '{{ route("tasks.destroy",'') }}';
    var updatePath = '{{ route("tasks.update",'') }}';

    $('#konten').DataTable({
      processing: true,
      serverSide: true,
      ajax: '',
      columns: [
      { data: 'no', name: 'no', searchable:false },
      { data: 'name', name: 'name' },
      { data: 'difficulty', name: 'difficulty' },
      { data: 'programmer', name: 'programmer' },
      { data: 'deadline', name: 'deadline' },
      { data: 'status', name: 'status',render: function(data) {
      		if(data == 0) return '<span class="label label-warning">Ongoing</span>';
          	if(data == 1) return '<span class="label label-success">Completed</span>';
          	if(data == 2) return '<span class="label label-success">Waiting</span>';
          	return '';
      }},

        @if(\Laratrust::can("update-projects"))
      { data: 'id', name: 'id', sortable: false, searchable:false,render: function(data,type,full) {
        return data;
      }},
        @endif
      ],
      responsive: true
    });

    @if(\Laratrust::can("delete-projects"))
    function deleteAlocation(id) {
      swal({
          title: "Apakah Anda Yakin ?",
          text: "Alokasi Barang Akan Di Hapus Dari Ruangan Ini!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ya, Hapus Alokasi!",
          closeOnConfirm: false
      }, function() {
          sendAjax();
      } );

      function sendAjax() {
        $.ajax({
          url: updatePath+'/'+id,
          data: { '_token': '{{ csrf_token() }}', 'room_id' : null },
          type: 'PUT',
          error: function() {
            alert('error');
          },
          success: function(res) {
            swal({
              title: "Alokasi Di Hapus!",
              text: "Alokasi Telah Berhasil Di Hapus",
              type: "success"
            }, function() {
              location.reload();
            });
          }
        }); 
      }
    }

    function returnData(id) {
      swal({
          title: "Apakah Anda Yakin ?",
          text: "Sebelum Konfirmasi Pastikan, Barang yang di kembalikan dalam kondisi baik!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ya, Barang Dalam Kondisi Baik!",
          closeOnConfirm: false
      }, function() {
          sendAjax();
      } );

      function sendAjax() {
        $.ajax({
          url: updatePath+'/'+id,
          data: { '_token': '{{ csrf_token() }}', 'user_id' : null },
          type: 'PUT',
          error: function() {
            alert('error');
          },
          success: function(res) {
            swal({
              title: "Konfirmasi Pengembalian Barang Berhasil !",
              text: "Barang Telah Berhasil Di Kembalikan",
              type: "success"
            }, function() {
              location.reload();
            });
          }
        }); 
      }
    }
    @endif

    @if(\Laratrust::can("update-projects"))
    var selectedID = 0;
    function pinjam(id) {
      $('#myModal').modal();
      selectedID = id;
    }
    function pinjamAjax() {
      $.ajax({
        url: updatePath+'/'+selectedID,
        data: { '_token': '{{ csrf_token() }}', 'user_id' : document.getElementById('user_id').value },
        type: 'PUT',
        error: function() {
          alert('error');
        },
        success: function(res) {
          swal({
            title: "Peminjaman Barang Berhasil !",
            text: "Barang Telah Berhasil Di Pinjam",
            type: "success"
          }, function() {
            location.reload();
          });
        }
      });
    }
    @endif
</script>
@endsection
