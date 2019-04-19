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


//admin user
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//xac thuc tai khoan bang mail
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
//admin 
Route::group(['middleware' => ['web','auth']],function(){
	Route::get('/', function () {
	    return view('welcome');
	});
	Route::get('home',function(){
		if(Auth::user()->admins == 0){
			return view('home');
		}
		else{
			$users['users'] = \App\User::all();
			return view('admin_home',$users);
		}
	});
});


