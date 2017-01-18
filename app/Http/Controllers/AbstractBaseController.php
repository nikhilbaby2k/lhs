<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 09:02 PM
 */

namespace App\Http\Controllers;


class AbstractBaseController extends Controller
{

    protected $view = [];

    public function __construct()
    {
        $this->getNavList();
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