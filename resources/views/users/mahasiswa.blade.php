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
            List Mahasiswa
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
              @if(\Laratrust::can("create-mahasiswa"))
                <li><a href="{{ route('mahasiswa.create') }}">Import Mahasiswa</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Setting Form Bebas Pinjam</a></li>
              @endif
              </ul>
            </li>
          </ul>
        </div>

        <br>
        <!-- <h4 align="center">Pilih Angkatan</h4> -->
        <br>
        <div class="form-group" style="padding: 0 2em 0 2em;">
          <div class="form-line">
            {!! Form::select('angkatan', App\User::select(\DB::raw('CONCAT("20", MID(ANY_VALUE(users.noid),4,2) ) AS year,ANY_VALUE(users.id) AS id'))->join('role_user','role_user.user_id','users.id')->join('roles','role_user.role_id','roles.id')->where('roles.name','mahasiswa')->where('users.noid','<>','NULL')->groupBy(\DB::raw('MID(users.noid,4,2)'))->pluck('year','year') , null, ['id'=>'asset_id','class' => 'form-control', 'placeholder'=>'Pilih Angkatan','data-live-search'=>'false','onchange'=>'changeYear(this.value)' ] ) !!}
          </div>
        </div>

        <div class="body table-responsive">
          <table class="table" id="users-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Username/Nim</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>

        </div>
      </div>
    </div>
  </div>
  <!-- #END# Basic Table -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Setting Form Bebas Pinjam</h4>
        </div>
        <div class="modal-body">

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="saspra">SASPRA</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('saspra') ? ' error' : '' }}">
                    {!! Form::text('saspra', $saspra, ['id'=>'saspra','class'=>'form-control']) !!}
                  </div>
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="perpustakaan">Perpustakaan</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('perpustakaan') ? ' error' : '' }}">
                    {!! Form::text('perpustakaan', $perpus, ['id'=>'perpus','class'=>'form-control']) !!}
                  </div>
                </div>
              </div>
            </div>

            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="prodi">Prodi</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                  <div class="form-line{{ $errors->has('prodi') ? ' error' : '' }}">
                    {!! Form::text('prodi', $prodi, ['id'=>'prodi','class'=>'form-control']) !!}
                  </div>
                </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="saveFBP()">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


</div>

@endsection


@section('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Sweetalert Css -->
<link href="{{ asset('plugins') }}/sweetalert/sweetalert.css" rel="stylesheet" />
<link href="{{ asset('plugins') }}/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

@endsection

@section('js')

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins') }}/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ asset('plugins') }}/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ asset('plugins') }}/sweetalert/sweetalert.min.js"></script>

<script src="{{ asset('plugins') }}/jszip/jszip2.0.min.js"></script>
<script src="{{ asset('plugins') }}/jszip/jszip-utils.min.js"></script>
<script src="{{ asset('plugins') }}/jszip/file-saver.js"></script>
<script src="{{ asset('plugins') }}/docxtemplater/docxtemplater-latest.min.js"></script>

<script>

  var editPath = '{{ url("/settings/users/") }}';
  var deletePath =  '{{ route("users.destroy",'') }}';
  var addPath =  '{{ route("mahasiswa.create") }}';
  var indexPath =  '{!! route('users.index') !!}'+'?type=mahasiswa';
  var showPath = '{{ route("mahasiswa.show",'') }}';

    function changeYear(year) {
      indexPath += '&angkatan='+year;
      table.ajax.url(indexPath).load();
    }

    function genShowPath(id) {
      return showPath+'/'+id;
    }

    function genEditPath(id) {
      return editPath+'/'+id+'/edit';
    }


    var table = $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: indexPath,
      columns: [
      { data: 'no', name: 'no', searchable: false},
      { data: 'username', name: 'username' },
      { data: 'name', name: 'name' },
      { data: 'email', name: 'email' },
      { data: 'id', name: 'id', sortable: false,render: function(data) {
        return '<a href="'+genShowPath(data)+'"><button class="btn btn-success btn-xs">Lihat</button></a>  <button onclick="getFBP('+data+')" class="btn btn-primary btn-xs">Bebas Pinjam</button> @if(\Laratrust::can("update-mahasiswa")) <a href="'+genEditPath(data)+'"><button class="btn btn-warning btn-xs">Ubah</button></a>@endif @if(\Laratrust::can("delete-mahasiswa")) <button onclick="deleteData('+data+')" class="btn btn-danger btn-xs">Hapus</button> @endif';
      }},
      ],
      responsive: true,
 
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

  function saveFBP(){

      $.ajax({
        url: '',
        data: { '_token': '{{ csrf_token() }}', 'perpus': document.getElementById('perpus').value, 'prodi': document.getElementById('prodi').value, 'saspra': document.getElementById('saspra').value },
        type: 'POST',
        error: function() {
          alert('error');
        },
        success: function(res) {
            swal({
              title: "Berhasil!",
              text: "Data Telah Berhasil Di Perbaharui",
              type: "success"
            }, function() {
              location.reload();
            });
        }
      }); 

      $('#myModal').modal();
  }

  function getFBP(id) {
      $.ajax({
        url: showPath+'/'+id,
        type: 'GET',
        error: function() {
            swal({
              title: "Mahasiswa Belum Mengembalikan Barang!",
              text: "Kembalikan Barang Untuk Mengunduh Form Bebas Pinjam",
              type: "error"
            });
        },
        success: function(res) {
          if (res == 'not-ok') {
            swal({
              title: "Mahasiswa Belum Mengembalikan Barang!",
              text: "Kembalikan Barang Untuk Mengunduh Form Bebas Pinjam",
              type: "error"
            });
            
          } else {

            var data = {
              name: res.data.name,
              nim: res.data.noid,
              prodi: res.prodi,
              pembimbing1: '',
              pembimbing2: '',
              wali: '',
              plab: '',
              lab: '',
              wisuda: '',
              saspra: res.saspra,
              perpus: res.perpus
            }
            if (res.data.desc != null) {
              var desc = JSON.parse(res.data.desc);

              data.pembimbing1 = desc.pembimbing1;
              data.pembimbing2 = desc.pembimbing2;
              data.wali = desc.wali;
              data.plab = desc.plab;
              data.lab = desc.lab;
              data.wisuda = desc.wisuda;
            }

            printFBP(data);

          }

        }

      }); 
  }


  function printFBP(data) {
    function loadFile(url,callback){
        JSZipUtils.getBinaryContent(url,callback);
    }
    loadFile("{{ asset('doc/Bebas Pinjam Wis April 2018.docx') }}",function(error,content){
        if (error) { throw error };
        var zip = new JSZip(content);
        var doc=new Docxtemplater().loadZip(zip)
        doc.setData(data);

        try {
            // render the document (replace all occurences of {first_name} by John, {last_name} by Doe, ...)
            doc.render()
        }
        catch (error) {
            var e = {
                message: error.message,
                name: error.name,
                stack: error.stack,
                properties: error.properties,
            }
            console.log(JSON.stringify({error: e}));
            // The error thrown here contains additional information when logged with JSON.stringify (it contains a property object).
            throw error;
        }

        var out=doc.getZip().generate({
            type:"blob",
            mimeType: "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        }); //Output the document using Data-URI
        var fileName = "FBP-"+data.nim+"-"+data.name+".docx";
        saveAs(out,fileName);
    });

  }

</script>
@endsection
