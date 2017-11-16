<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'settings', 'middleware' => 'auth'], function () {
	Route::resource('profiles', 'ProfilesController');
});

Route::group(['prefix'=>'admin', 'middleware' => ['auth','role:admin'] ], function () {
	Route::resource('user', 'Admin\UsersController');
	Route::resource('pegawai', 'Admin\PegawaiController');
	Route::resource('plants', 'Admin\PlantsController');
	Route::resource('sensors', 'Admin\SensorsController');
});

Route::group(['prefix'=>'user', 'middleware' => ['auth','role:user'] ], function () {

	Route::get('data/{menu}/{id}','Users\PlantController@data');

	Route::resource('plant', 'Users\PlantController');
	Route::resource('schedule', 'Users\ScheduleController');
	Route::resource('utilities', 'Users\UtilitiesController');
});

Route::group(['prefix'=>'api/v1'], function () {

	Route::get('getToken', 'Api\GetTokenController@index')->name('v1.getToken');

	Route::group(['middleware'=>['jwt.auth']], function () {
		Route::resource('riwayat', 'Api\RiwayatController');
		Route::resource('profile', 'Api\ProfileController');
	});
});


