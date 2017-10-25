<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class GetTokenController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'status' => false,
            'message' => '',
            'data' => ''
        ];

        // grab credentials from the request
        $credentials = $request->only('username', 'password');

        try {

            if (!isset($credentials['username']) || $credentials['username'] == null) {
                $data['message'] = 'username empty';
                return response()->json($data);
            }

            if (!isset($credentials['password']) || $credentials['password'] == null) {
                $data['message'] = 'password empty';
                return response()->json($data);
            }

            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                $data['message'] = 'invalid_credentials';
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            $data['message'] = 'could_not_create_token 500';
        }

        // all good so return the token
        $data['status'] = true;
        $data['data'] = ['token' => $token];
        return response()->json($data);
    }

}
