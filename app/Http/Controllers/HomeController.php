<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ActivePlant;
use App\Sensor;
use App\LogPower;
use App\LogPlant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->hasRole('admin')) {
            return view('admin/home');
        } else {
            $data = $this->users();

            return view('users/home',['data' => $data]);
        }
    }

    public function users() { 

        $main = ActivePlant::where('activeplants.user_id',Auth::id())->get();

        return $main;
    }
}
