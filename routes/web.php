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

//Route::get('/', function () {
//    return view('welcome');
//});
	Route::get ('/','Home\IndexController@index')->name ('home');
	Route ::get ('/user/register', 'User\UserController@register') -> name ('register');
	Route ::post ('/user/register', 'User\UserController@store') -> name ('register');
	Route::get ('/user/reset','User\UserController@passwordreset')->name('user.reset');
	Route ::get ('/user/login', 'User\UserController@login') -> name ('login');
	Route ::post ('/user/login', 'User\UserController@loginform') -> name ('login.form');
	Route::get ('/user/logout','User\UserController@ligout')->name ('user.logout');
	Route::any ('/code/send','Util\CodeController@send')->name ('code.send');
	Route::post ('/user/reset','User\UserController@reststore')->name ('user.store');
	Route::get ('/admin/index','Admin\AdminController@index')->name ('admin.index');
	Route::group(['middleware' => ['adminauth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
		Route::get('index','AdminController@index')->name('index');
		Route::resource('category','CategoryController');
		Route::get ('member','AdminController@find')->name ('member');
	});



	///Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
