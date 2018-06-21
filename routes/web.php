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
Auth::routes();

Route::get('/', function () {
	if (Auth::check()) {
	    return view('home');
	}
    return view('auth.login');
})->name('home');


Route::get('assets/downloadDoc','Admin\AssetsController@downloadDoc')->name('form.bebasPinjam');
Route::get('assets/{id}','Admin\AssetsController@show')->name('assets.showPublic');
Route::get('users/{id}','Admin\UsersController@show')->name('users.showPublic');


Route::group(['prefix'=>'settings', 'middleware' => 'auth'], function () {

	Route::post('roles/editRolePermission', 'Admin\RolesController@editRolePermission');

	Route::resource('users', 'Admin\UsersController');
	Route::resource('roles', 'Admin\RolesController');
	Route::resource('permissions', 'Admin\PermissionsController');

	// Route::resource('profiles', 'ProfilesController');
});

Route::group(['prefix'=>'modules', 'middleware' => 'auth'], function () {
	Route::resource('projects', 'Admin\ProjectsController');
	Route::resource('difficulties', 'Admin\DifficultiesController');
	Route::resource('tasks', 'Admin\TasksController');
});




