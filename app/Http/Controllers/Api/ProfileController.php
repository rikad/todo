<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use JWTAuth;
use DB;
use App\User;
use Validator;

class ProfileController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $data = JWTAuth::parseToken()->authenticate();

            $output['status'] = true;
            $output['data'] = $data;

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return $output;
    }

    public function changePassword(Request $request) {

        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {
            $data = [];

            $user = JWTAuth::parseToken()->authenticate();

            if ($request->password != null) {
                $data['password'] = bcrypt($request->password);

                $user->update($data);
            } else {
                throw new \Exception("Password Kosong");
                
            }

            $output['status'] = true;
            $output['message'] = 'Password Berhasil di Ganti';

        } catch (\Exception $e) {
            $output['message'] = $e->getMessage();
        }

        return $output;

    }

    public function changeProfile(Request $request) {

        $output = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        try {

            $user = JWTAuth::parseToken()->authenticate();

            $validation = Validator::make($request->all(),[ 
                'username' => 'required|unique:users,username,'.$user->id,
                'name' => 'required',
                'password' => 'nullable',
                'email' => 'required|email|unique:users,email,'.$user->id,
            ]);

            if($validation->fails()){
                throw new \Exception($validation->errors());
            }

            $db = User::find($user->id);
            $db->update($request->all());

            $output['status'] = true;
            $output['message'] = 'Berhasil Di Simpan';

        } catch (\Exception $e) {
            $output['message'] = json_decode($e->getMessage());
        }

        return $output;

    }

}
