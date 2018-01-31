@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Detail Ruangan</h2>
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
                @if(\Laratrust::can("update-rooms") || \Laratrust::can("create-rooms"))
                <li><a href="{{ route('rooms.create') }}">Tambah</a></li>
                <li><a href="{{ route('rooms.edit',$data->id) }}">Ubah</a></li>
                @endif
                <li><a href="?print=true">Cetak Data Ruangan</a></li>
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
                <b>Kode ITB</b> : {{ $data->code }} <hr>
                <b>Kode Prodi</b> : {{ $data->code2 }} <hr>
                <b>Deskripsi</b> : {{ $data->description }} <hr>
                <b>Penanggung Jawab</b> : {{ $data['handler'] }} <hr>
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
            Detail Assets Di Ruangan
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="{{ route('assets.create') }}">Tambah</a></li>
                <li><a href="?print=true">Cetak Data Ruangan</a></li>
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
                <th style="text-align: center">Serial/Kode</th>
                <th style="text-align: center">No. PO</th>
                <th style="text-align: center">No. BST</th>
                <th style="text-align: center">Sumber Dana</th>
                <th style="text-align: center">Harga</th>
                <th style="text-align: center">Tahun</th>
                <th style="text-align: center">Kondisi</th>
                <th style="text-align: center">Status</th>
                @if(\Laratrust::can("update-rooms") || \Laratrust::can("delete-rooms"))
                <th style="text-align: center">Action</th>
                @endif
              </tr>
            </thead>
          </table>

        </div>

      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Peminjaman Barang</h4>
        </div>
        <div class="modal-body">
          <h4 align="center">Pilih Peminjam</h4>
          <div class="form-group form-float">
            <div class="form-line">
              {!! Form::select('user_id', App\User::pluck('name','id'), null, ['id'=>'user_id','class' => 'form-control', 'placeholder'=>'Pilih Peminjam','data-live-search'=>'true' ] ) !!}
            </div>
          </div>
          <button class="btn btn-primary" onclick="pinjamAjax()">Konfirmasi Peminjaman</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal -->


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

    var indexPath = '{{ route("assetdetails.index") }}';
    var deletePath = '{{ route("assetdetails.destroy",'') }}';
    var updatePath = '{{ route("assetdetails.update",'') }}';
    var assetShow = '{{ route("assets.show",'') }}';

    $('#konten').DataTable({
      processing: true,
      serverSide: true,
      ajax: '',
      columns: [
      { data: 'no', name: 'no', searchable:false },
      { data: 'name', name: 'assets.name', render: function(data,type,full) {
        return '<a href="'+assetShow+'/'+full.asset_id+'">' + data + '</a>';
      }},
      { data: 'serial', name: 'serial' },
      { data: 'no_po', name: 'no_po' },
      { data: 'no_bst', name: 'no_bst' },
      { data: 'sourcefund', name: 'sourcefund' },
      { data: 'price', name: 'price' , render: function(data) {
        return 'Rp. ' + data;
      }},
      { data: 'year', name: 'year' },
      { data: 'conditionText', name: 'conditionText' , searchable:false},
      { data: 'user_id', name: 'user_id', searchable:false,render: function(data) {
        return data != null ? 'Di Pinjam' : 'Tersedia';
      }},
        @if(\Laratrust::can("update-rooms"))
      { data: 'id', name: 'id', sortable: false, searchable:false,render: function(data,type,full) {
        var output = '';
        if (full.user_id != null) {
          output += '<button class="btn btn-warning btn-sm" onclick="returnData('+data+')">Konfirmasi Pengembalian</button>';
        } else {
          output += '<button class="btn btn-primary btn-sm" onclick="pinjam('+data+')">Pinjam</button>';
          @if(\Laratrust::can("delete-rooms"))
            output += '<button onclick="deleteAlocation('+data+')" class="btn btn-warning btn-sm">Hapus Alokasi</button>';
          @endif
        }
        return output;
      }},
        @endif
      ],
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

    @if(\Laratrust::can("delete-rooms"))
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

    @if(\Laratrust::can("update-rooms"))
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
