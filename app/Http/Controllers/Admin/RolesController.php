<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use DB;


class RolesController extends \App\Http\Controllers\Controller
{


    private $validationRule = [
                'name' => 'required|unique:roles,name',
                'display_name' => 'required',
                'description' => 'required'
            ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            DB::statement(DB::raw('set @rownum=0'));
            $data = Role::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'roles.*');
            return Datatables::of($data)->make(true);
        }

        $data = [];
        $data['roles'] = Role::all();
        $data['permissions'] = DB::table('permission_role')
                            ->select(DB::raw('ANY_VALUE(permissions.name) as name,ANY_VALUE(permissions.display_name) as display_name,ANY_VALUE(permissions.description) as description,ANY_VALUE(permissions.id) as id,GROUP_CONCAT(permission_role.role_id) as roles'))
                            ->rightJoin('permissions','permissions.id','permission_role.permission_id')
                            ->groupBy('permission_id')
                            ->get();

        return view('roles.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validationRule);

        $data = $request->all();
        $db = Role::create($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Role::find($id);

        return view('roles.form')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validationRule['name'] = $this->validationRule['name'].','.$id; //exception unique rule for name
        $this->validate($request, $this->validationRule);

        $data = $request->all();

        $db = Role::find($id);

        $db->update($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Role::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"danger",
            "message"=>"Berhasil Di Hapus"
        ]);

        return 'ok';
    }

    public function editRolePermission(Request $request) {
        $data = $request->input('id');
        $data = explode('-',$data);

        $role_id = $data[1];
        $permission_id = $data[2];

        try {

            $role = Role::find($role_id);

            if ($request->input('mode') == 'true') {
                $role->attachPermission($permission_id);
            } else {
                $role->detachPermission($permission_id);                
            }

            return 'ok';

        } catch (\Exception $e) {
            return response(json_encode($e), 500);
        }

    }
}
