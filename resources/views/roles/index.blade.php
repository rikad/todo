@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>Manajemen Roles & Permission</h2>
  </div>

  <!-- Example Tab -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-blue-grey">
          <h2>
            List Roles & Permission
          </h2>
        </div>
        <div class="body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#home" data-toggle="tab">Roles</a></li>
            <li role="presentation"><a href="#permissions" data-toggle="tab">Permission</a></li>
            <li role="presentation"><a href="#messages" data-toggle="tab">Role Assigned</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <table class="table table-hover" id="users-table" width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>

              <div role="tabpanel" class="tab-pane fade in active" id="permissions">
                <table id="permissions-table" class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Permission Name</th>
                      <th>Display Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="messages">

                @if(count($data['permissions']) > 0)
                <table class="table table-hover table-bordered" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>

                      @foreach($data['roles'] as $role)
                      <th>{{ $role->name }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data['permissions'] as $permission)
                    <tr>
                      <td>{{ $permission->name }}</td>
                      @foreach($data['roles'] as $role)
                      <td>
                        <input onchange="rolePermissionChange(this)" type="checkbox" id="check-{{$role->id}}-{{$permission->id}}" @if(in_array($role->id,explode(',',$permission->roles))) checked @endif>
                        <label for="check-{{$role->id}}-{{$permission->id}}"></label>
                      </td>
                      @endforeach
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @else
                <p>Role is Empty</p>
                @endif
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #END# Example Tab -->

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

    var indexPath =  '{{ route("roles.index") }}';
    var addPath =  '{{ route("roles.create",'') }}';
    var editPath = '{{ url("/settings/roles/") }}';
    var deletePath =  '{{ route("roles.destroy",'') }}';

    var addPath2 =  '{{ route("permissions.create",'') }}';
    var editPath2 = '{{ url("/settings/permissions/") }}';
    var deletePath2 =  '{{ route("permissions.destroy",'') }}';

    $(function() {

      function genEditPath(id) {
        return editPath+'/'+id+'/edit';
      }


      $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('roles.index') !!}',
        columns: [
        { data: 'no', name: 'no', searchable: 'false' },
        { data: 'name', name: 'name' },
        { data: 'display_name', name: 'display_name' },
        { data: 'description', name: 'description' },
        { data: 'id', name: 'id', sortable: false,render: function(data) {
          return '<a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-sm">Ubah</button></a> <button onclick="deleteData('+data+',\''+deletePath+'\')" class="btn btn-danger">Hapus</button>';
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

    $(function() {

      function genEditPath(id) {
        return editPath2+'/'+id+'/edit';
      }


      $('#permissions-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('permissions.index') !!}',
        columns: [
        { data: 'no', name: 'no', searchable: 'false'},
        { data: 'name', name: 'name' },
        { data: 'display_name', name: 'display_name' },
        { data: 'description', name: 'description' },
        { data: 'id', name: 'id', sortable: false,render: function(data) {
          return '<a href="'+genEditPath(data)+'"><button class="btn btn-primary btn-sm">Ubah</button></a> <button onclick="deleteData('+data+',\''+deletePath2+'\')" class="btn btn-danger">Hapus</button>';
        }},
        ],
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
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
            window.location.href = addPath2;
          }
        }
        ]
      });
    });

    function deleteData(id,path) {
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
          url: path+'/'+id,
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

    function rolePermissionChange(box) {

      $.ajax({
        url: indexPath+'/editRolePermission',
        data: { '_token': '{{ csrf_token() }}', 'id': box.id, 'mode': box.checked },
        type: 'POST',
        error: function(res) {
          alert('error'+JSON.stringify(res));
        }
        //,
        // success: function(res) {
        //   alert(res)
        // }
      }); 
    }

    setTimeout(function(){
      var permissions = document.getElementById('permissions')
      permissions.classList.remove('in');
      permissions.classList.remove('active');      
    }, 1000);


  </script>
  @endsection
