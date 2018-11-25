<?php
	Route::get ('/','Home\IndexController@index')->name ('home');
	Route ::get ('/user/register', 'User\UserController@register') -> name ('register');
	Route ::post ('/user/register', 'User\UserController@store') -> name ('register');
	Route::get ('/user/reset','User\UserController@passwordreset')->name('user.reset');
	Route ::get ('/user/login', 'User\UserController@login') -> name ('login');
	Route ::post ('/user/login', 'User\UserController@loginform') -> name ('login.form');
	Route::get ('/user/logout','User\UserController@ligout')->name ('user.logout');
	Route::any ('/code/send','Util\CodeController@send')->name ('code.send');
	Route::post ('/user/reset','User\UserController@reststore')->name ('user.store');
	//未登录提示
	Route ::get ('user/remind', 'User\UserController@remind') -> name ('user.remind');
//会员路由
Route::group (['prefix'=>'member','namespace'=>'Member', 'as'=>'member.'],function(){
	Route ::resource ('user', 'UserController');
	Route ::get ('fans/{user}', 'UserController@fans') -> name ('fans');
	Route ::get ('followings/{user}', 'UserController@followings') -> name ('followings');
	Route::get ('attention/{user}','UserController@attention')->name ('attention');
});
//工具类
	Route::group (['middleware'=>['uploadcheck'],'prefix'=>'util','namespace'=>'Util','as'=>'util.'],function(){
		Route::any ('uploader','UploadController@uploader')->name ('uploader');
		Route ::any ('fileslists', 'UploadController@filesLists') -> name ('fileslists');
	});


//	Route::get ('/admin/index','Admin\AdminController@index')->name ('admin.index');
	//后台中间件控制的路由
	Route::group(['middleware' => ['adminauth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
		Route::get('index','AdminController@index')->name('index');
		Route::resource('category','CategoryController');
		Route::get ('member','AdminController@find')->name ('member');
	});
//前台文章管理路由zu
	Route::group(['prefix'=>'home','namespace'=>'Home', 'as'=>'home'],function(){
		Route::get ('article/index','ArticleController@index')->name ('.article.index');
		Route::resource ('article','ArticleController');
		Route::resource ('comment','CommentController');
	});


