<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 01:29 AM
 */

Route::get('/', function () {
    return view('pages.app');
});

Route::get('/login', function () {
    return view('pages.login');
});