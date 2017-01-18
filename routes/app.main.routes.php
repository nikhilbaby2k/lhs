<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 01:29 AM
 */


Route::get('/', [ 'as' => '/', 'uses' => 'UserLoginController@index' ]);

Route::get('login', function () {

    if (!empty(Session::has('user_login')))
    {
        return redirect('/');
    }

    return view('pages.login');
});

Route::post('login', [ 'as' => 'login', 'uses' => 'UserLoginController@login' ]);


Route::post('logout', [ 'as' => 'logout', 'uses' => function () {

    $user_login_status = Session::has('user_login');

    if (!empty($user_login_status))
    {
        Session::clear();
    }

    return redirect('login');

}]);

Route::get('knowledge-center', [ 'as' => 'knowledge-center', 'uses' => 'UserLoginController@knowledgeCenter' ]);
Route::get('help', [ 'as' => 'help', 'uses' => 'UserLoginController@help' ]);

Route::get('reporting-executive', [ 'as' => 'reporting-executive', 'uses' => 'UserLoginController@executiveReporting' ]);
Route::get('reporting-technical', [ 'as' => 'reporting-technical', 'uses' => 'UserLoginController@technicalReporting' ]);
Route::get('order-history', [ 'as' => 'order-history', 'uses' => 'UserLoginController@orderHistory' ]);

Route::get('reset-password', [ 'as' => 'reset-password', 'uses' => 'UserLoginController@restPassword' ]);

Route::get('drag-drop', [ 'as' => 'drag-drop', 'uses' => 'UserLoginController@dragDrop' ]);
Route::post('save-drag-drop-list', [ 'as' => 'save_drag_drop_list', 'uses' => 'UserLoginController@saveDragDrop' ]);


