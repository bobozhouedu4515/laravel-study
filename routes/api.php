<?php

    use Illuminate\Http\Request;

    /*
	|--------------------------------------------------------------------------
	| API Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register API routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| is assigned the "api" middleware group. Enjoy building your API!
	|
	*/
    $api = app (\Dingo\Api\Routing\Router::class);

    Route ::middleware ('auth:api') -> get ('/user', function ( Request $request ) {
        return $request -> user ();
    });
    $api -> version ('v1', [ 'namespace' => '\App\Http\Controllers\Api' ], function ( $api ) {

        $api -> get ('articles', 'ArticleController@articles');

        $api -> get ('categories', 'CategoryController@categories');
        $api->post('login', 'AuthController@login');
        //退出
        $api->get('logout', 'AuthController@logout');
        //我的
        $api->get('me', 'AuthController@me');
        $api->get('pictures','PictureController@pictures');
        $api->get('show/{id}','ArticleController@show');
        $api->get('menuArticle/{id}','ArticleController@menuArticle');


//        return 'v1';
//        $api->get('version',function (){
//    });
    });

    //    $api->version('v2', function ($api)
    //    { $api->get('version', function () {
    //        return 'v2';
    //    });
    //    });

