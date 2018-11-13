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
Route::get ('/index','IndexController@index')->name ('index');
Route::get ('/edu/admin','Edu\ArticleController@index')->name ('edu.admin');

Route::resource ('/edu/photo','Edu\PhotoController');