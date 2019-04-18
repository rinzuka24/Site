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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'Auth\LoginController')->name('login');

Route::resource('admin/product', 'ProductController', [
	'only' => ['create', 'store', 'edit'],
	'middleware' => 'auth'
]);
//xac thuc tai khoan bang mail
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
