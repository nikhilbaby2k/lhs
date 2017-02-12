<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::group([ 'namespace' => 'Login', /*'middleware' => 'LoginAuthMiddleware'*/ ], function () {

    Route::get('login', [ 'as' => 'login', 'uses' => 'UserLoginController@loginView' ]);
    Route::post('login', [ 'as' => 'login_post', 'uses' => 'UserLoginController@login' ]);
    Route::post('sign-up', [ 'as' => 'sign_up', 'uses' => 'UserLoginController@signUp' ]);
    Route::get('reset-password', [ 'as' => 'reset-password', 'uses' => 'UserLoginController@restPassword' ]);

});

Route::group([ 'namespace' => 'Data', /*'middleware' => 'LoginAuthMiddleware'*/ ], function () {

    Route::get('home-page', [ 'as' => 'home-page', 'uses' => 'DashboardController@dashboard' ]);

    //Drag-Drop Dynamic Demo
    Route::get('drag-drop-dynamic', [ 'as' => 'drag_drop_dynamic', 'uses' => 'DragDropRequirementController@index' ]);

});



Route::group([ 'namespace' => 'Data', 'middleware' => 'LoginAuthMiddleware' ], function () {

    require "app.main.routes.php";

});