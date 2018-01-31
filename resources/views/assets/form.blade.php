@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Barang</h2>
  </div>

  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
        <h2>Tambah Barang</h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </a>
              <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);">Action</a></li>
                <li><a href="javascript:void(0);">Another action</a></li>
                <li><a href="javascript:void(0);">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="body">
          <form id="wizard_with_validation" method="POST">
            <h3>Cari Type Barang / Buat Type Barang Baru</h3>
            <fieldset>

              <h4 align="center">Cari Type Barang</h4>
              <div class="form-group form-float">
                <div class="form-line">
                  {!! Form::select('asset_id', App\Asset::pluck('name','id'), null, ['id'=>'asset_id','class' => 'form-control', 'placeholder'=>'Pilih Type Barang','data-live-search'=>'true','onchange'=>'selectMode(this.value)' ] ) !!}
                </div>
              </div>

              <br>
              <br>
              <br>
              <h4 id="newType" align="center">Atau Buat Type Baru</h4>
              <br>
              <br>
              <br>


              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" class="form-control" id="name" name="name" required>
                  <label class="form-label">Name*</label>
                </div>
              </div>
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="type" class="form-control" name="type" id="type" required>
                  <label class="form-label">Merk/Type*</label>
                </div>
              </div>
              <div class="form-group form-float">
                <div class="form-line">
                  <select class="form-control" name="category" id="category" required>
                    <option value="1">Asset</option>
                    <option value="0">Non - Asset</option>
                  </select>
                </div>
              </div>
              <div class="form-group form-float">
                <div class="form-line">
                  <textarea name="spesification" id="spesification" cols="30" rows="3" class="form-control" required></textarea>
                  <label class="form-label">Spesifikasi*</label>
                </div>
              </div>
              <div class="form-group form-float">
                <div class="form-line">
                  <textarea name="description" id="description" cols="30" rows="3" class="form-control no-resize" required></textarea>
                  <label class="form-label">Keterangan*</label>
                </div>
              </div>
            </fieldset>

            <h3>Isi Keterangan Satuan Barang</h3>
            <fieldset>

              <h4 align="center">Masukan Jumlah Barang</h4>

              <div class="form-group form-float">
                <div class="form-line">
                  <input type="jumlah" name="jumlah" class="form-control" onchange="showDetail(this.value)" required>
                  <label class="form-label">Jumlah Barang*</label>
                </div>
              </div>

              <br>
              <br>
              <br>

              <div id="detailBarang" style="display: none">
                <h4 align="center">Keterangan Satuan Barang</h4>
                <br>

                <div id="data" style="width: 100%; height: 40vh; overflow: hidden;"></div>
              </div>

            </fieldset>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Advanced Form Example With Validation -->

</div>
@endsection

@section('css')
<link href="{{ asset('plugins') }}/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

<!-- handsontable Css -->
<link href="{{ asset('plugins') }}/handsontable/handsontable.full.min.css" rel="stylesheet" />

<!-- Sweetalert Css -->
<link href="{{ asset('plugins') }}/sweetalert/sweetalert.css" rel="stylesheet" />

@endsection

