@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Barang</h2>
  </div>

  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-blue-grey">
          <h2>
            List Barang
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
              @if(\Laratrust::can("create-assets"))
                <li><a href="{{ route('assets.create') }}">Tambah</a></li>
              @endif
              </ul>
            </li>
          </ul>
        </div>
        <div class="body table-responsive">
          <table class="table" id="konten">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Merk/Type</th>
                <!-- <th>Tersedia</th> -->
                <th>Teralokasi</th>
                <th>Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>

        </div>
      </div>
    </div>
  </div>
  <!-- #END# Basic Table -->

  <!-- Basic Table -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-blue-grey">
          <h2>
            List Barang Di Pinjam
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="#">#</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="body table-responsive">
          <table class="table" id="kontenPinjam">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Merk/Type</th>
                <th>Serial/Kode</th>
                <th>Peminjam</th>
                <th>Tanggal</th>
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

  var showPath = '{{ route("assets.show",'') }}';
  var editPath = '{{ route("assets.edit",'=') }}';
  var deletePath =  '{{ route("assets.destroy",'') }}';
  var addPath =  '{{ route("assets.create") }}';

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
      ajax: '{!! route('assets.index') !!}',
      columns: [
      { data: 'name', name: 'name' },
      { data: 'type', name: 'type' },
      // { data: 'available', name: 'available', searchable: false },
      { data: 'alocation', name: 'alocation', searchable: false },
      { data: 'jumlah', name: 'jumlah', searchable: false },
      { data: 'id', name: 'id', sortable: false,render: function(data,type,full) {
        var editBtn = '<a href="'+genShowPath(data)+'"><button class="btn btn-success btn-xs">Lihat</button></a> @if(\Laratrust::can("update-assets")) <a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-xs">Ubah</button></a>@endif ';

        @if(\Laratrust::can("delete-assets"))
        editBtn += full.alocation == 0 ? '<button onclick="deleteData('+data+')" class="btn btn-danger btn-xs">Hapus</button>' : '';
        @endif

        return editBtn;
      }},
      ],
      dom: 'Bfrtip',
      responsive: true,
      buttons: [
      {
        extend: 'excel',
        className: 'btn btn-xs',
        text: '<i class="material-icons">print</i>'
      }@if(\Laratrust::can('create-assets')),
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

      $('#kontenPinjam').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('assets.index') !!}?mode=pinjam',
      columns: [
      { data: 'no', name: 'no' },
      { data: 'name', name: 'name' },
      { data: 'type', name: 'type' },
      { data: 'serial', name: 'serial' },
      { data: 'peminjam', name: 'peminjam' },
      { data: 'updated_at', name: 'updated_at' }
      ],
      dom: 'Bfrtip',
      responsive: true,
      buttons: [
      {
        extend: 'excel',
        className: 'btn btn-xs',
        text: '<i class="material-icons">print</i>'
      }
      ]
    });

  });

  @if(\Laratrust::can("delete-assets"))
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
