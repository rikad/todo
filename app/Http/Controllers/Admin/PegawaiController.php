<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Pegawai;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;


class PegawaiController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pegawai::select('pegawai.*');
            return Datatables::of($data)->make(true);
        }

        return view('admin.pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.form');
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
            'nip' => 'required|numeric',
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'department' => 'nullable',
            'jabatan' => 'required',
        ]);

        $db = Pegawai::create($request->all());

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('pegawai.index');

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
        $data = Pegawai::find($id);

        return view('admin.pegawai.form')->with(compact('data'));
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
            'nip' => 'required|numeric',
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'department' => 'nullable',
            'jabatan' => 'required',
        ]);

        $db = Pegawai::find($id);
        $db->update($request->all());

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('pegawai.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Pegawai::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Hapus"
        ]);

        return redirect()->route('pegawai.index');
    }
}
