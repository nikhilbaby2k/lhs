<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 05-02-2017
 * Time: 04:52 PM
 */

namespace App\Http\Controllers\Data;

use App\Http\Controllers\AbstractBaseController;

class DashboardController extends AbstractBaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function dashboard()
    {
        $this->init();
        $this->generateSubscriptions();

        $cart_list = \Session::has('cart_list') ? \Session::get('cart_list') : [];
        $this->view['cart_list'] = $cart_list;

        return view('pages.dashboard.dashboard-common', $this->view);
    }




}