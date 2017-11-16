<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Plant;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use File;


class PlantsController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Plant::select('plants.*');
            return Datatables::of($data)->make(true);
        }

        return view('admin.plants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plants.form');
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
            'name' => 'required',
            'gambar' => 'image|max:1024'
        ]);

        $db = Plant::create($request->all());

        if ($request->hasFile('gambar')) {
            //ambbil file upload
            $uploaded_gambar = $request->file('gambar');

            //buat file random dan extension
            $filename = $db->id.'.png';

            //menyimpan
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'plants';
            $uploaded_gambar->move($destinationPath, $filename);
        }

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('plants.index');

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
        $data = Plant::find($id);

        return view('admin.plants.form')->with(compact('data'));
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
            'name' => 'required',
            'gambar' => 'image|max:1024'
        ]);

        $db = Plant::find($id);
        $db->update($request->all());

        if ($request->hasFile('gambar')) {
            //ambbil file upload
            $uploaded_gambar = $request->file('gambar');

            //buat file random dan extension
            $filename = $id.'.png';

            //menyimpan
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'plants';
            $uploaded_gambar->move($destinationPath, $filename);
        }

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('plants.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Plant::find($id);

        //hapus cover
        if(file_exists($filepath = public_path().'/img/plants/'.$id.'.png')) {

            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //gagal
            }
        }

        $db->delete();

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Hapus"
        ]);

        return redirect()->route('plants.index');
    }
}