@section('js')

  <!-- Jquery Validation Plugin Css -->
  <script src="{{ asset('plugins') }}/jquery-validation/jquery.validate.js"></script>

  <!-- JQuery Steps Plugin Js -->
  <script src="{{ asset('plugins') }}/jquery-steps/jquery.steps.js"></script>

  <!-- HandsonTable Plugin Js -->
  <script src="{{ asset('plugins') }}/handsontable/handsontable.full.min.js"></script>

  <!-- SweetAlert Plugin Js -->
  <script src="{{ asset('plugins') }}/sweetalert/sweetalert.min.js"></script>

  <script>

    var indexPath = '{{ route("assets.index") }}';
    var savePath = '{{ route("assets.store") }}';
    var hot;
    var jumlahDetailBarang = 0;
    var isValidStatus = true;

    function selectMode(id) {

      var newType = document.getElementById('newType');   
      var nameForm = document.getElementById('name');   
      var typeForm = document.getElementById('type');
      var spesificationForm = document.getElementById('spesification');
      var descriptionForm = document.getElementById('description');
      var categoryForm = document.getElementById('category');

      if (id == '') {

        newType.innerHTML = 'Atau Buat Type Baru';

        nameForm.parentElement.classList.remove('focused');
        typeForm.parentElement.classList.remove('focused');
        spesificationForm.parentElement.classList.remove('focused');
        descriptionForm.parentElement.classList.remove('focused');

        nameForm.value = '';
        typeForm.value = '';
        categoryForm.value = 1;
        descriptionForm.value = '';        
        spesificationForm.value = '';        
      } else {

        $.ajax({
          url: indexPath+'/'+id,
          type: 'GET',
          error: function(res) {
            alert('ERROR : ' +res.responseJSON.message);
          },
          success: function(res) {

            newType.innerHTML = 'Hasil Pilihan';

            nameForm.parentElement.classList.add('focused');
            typeForm.parentElement.classList.add('focused');
            categoryForm.parentElement.classList.add('focused');
            descriptionForm.parentElement.classList.add('focused');
            spesificationForm.parentElement.classList.add('focused');

            nameForm.value = res.data.name;
            typeForm.value = res.data.type;
            categoryForm.value = res.data.category;
            descriptionForm.value = res.data.description;
            spesificationForm.value = res.data.spesification;
          }
        });
      }
    }

    function showDetail(length) {

      jumlahDetailBarang = length;

      var data = [];
      var tgl = new Date();

      for(var i=1; i <= length; i++) {
        data.push({
          serial : 0,
          no_po : 0,
          no_bst : 0,
          sourcefund : 'DIPA',
          price : 0,
          year : tgl.getFullYear(),
          condition : 'Baik'
        })
      }

      var container = document.getElementById('data');
      container.innerHTML = '';

      hot = new Handsontable(container, {

        data: data,
        rowHeaders: true,
        colHeaders: true,
        // colWidths: [55, 80, 80, 80, 80, 80, 80],
        // manualColumnResize: true,
        // manualRowResize: true,
        // minSpareRows: 1,
        stretchH: 'all',
        persistentState: true,
        contextMenu: true,
        colHeaders: [
          'Serial/Kode',
          'No. PO',
          'No. BST',
          'Sumber Dana/Rupiah',
          'Harga',
          'Tahun',
          'Kondisi'
        ],
        columns: [
            {
              data: 'serial',
              type: 'numeric',
              width: 100
            },{
              data: 'no_po',
              type: 'numeric',
              width: 100
            },{
              data: 'no_bst',
              type: 'numeric',
              width: 100
            },{
              data: 'sourcefund',
            },{
              data: 'price',
              type: 'numeric',
            },{
              data: 'year',
              type: 'date',
              dateFormat: 'YYYY'
              },{
              data: 'condition',
              type: 'numeric',
              width: 100
            }
        ],
        cells: function(row, column) {
            var cellMeta = {};

            if (column === 6) {
              cellMeta.type = 'dropdown';
              cellMeta.source = [
                'Baik',
                'Rusak Ringan',
                'Rusak Berat',
              ];
            }

            return cellMeta;
        },
        afterValidate: function(isValid, value, row, prop){
            if(!isValid){
              isValidStatus = false;
            }
            else {
              isValidStatus = true;
            }
        }

      });

      document.getElementById('detailBarang').style.display = '';

    }


    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
          saveData();
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });

    function setButtonWavesEffect(event) {
        $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
        $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
    }

    function saveData() {
      if(!isValidStatus) {
        swal("Error !", "Periksa Kembali Data Yang Anda Masukan!", "error");
      }
      else {

         var data = {
          '_token': '{{ csrf_token() }}',
          'asset_id' : document.getElementById('asset_id').value,
          'name' : document.getElementById('name').value,
          'type' : document.getElementById('type').value,
          'description' : document.getElementById('description').value,
          'category' : document.getElementById('category').value,
          'spesification' : document.getElementById('spesification').value,
          'detailBarang' : hot.getData()
        }

        $.ajax({
          url: savePath,
          data: data,
          type: 'POST',
          error: function(res) {
            alert('ERROR : ' +res.responseJSON.message);
          },
          success: function(res) {
              swal({title:"Berhasil !", text:"Telah Di Tambahkan!", type:"success"},function(){
                window.location.href = indexPath;
              });
          }
        }); 

      }
    }

  </script>
@endsection
