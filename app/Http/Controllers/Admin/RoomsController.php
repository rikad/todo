<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use App\AssetDetail;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use DB;


class RoomsController extends \App\Http\Controllers\Controller
{


    private $validationRule = [
                'name' => 'required|unique:rooms,name',
                'code' => 'required|unique:rooms,code',
                'code2' => 'required|unique:rooms,code2',
                'description' => 'required',
                'user_id' => 'required'
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
            $data = Room::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'rooms.*');
            return Datatables::of($data)->make(true);
        }

        return view('rooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.form');
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
        $db = Room::create($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data = Room::find($id);
        $user = User::find($data->user_id);
        $data['handler'] = $user->name;

        $detail = AssetDetail::select('assets.name','asset_details.*',DB::raw('IF(asset_details.condition=0 ,"Baik",IF(asset_details.condition=1,"Rusak Ringan","Rusak Berat")) AS conditionText'))
                    ->join('assets','assets.id','asset_details.asset_id')
                    ->where('room_id',$id)->get();

        $output = ['data'=>$data,'detail'=>$detail];

        //response section
        if ($request->ajax()) {
            DB::statement(DB::raw('set @rownum=0'));

            $detail = AssetDetail::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'assets.name','asset_details.*',DB::raw('IF(asset_details.condition=0 ,"Baik",IF(asset_details.condition=1,"Rusak Ringan","Rusak Berat")) AS conditionText'))
                    ->join('assets','assets.id','asset_details.asset_id')
                    ->where('room_id',$id);

            return Datatables::of($detail)->make(true);
        }

        if ($request->input('print')=='true') {
            $path = public_path() . DIRECTORY_SEPARATOR . 'doc' . DIRECTORY_SEPARATOR;
            $outputPath = $path . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . $data->name . Date('d-m-Y') . '.xlsx';

            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load($path . 'roomsReport.xlsx');

            $spreadsheet->getActiveSheet()->setCellValue('C6', ': '.$data->code);
            $spreadsheet->getActiveSheet()->setCellValue('C7', ': '.$data->name);
            $spreadsheet->getActiveSheet()->setCellValue('C8', ': 13');
            $spreadsheet->getActiveSheet()->setCellValue('C9', ': 13');

            $i = 13;
            $condition = ['B','RR','RB'];
            foreach ($detail as $v) {
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $v->name);
                $spreadsheet->getActiveSheet()->setCellValue('D'.$i, $v->type);
                $spreadsheet->getActiveSheet()->setCellValue('E'.$i, $v->serial);
                $spreadsheet->getActiveSheet()->setCellValue('F'.$i, $v->year);
                $spreadsheet->getActiveSheet()->setCellValue('G'.$i, $condition[$v->condition]);
                $spreadsheet->getActiveSheet()->setCellValue('H'.$i, $v->sourcefund);

                $i++;
            }

            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save($outputPath);

            return response()->download($outputPath)->deleteFileAfterSend(true);
        }

        return view('rooms.show',$output);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Room::find($id);

        return view('rooms.form')->with(compact('data'));
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
        $this->validationRule['code'] = $this->validationRule['code'].','.$id; //exception unique rule for name
        $this->validationRule['code2'] = $this->validationRule['code2'].','.$id; //exception unique rule for name
        $this->validate($request, $this->validationRule);

        $data = $request->all();

        $db = Room::find($id);

        $db->update($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Room::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"danger",
            "message"=>"Berhasil Di Hapus"
        ]);

        return 'ok';
    }

}
