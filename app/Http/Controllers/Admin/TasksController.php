<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Member;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use DB;


class ProjectsController extends \App\Http\Controllers\Controller
{


    private $validationRule = [
                'name' => 'required|unique:projects,name',
                'code' => 'required|unique:projects,code',
                'code2' => 'required|unique:projects,code2',
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
            $data = Project::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'projects.*','users.name as leader')
                    ->join('users','users.id','projects.leader_id');
            return Datatables::of($data)->make(true);
        }

        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.form');
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
        $db = Project::create($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data = Project::select('projects.*','users.name as leader')
                    ->join('users','users.id','projects.leader_id')->find($id);

        $programmers = Member::where('project_id',$id)->join('users','users.id','members.user_id')->pluck('users.name');

        //response section
        if ($request->ajax()) {
            DB::statement(DB::raw('set @rownum=0'));

            $tasks = TASK::select(DB::raw('@rownum  := @rownum  + 1 AS no'),'tasks.*')
                    ->where('project_id',$id);

            return Datatables::of($detail)->make(true);
        }

        return view('projects.show', ['data'=>$data, 'programmers'=>$programmers->toArray()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Project::find($id);

        return view('projects.form')->with(compact('data'));
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

        $db = Project::find($id);

        $db->update($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Project::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"danger",
            "message"=>"Berhasil Di Hapus"
        ]);

        return 'ok';
    }

}
