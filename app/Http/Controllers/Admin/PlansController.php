<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Plan;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use DB;


class PlansController extends \App\Http\Controllers\Controller
{


    private $validationRule = [
                'data' => 'required|json',
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
            $data = Plan::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'plans.*');
            return Datatables::of($data)->make(true);
        }

        $data = Plan::orderBy('id','desc')->first();
        if ($data) {
            $data = json_decode($data->data);
            $barang = json_encode($data->barang);
            $jasa = json_encode($data->jasa);
        } else {
            $barang = null;
            $jasa = null;
        }

        return view('plans.index',['barang' => $barang, 'jasa' => $jasa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();


        try {
            //cek json validasi
            $data['data'] = '{ "barang" : '.json_encode($data['barang']).' ,  "jasa" : '.json_encode($data['jasa']).' }';

        } catch (Exception $e) {
            $this->validate($request, $this->validationRule);
        }

        $db = Plan::create($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('plans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $db = Plan::find($id);
            return $db;
            $db = json_decode($db->data);
            $data['barang'] = json_encode($db->barang);
            $data['jasa'] = json_encode($db->jasa);
        } catch (\Exception $e) {
            return response()->view('errors.403',"Data Tidak Di Temukan",500);
        }

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Plan::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"danger",
            "message"=>"Berhasil Di Hapus"
        ]);

        return 'ok';
    }

}
