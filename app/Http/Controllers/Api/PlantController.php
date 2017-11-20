<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\ActivePlant;
use App\Plant;
use App\Sensor;
use App\LogPower;
use App\LogPlant;
use App\Schedule;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use JWTAuth;
use DB;
use Validator;

class PlantController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function plants(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {
            $output = Plant::all();
        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }

    public function sensors(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {
            $output = Sensor::all();
        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }

    public function activeplants(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $data = JWTAuth::parseToken()->authenticate();

            $output['status'] = true;
            $output['data'] = ActivePlant::where('user_id',$data->id)->get();

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }

    public function logplants(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            if (!$request->input('sensor_id')) {
                throw new \Exception("Sensor Id Kosong");
            }

            $data = JWTAuth::parseToken()->authenticate();

            $output['status'] = true;
            $output['data'] = LogPlant::where('sensor_id',$request->input('sensor_id'))->orderBy('created_at','desc')->first();

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }

    public function schedules(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $data = JWTAuth::parseToken()->authenticate();

            $output['status'] = true;
            $output['data'] = Schedule::where('user_id',$data->id)->first();
            $output['data']->schedule = json_decode($output['data']->schedule);

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }

    public function updateschedules(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            if (!$request->input('schedule') ) {
                throw new \Exception("schedule kosong");
            }

            $data = JWTAuth::parseToken()->authenticate();

            Schedule::updateOrCreate(['user_id'=>$data->id],['schedule'=>$request->input('schedule')]);

            $output['status'] = true;
            $output['message'] = 'Berhasil Di Simpan';

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
 
    }

    public function logwaters(Request $request)
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            if (!$request->input('mode') || !$request->input('date') || !$request->input('activeplant_id')) {
                throw new \Exception("mode kosong (week/month/year) atau date (yyyymmdd) kosong atau activeplant_id kosong");
            }

            $date = $request->input('date');

            if ($request->input('mode') == 'week') {

                $data['date'] = LogPower::select(DB::raw('ANY_VALUE(DAYNAME(created_at)) AS label'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('WEEK(created_at)'),DB::raw('WEEK('.$date.')'))
                                ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('DAY(created_at)'))
                                ->pluck('label');
                $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('WEEK(created_at)'),DB::raw('WEEK('.$date.')'))
                                ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('DAY(created_at)'))
                                ->pluck('average');
            }
            if ($request->input('mode') == 'month') {

                $data['date'] = LogPower::select(DB::raw('ANY_VALUE(DAY(created_at)) AS label'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('DAY(created_at)'))
                                ->pluck('label');
                $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('DAY(created_at)'))
                                ->pluck('average');

            }
            if ($request->input('mode') == 'year') {

                $data['date'] = LogPower::select(DB::raw('ANY_VALUE(MONTHNAME(created_at)) AS label'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('MONTH(created_at)'))
                                ->pluck('label');
                $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                                ->where('activeplant_id',$request->input('activeplant_id'))
                                ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                                ->groupBy(DB::raw('MONTH(created_at)'))
                                ->pluck('average');
            }

            return $data;
            $output['data'] == $data;
            $output['message'] == true;


        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addactiveplants(Request $request)
    {

        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $validation = Validator::make($request->all(),[ 
                'sensor_id' => 'required|exists:sensors,id',
                'plant_id' => 'required|exists:plants,id',
                'name' => 'required',
                'city' => 'required',
                'area' => 'nullable|numeric',
                'capground' => 'nullable|numeric',
            ]);

            if($validation->fails()){
                throw new \Exception($validation->errors());
            }

            $user = JWTAuth::parseToken()->authenticate();

            $data = $request->all();

            if ($request->input('activeplant_id')) {
                $db = ActivePlant::find($request->input('activeplant_id'));
                $db->update($data);
            } else {
                $data['user_id'] = $user->id;
                $db = ActivePlant::create($data);
            }

            $output['message'] = 'Berhasil Di Simpan';
            $output['status'] = true;

        } catch (\Exception $e) {
            $output['message'] = json_decode($e->getMessage());
        }

        return response()->json($output);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteactiveplants($id)
    {

        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $db = ActivePlant::find($id);
            $db->delete();

            $output['message'] = 'Berhasil Di Hapus';
            $output['status'] = true;

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return response()->json($output);

    }
}
