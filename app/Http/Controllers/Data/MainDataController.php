<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 19-01-2017
 * Time: 11:26 AM
 */

namespace App\Http\Controllers\Data;

use App\Http\Controllers\AbstractBaseController;
use Session;

class MainDataController extends AbstractBaseController
{

    public function __construct()
    {
        parent::__construct();
    }

/*    public function __call($method, $args)
    {
        call_user_func('init');

        call_user_func_array([$this, $method], $args);
    }*/

    public function logout()
    {
        $user_login_status = Session::has('user_login');

        if (!empty($user_login_status))
        {
            Session::clear();
        }

        return redirect('login');
    }

    public function index()
    {
        $this->init();

        return view('pages.app', $this->view);
    }

    public function knowledgeCenter()
    {
        $this->init();
        return view('pages.knowledge-base', $this->view);
    }

    public function help()
    {
        $this->init();
        return view('pages.help', $this->view);
    }

    public function executiveReporting()
    {
        $this->init();
        return view('pages.executive-reporting', $this->view);
    }

    public function technicalReporting()
    {
        $this->init();
        return view('pages.technical-reporting', $this->view);
    }

    public function restPassword()
    {
        $this->init();
        return view('pages.reset-password', $this->view);
    }

    public function orderHistory()
    {
        $this->init();
        return view('pages.order-history', $this->view);
    }

    public function dragDrop()
    {
        $this->init();
        $list_details = \DB::table('drag_drop_lists as ddl')
            ->leftJoin('drag_drop_sub_items as ddsi', 'ddl.drag_drop_list_id', '=', 'ddsi.drag_drop_list_id')
            ->select([
                'ddl.drag_drop_list_id as list_id',
                'ddl.list_name as list_name',

                'ddsi.drag_drop_sub_item_id as sub_item_id',
                'ddsi.sub_list_item_name as sub_item_name',
            ])
            ->orderBy('ddl.drag_drop_list_id', 'asc')
            ->orderBy('ddsi.drag_drop_sub_item_id', 'asc')
            ->get();

        $list_data = [];
        foreach ($list_details as $list_detail_item)
        {
            $list_data[$list_detail_item->list_id]['list_name'] = $list_detail_item->list_name;
            $list_data[$list_detail_item->list_id]['list_id'] = $list_detail_item->list_id;

            if (is_null($list_detail_item->sub_item_id))
            {
                $list_data[$list_detail_item->list_id]['sub_items'] = [];
            }
            else
            {
                $list_data[$list_detail_item->list_id]['sub_items'][] = [ 'sub_item_id' => $list_detail_item->sub_item_id, 'item_name' => $list_detail_item->sub_item_name];
            }
        }

        $this->view['list_details'] = $list_data;

        return view('pages.drag-drop', $this->view);
    }

    public function saveDragDrop()
    {
        $list_layout = json_decode(\Request::input('list_layout'));

        foreach ($list_layout as $list_layout_item)
        {
            \DB::table('drag_drop_sub_items')
                ->where('drag_drop_sub_item_id', $list_layout_item->sub_item_id)
                ->update([
                    'drag_drop_list_id' => $list_layout_item->list_id
                ]);
        }

        return 'Saved';

    }

}