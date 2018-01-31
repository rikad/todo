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

	Route::get('dosen', function () { return view('users.dosen'); })->name('dosen');
	Route::get('dosen/{id}','Admin\UsersController@show')->name('dosen.show');
	Route::get('karyawan', function () { return view('users.karyawan'); })->name('karyawan');
	Route::get('karyawan/{id}','Admin\UsersController@show')->name('karyawan.show');
	
	Route::post('mahasiswa','Admin\UsersController@setFBP');
	Route::get('mahasiswa', function () {
		$fileenv = DotenvEditor::load();
        $saspra = $fileenv->getValue('APP_SASPRA');
        $perpus = $fileenv->getValue('APP_PERPUS');
        $prodi = $fileenv->getValue('APP_PRODI');

        $output = [
            'saspra'=>$saspra,
            'perpus'=>$perpus,
            'prodi'=>$prodi,
        ];

		return view('users.mahasiswa',$output); 
	})->name('mahasiswa');
	
	Route::get('mahasiswa/add', function () { return view('users.addmahasiswa'); })->name('mahasiswa.create');
	Route::get('mahasiswa/{id}','Admin\UsersController@show')->name('mahasiswa.show');

	Route::resource('plans', 'Admin\PlansController');
	Route::resource('rooms', 'Admin\RoomsController');
	Route::resource('assets', 'Admin\AssetsController');
	Route::resource('assetdetails', 'Admin\AssetDetailsController');
});




