<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use Auth;
use App\ActivePlant;
use App\Plant;
use App\Sensor;
use App\LogPower;
use App\LogPlant;
use Yajra\DataTables\DataTables;

class PlantController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ActivePlant::select('activeplants.*');
            return Datatables::of($data)->make(true);
        }

        return view('users.plant.index');
    }

    public function data($menu,$id)
    {
        if ($menu == 'plantbyid') {
            $data = Plant::find($id);
        }
        elseif ('activeplant'){
            $data = ActivePlant::join('log_plants','log_plants.sensor_id','activeplants.sensor_id')
                        ->where('activeplants.id',$id)
                        ->orderBy('log_plants.id','desc')
                        ->first();
        }

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
