<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Permission;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use DB;


class PermissionsController extends \App\Http\Controllers\Controller
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
            $data = Permission::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'permissions.*');
            return Datatables::of($data)->make(true);
        }

        return [];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.form-permissions');
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
        $db = Permission::create($data);

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
        $data = Permission::find($id);

        return view('roles.form-permissions')->with(compact('data'));
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

        $db = Permission::find($id);

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
        $db = Permission::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"danger",
            "message"=>"Berhasil Di Hapus"
        ]);

        return 'ok';
    }
}
