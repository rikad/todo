<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\LogPower;
use App\ActivePlant;

class UtilitiesController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($activePlant = $request->input('activeplant')) {
            $activePlant = ActivePlant::find($activePlant);
        } else {
            $activePlant = ActivePlant::first();
        }

        

        if ($request->input('mode') == 'week' && $date = $request->input('date')) {

            $data['date'] = LogPower::select(DB::raw('ANY_VALUE(DAYNAME(created_at)) AS label'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('WEEK(created_at)'),DB::raw('WEEK('.$date.')'))
                            ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('DAY(created_at)'))
                            ->pluck('label');
            $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('WEEK(created_at)'),DB::raw('WEEK('.$date.')'))
                            ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('DAY(created_at)'))
                            ->pluck('average');
            return $data;
        }
        if ($request->input('mode') == 'month' && $date = $request->input('date')) {

            $data['date'] = LogPower::select(DB::raw('ANY_VALUE(DAY(created_at)) AS label'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('DAY(created_at)'))
                            ->pluck('label');
            $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.$date.')'))
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('DAY(created_at)'))
                            ->pluck('average');

            return $data;
        }
        if ($request->input('mode') == 'year' && $date = $request->input('date')) {

            $data['date'] = LogPower::select(DB::raw('ANY_VALUE(MONTHNAME(created_at)) AS label'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('MONTH(created_at)'))
                            ->pluck('label');
            $data['water'] = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                            ->where('activeplant_id',$activePlant->id)
                            ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.$date.')'))
                            ->groupBy(DB::raw('MONTH(created_at)'))
                            ->pluck('average');

            return $data;
        }

        $water = LogPower::select(DB::raw('sum(water)/count(water) as average'))
                        ->where('activeplant_id',$activePlant->id)
                        ->where(DB::raw('DAY(created_at)'),DB::raw('DAY('.date("Ymd").')'))
                        ->where(DB::raw('MONTH(created_at)'),DB::raw('MONTH('.date("Ymd").')'))
                        ->where(DB::raw('YEAR(created_at)'),DB::raw('YEAR('.date("Ymd").')'))
                        ->groupBy(DB::raw('DAY(created_at)'))
                        ->first();

        return view('users.utilities.index',['water'=>$water]);
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
