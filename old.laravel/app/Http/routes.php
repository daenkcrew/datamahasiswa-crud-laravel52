<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* referensi : http://puguhjayadi.blogspot.co.id/2016/01/laravel-52-login-authentication-dan.html# */

/* | middleware default "WEB" : memeriksa session CSRF, kernel HTTP, dll | */
Route::group(['middleware' => 'web'], function () {
	/* | redirect ke halam login | */
	Route::auth();
});
/* | URL ini hanya bisa diakses oleh user yang sudah login | */
Route::group(['middleware' => ['web','auth']], function ()
{
		Route::get('/home', 'HomeController@index');
		Route::resource('datamahasiswa', 'datamahasiswaController');
		Route::get('/', function(){
			if (Auth::user()->admin == 1){
				return view('admin_home');
			} else {
				return view('user_home');
			}
		});
	});
/* url / admin hanya bisa diakses oleh user yang sudah login sebagai admin | */

Route::get('admin', ['middleware' => ['web','auth','admin'],function () {
	return view('admin/admin_home');
}]);



Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('datamahasiswa', 'datamahasiswaController');
Route::resource('tampildatamahasiswa', 'tampildatamahasiswaController');