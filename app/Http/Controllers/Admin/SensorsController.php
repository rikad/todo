<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Sensor;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;


class SensorsController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Sensor::select('sensors.*','users.name as user')->join('users','sensors.user_id','users.id');
            return Datatables::of($data)->make(true);
        }

        return view('admin.sensors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sensors.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'nullable|exists:users,id',
            'serial' => 'required|unique:sensors,serial',
            'password' => 'required',
            'type' => 'required',
        ]);

        $db = Sensor::create($request->all());

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('sensors.index');

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
        $data = Sensor::find($id);

        return view('admin.sensors.form')->with(compact('data'));
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
        $this->validate($request, [
            'user_id' => 'nullable|exists:users,id',
            'serial' => 'required|unique:sensors,serial,'.$id,
            'password' => 'required',
            'type' => 'required',
        ]);

        $db = Sensor::find($id);
        $db->update($request->all());

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('sensors.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Sensor::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Hapus"
        ]);

        return redirect()->route('sensors.index');
    }
}
