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

		Route::get('/','Api\ProfileController@index');
		Route::get('/profile','Api\ProfileController@index');
		Route::post('/changeprofile','Api\ProfileController@changeProfile');
		Route::post('/changepassword','Api\ProfileController@changePassword');
		
		Route::get('plants','Api\PlantController@plants');
		Route::get('sensors','Api\PlantController@sensors');

		Route::get('activeplants','Api\PlantController@activeplants');
		Route::post('activeplants','Api\PlantController@addactiveplants');
		Route::delete('activeplants/{id}','Api\PlantController@deleteactiveplants');

		Route::get('logplants','Api\PlantController@logplants');
		Route::get('logwaters','Api\PlantController@logwaters');

		Route::get('schedules','Api\PlantController@schedules');
		Route::post('schedules','Api\PlantController@updateSchedules');

	});
});


