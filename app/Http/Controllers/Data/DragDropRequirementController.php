<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 12-02-2017
 * Time: 02:59 PM
 */

namespace App\Http\Controllers\Data;

use App\Http\Controllers\AbstractBaseController;

class DragDropRequirementController extends AbstractBaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data_set = [

            [
                'date' => '1 Feb',
                'withdrawal' => 2,
                'balance_enquiry' => 5,
                'decline' => 6,
                'invalid_pin' => 3
            ],
            [
                'date' => '2 Feb',
                'withdrawal' => 5,
                'balance_enquiry' => 9,
                'decline' => 4,
                'invalid_pin' => 7
            ],
            [
                'date' => '3 Feb',
                'withdrawal' => 3,
                'balance_enquiry' => 2,
                'decline' => 0,
                'invalid_pin' => 1
            ]
        ];

        $this->view['data_set'] = $data_set;

        return view('pages.drag-drop-dynamic', $this->view);
    }



}