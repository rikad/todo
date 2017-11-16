<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Auth;


class ProfilesController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Auth::User();
        $data['password'] = null;
        return view('profile')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $this->validate($request, [
            'username' => 'required|unique:users,username,'.$id,
            'name' => 'required',
            'password' => 'nullable',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        if ($request->input('password') == null) {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
        }

        $db = User::find($id);
        $db->update($data);

        Session::flash("status", [
            "level"=>"success",
            "message"=>"Berhasil Di Simpan"
        ]);

        return redirect()->back();
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
    }
}
