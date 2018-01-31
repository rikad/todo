@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Mahasiswa</h2>
  </div>

  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
        <h2>Tambah Mahasiswa</h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li onclick="saveData()"><a href="javascript:void(0);">Save</a></li>
                <li><a href="">Reset</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="body">

          <div>
            <br>

            <div id="data" style="width: 100%; height: 40vh; overflow: hidden;"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- #END# Advanced Form Example With Validation -->

</div>
@endsection

@section('css')

<!-- handsontable Css -->
<link href="{{ asset('plugins') }}/handsontable/handsontable.full.min.css" rel="stylesheet" />

<!-- Sweetalert Css -->
<link href="{{ asset('plugins') }}/sweetalert/sweetalert.css" rel="stylesheet" />

@endsection

@section('js')


  <!-- HandsonTable Plugin Js -->
  <script src="{{ asset('plugins') }}/handsontable/handsontable.full.min.js"></script>

  <!-- SweetAlert Plugin Js -->
  <script src="{{ asset('plugins') }}/sweetalert/sweetalert.min.js"></script>

  <script>

    var indexPath = '{{ route("mahasiswa") }}';
    var savePath = '{{ route("users.store") }}';
    var isValidStatus = true;

	var data = [
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
		{ nim: '', name: '', email: '', address: '', phone: '', wali: '', pembimbing1: '', pembimbing2:'',plab:'',lab:'',wisuda:''},
	];

      var container = document.getElementById('data');
      container.innerHTML = '';

      hot = new Handsontable(container, {

        data: data,
        rowHeaders: true,
        colHeaders: true,
        colWidths: [40, 40, 80, 80, 80, 80, 80, 80, 80, 80],
        manualColumnResize: true,
        // manualRowResize: true,
        // minSpareRows: 1,
        stretchH: 'all',
        persistentState: true,
        contextMenu: true,
        colHeaders: [
          'Nim',
          'Nama',
          'Email',
          'Alamat',
          'Telp',
          'Wali',
          'pembimbing1',
          'pembimbing2',
          'penanggung Jawab Lab',
          'lab',
          'wisuda',
        ],
        columns: [
            {
              data: 'nim',
              type: 'numeric',
              width: 30
            },{
              data: 'nama',
              width: 60
            },{
              data: 'email',
              // type: 'email',
              width: 60
            },{
              data: 'address'
            },{
              data: 'phone',
              type: 'numeric',
              width: 30
            },{
              data: 'wali',
              width: 30
            },{
              data: 'pembimbing1',
              width: 30
            },{
              data: 'pembimbing2',
              width: 30
            },{
              data: 'plab',
              width: 30
            },{
              data: 'lab',
              width: 30
            },{
              data: 'wisuda',
              width: 30
            }
        ],
        afterValidate: function(isValid, value, row, prop){
            if(!isValid){
              isValidStatus = false;
            } else {
              isValidStatus = true;
            }
        }

      });


    function saveData() {

      if(!isValidStatus) {
        swal("Error !", "Periksa Kembali Data Yang Anda Masukan!", "error");
      }
      else {

      	var hotdata = hot.getData();
      	var list = [];

      	for (var i = 0; i < hotdata.length; i++) {
      		if (hotdata[i][0] == '') {
      			continue;
      		}

  			list.push({
  				noid: hotdata[i][0],
  				username: hotdata[i][0],
  				password: hotdata[i][0],
  				name: hotdata[i][1],
  				email: hotdata[i][2],
  				address: hotdata[i][3],
  				phone: hotdata[i][4],
          desc: {
            wali : hotdata[i][5],
            pembimbing1 : hotdata[i][6],
            pembimbing2 : hotdata[i][7],
            plab : hotdata[i][8],
            lab : hotdata[i][9],
            wisuda : hotdata[i][10],
          }
  			});
      	}

        var data = {
          '_token': '{{ csrf_token() }}',
          'import' : JSON.stringify(list),
          'role' : 'mahasiswa'
        }

        $.ajax({
          url: savePath,
          data: data,
          type: 'POST',
          error: function(res) {
            alert('ERROR : ' +res.responseJSON.message);
          },
          success: function(res) {
              swal({title:"Berhasil !", text:"Mahasiswa Telah Di Tambahkan!", type:"success"},function(){
                window.location.href = indexPath;
              });
          }
        }); 

      }
    }

  </script>
@endsection
