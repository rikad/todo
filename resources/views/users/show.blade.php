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
                <b>ID</b> : {{ $data->noid }} <hr>
                <b>Username</b> : {{ $data->username }} <hr>
                <b>E-mail</b> : {{ $data->email }} <hr>
                <b>Address</b> : {{ $data->address }} <hr>
                <b>Phone</b> : {{ $data->phone }} <hr>
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
            Detail Peminjaman
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="{{ route('assets.create') }}">Tambah</a></li>
                <li><a href="#">Cetak Barcode</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="body">
            <table class="table" id="satuanTable" style="text-align: center">
              <thead>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Serial/Kode</th>
                <th style="text-align: center">No. PO</th>
                <th style="text-align: center">No. BST</th>
                <th style="text-align: center">Sumber Dana</th>
                <th style="text-align: center">Harga</th>
                <th style="text-align: center">Tahun</th>
                <th style="text-align: center">Kondisi</th>
                <th style="text-align: center">Alokasi</th>
              </thead>
              <tbody>
              @if( count($detail) > 0)
              @foreach($detail as $v)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td><a href="{{ route('assets.show',$v->asset_id) }}">{{ $v->name }}</a></td>
                  <td>{{ $v->serial}}</td>
                  <td>{{ $v->no_po }}</td>
                  <td>{{ $v->no_bst }}</td>
                  <td>{{ $v->sourcefund }}</td>
                  <td>Rp. {{ $v->price }}</td>
                  <td>{{ $v->year }}</td>
                  <td>
                    @if($v->condition == 0) Baik @endif
                    @if($v->condition == 1) Rusak Ringan @endif
                    @if($v->condition == 2) Rusak Berat @endif
                  </td>
                  <td>{{ $v->roomName }}</td>
                </tr>
              @endforeach
              @else
                <tr>
                  <td colspan="9">Belum Memiliki Peminjaman Barang</td>
                </tr>
              @endif
              </tbody>

            </table>

            <div id="editMode" style="display:none;">
              <div id="data" style="width: 100%; height: 40vh; overflow: hidden;"></div>
              <div align="right">
                <button id="saveButton" class="btn btn-primary" onclick="saveData()">Simpan</button>
              </div>
            </div>


        </div>

      </div>
    </div>
  </div>

</div>

@endsection
