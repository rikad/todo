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
use Illuminate\Support\Facades\Session;

class PlantController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (! ActivePlant::where('user_id',Auth::id())->first()) {
            return $this->create();
        }

        return view('users.plant.index');
    }

    public function data($menu,$id)
    {
        if ($menu == 'plantbyid') {
            $data = Plant::find($id);
        }
        elseif ('activeplant') {
            $data = ActivePlant::select('log_plants.*','activeplants.*','sensors.type')
                        ->join('sensors','activeplants.sensor_id','sensors.id')
                        ->leftJoin('log_plants','log_plants.sensor_id','activeplants.sensor_id')
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
        return view('users.form');
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
            'sensor_id' => 'required|exists:sensors,id',
            'plant_id' => 'required|exists:plants,id',
            'name' => 'required',
            'city' => 'required',
            'area' => 'nullable|numeric',
            'capground' => 'nullable|numeric',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        $db = ActivePlant::create($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('plant.index');
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
        $data = ActivePlant::find($id);

        return view('users.form')->with(compact('data'));
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
            'sensor_id' => 'required|exists:sensors,id',
            'plant_id' => 'required|exists:plants,id',
            'name' => 'required',
            'city' => 'required',
            'area' => 'nullable|numeric',
            'capground' => 'nullable|numeric',
        ]);


        $db = ActivePlant::find($id);
        $db->update($request->all());

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('plant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = ActivePlant::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Hapus"
        ]);

        return redirect()->route('plant.index');
    }
}
