<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;


class UsersController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('users.*');
            return Datatables::of($data)->make(true);
        }

        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.form');
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
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users,email',
            'is_active' => 'required|numeric',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $db = User::create($data);

        $db->attachRole($request->input('role'));

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('user.index');

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
        $data = User::select('users.id','users.name','users.username','users.is_active','users.email','roles.id as role')
                ->join('role_user','role_user.user_id','users.id')
                ->join('roles','role_user.role_id','roles.id')
                ->find($id);

        return view('admin.users.form')->with(compact('data'));
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
            'username' => 'required|unique:users,username,'.$id,
            'name' => 'required',
            'password' => 'nullable',
            'email' => 'required|email|unique:users,email,'.$id,
            'is_active' => 'required|numeric',
        ]);

        if ($request->input('password') == null) {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
        }

        $db = User::select('users.*','roles.id as role')
                ->join('role_user','role_user.user_id','users.id')
                ->join('roles','role_user.role_id','roles.id')
                ->find($id);

        $db->detachRole($db->role);

        $db->update($data);
        $db->attachRole($request->input('role'));

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = User::find($id);
        $db->delete();

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Hapus"
        ]);

        return redirect()->route('user.index');
    }
}
