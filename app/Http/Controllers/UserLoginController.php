<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 03:02 AM
 */

namespace App\Http\Controllers;

use App\User;
use Session;

class UserLoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $user_login_status = Session::has('user_login');

        if (!empty($user_login_status))
        {
            return view('pages.app');
        }

        return redirect('login');
    }

    public function login()
    {
        $username = \Request::input('username');
        $password = \Request::input('password');

        $db_check = \DB::table('users')
                        ->where('email', $username)
                        ->where('password', md5($password))
                        ->first();


        if (!empty($db_check))
        {
            \Session::put('user_login', $username);

            return redirect("");
        }
        else
        {
            return redirect("login");
        }

    }


}