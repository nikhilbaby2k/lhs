<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 09:02 PM
 */

namespace App\Http\Controllers;

use Session;

class AbstractBaseController extends Controller
{

    protected $view = [];

    public function __construct()
    {

    }

    public function init()
    {
        $this->getNavList();
        $this->basic();
    }

    public function basic()
    {
        $session_has_user = Session::has('user_login');
        $session_user_data = Session::get('user_details');

        if($session_has_user)
        {
            $this->view['user_name'] = $session_user_data['name'];
            $this->view['privilege_level'] = $session_user_data['privilege_level'];
        }

    }

    public function generateSubscriptions()
    {
        $subscription_data = \DB::table('course_subscriptions as cs')
            ->join('course_subscription_details as csd', function ($join) {
                return $join->on('cs.course_subscription_id', '=', 'csd.course_subscription_id')
                    ->where('cs.status', '=', 1)
                    ->where('csd.status', '=', 1);
            })
            ->join('course_features as cf', function ($join) {
                return $join->on('csd.course_feature_id', '=', 'cf.course_feature_id')
                    ->where('cf.status', '=', 1);
            })
            ->select([
                'cs.course_subscription_id',
                'csd.course_subscription_details',
                'cf.course_feature_id',
                'cs.cost as subscription_cost',
                'cf.cost as feature_cost',
                'cf.feature_name',
                'cs.subscription_name',
                'csd.quantity as feature_quantity',
            ])
            ->orderBy('cs.course_subscription_id', 'asc')
            ->orderBy('csd.course_subscription_details', 'asc')
            ->orderBy('cf.course_feature_id', 'asc')
            ->get();

        $main_subscriptions = $features = $feature_detail =[];
        foreach ($subscription_data as $data_item)
        {
            $course_subscription_id = $data_item->course_subscription_id;
            $course_feature_id = $data_item->course_feature_id;

            $main_subscriptions[$course_subscription_id] = $data_item->subscription_name;
            $features[$course_feature_id] = $data_item->feature_name;

            $feature_detail[$course_subscription_id][$course_feature_id] =
                [
                    'feature_name' => $data_item->feature_name,
                    'feature_cost' => $data_item->feature_cost,
                    'quantity' => $data_item->feature_quantity,
                ];

            $feature_detail[$course_subscription_id]['subscription_cost'] = $data_item->subscription_cost;
            //$feature_detail[$course_subscription_id]['subscription_name'] = $data_item->subscription_name;

        }

        $this->view['main_subscriptions'] = $main_subscriptions;
        $this->view['features'] = $features;
        $this->view['feature_detail'] = $feature_detail;


        $user_order_history = [];
        if (\Session::has('user_details'))
        {
            $user_id = \Session::get('user_details')['user_id'];

            $user_order_data = \DB::table('order_history')
                ->where('user_id', $user_id)
                ->select([
                    'course_subscription_id',
                    'inserted_time as purchase_time'
                ])
                ->get();


            foreach ($user_order_data as $user_order_data_item)
            {
                $user_order_history[$user_order_data_item->course_subscription_id] = $user_order_data_item->purchase_time;
            }

        }

        $this->view['user_order_history'] = $user_order_history;
    }

    protected function getNavList()
    {
        $nav_list = \DB::table('navigator_list as nl')
            ->leftJoin('navigator_sub_list as nsl', 'nsl.list_id', '=', 'nl.list_id')
            ->orderBy('nl.list_id')
            ->get([
                'nl.list_id',
                'nl.name as main_name',
                'nl.main_page as main_page',
                'nsl.name as sub_name',
                'nsl.main_page as sub_page',
            ]);

        $nav_list_array = [];

        foreach ($nav_list as $nav_list_item)
        {
            $nav_list_array[$nav_list_item->list_id]['main_name'] = $nav_list_item->main_name;
            $nav_list_array[$nav_list_item->list_id]['page_url'] = is_null($nav_list_item->sub_name) ? route($nav_list_item->main_page) : '';

            if (!is_null($nav_list_item->sub_name))
            {
                $nav_list_array[$nav_list_item->list_id]['sub_menu'][] = ['sub_name' => $nav_list_item->sub_name, 'page_url' => route($nav_list_item->sub_page) ];
            }

        }

        $this->view['nav_list'] = $nav_list_array;

        $this->view['nav_icons'] = [
            'Dashboard' => 'icon-home4',
            'Reporting' => 'icon-copy',
            'Order History' => 'icon-droplet2',
            'Knowledge Center' => 'icon-stack',
            'Need Help' => 'icon-list-unordered',
        ];

    }

}