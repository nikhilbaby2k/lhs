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
        $this->generateSubscriptions();
        $user_id = Session::get('user_details')['user_id'];

        $order_details = \DB::table('order_history')
                            ->where('user_id', $user_id)
                            ->orderBy('order_history_id', 'asc')
                            ->select([
                                'order_history_id',
                                'course_subscription_id',
                                'inserted_time',
                            ])
                            ->get();

        $course_subscription_details = $this->view['feature_detail'];
        $order_data = [];
        foreach ($order_details as $order_detail_item)
        {
            $order_data[] = [
                'order_id' => $order_detail_item->order_history_id,
                'course_name' => $this->view['main_subscriptions'][$order_detail_item->course_subscription_id],
                'course_desc' => $this->view['main_subscriptions'][$order_detail_item->course_subscription_id] . ' Description',
                'cost' => '$' . $course_subscription_details[$order_detail_item->course_subscription_id]['subscription_cost'],
                'time' => date("d M, Y H:i:s", strtotime($order_detail_item->inserted_time) ),
            ];
        }
        $this->view['order_data'] = $order_data;


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

    public function debugInfo()
    {
        $this->init();

        if($this->view['privilege_level'] != 1)
        {
            return view('errors.404');
        }


        $debug_data = \DB::table('debug_info')
                            ->select([
                                'debug_info_id',
                                'debug_type_id',
                                'message',
                                'debug_msg_status',
                                'debug_msg_time',
                            ])
                            ->get();

        $debug_array = [];
        foreach ($debug_data as $debug_data_item)
        {
            $debug_array[] = [
                    'debug_id' => $debug_data_item->debug_info_id,
                    'debug_type' => $this->getDebugTypeName($debug_data_item->debug_type_id),
                    'description' => $debug_data_item->message,
                    'status' => $this->getDebugStats($debug_data_item->debug_msg_status),
                    'time' => $debug_data_item->debug_msg_time,
            ];
        }

        $this->view['debug_info_list'] = $debug_array;


        return view('pages.debug', $this->view);
    }

    protected function getDebugTypeName($debug_type_id)
    {
        switch ($debug_type_id)
        {

            case 1: return '<span class="label label-success">Info</span>';
            case 2: return '<span class="label label-danger">Error</span>';
            case 3: return '<span class="label label-danger">Un Auth</span>';
            default: return 'Unknown';
        }
    }

    protected function getDebugStats($debug_status_id)
    {
        switch ($debug_status_id)
        {
            case 1: return 'New';
            case 2: return 'Read';
            default: return 'Unknown';
        }
    }

    public function getAjaxHtml()
    {
        return view('pages.testAjaxHtml');
    }

    public function checkout($order_id)
    {

        $this->generateSubscriptions();
        //Un available subscription
        if (!isset($this->view['main_subscriptions'][$order_id]))
        {
            return redirect('dashboard');
        }

        $this->view['subscription_cost'] = $this->view['feature_detail'][$order_id]['subscription_cost'];
        $this->view['subscription_name'] = $this->view['main_subscriptions'][$order_id];
        $this->view['order_id'] = $order_id;

        //dd($this->view['feature_detail'][$order_id]['subscription_cost']);

        if (isset($this->view['user_order_history'][$order_id]))
        {
            return redirect('dashboard');
        }

        $this->init();
        return view('pages.checkout', $this->view);
    }

    public function getCourseDetails()
    {
        $user_courses = $this->view['user_order_history'];
        $user_id = \Session::get('user_details')['user_id'];


        $course_details = \DB::table('course_subject_mapping as csm')
            ->join('subject_mapping as sm', 'csm.subject_mapping_id', '=', 'sm.subject_mapping_id')
            ->join('subjects as s', 's.subject_id', '=', 'sm.subject_id')
            ->join('course_category_mapping as ccm', 'ccm.course_category_mapping_id', '=', 'csm.course_category_mapping_id')
            ->join('courses as c', 'c.course_id', '=', 'ccm.course_id')
            ->join('order_history as oh', 'oh.course_subscription_id', '=', 'c.course_id')
            ->where('oh.user_id', $user_id)
            ->select([
                'c.course_id',
                'c.course_name',
                's.subject_id',
                's.subject_name',
            ])
            ->get();

        $user_courses = [];
        foreach ($course_details as $course_detail_item)
        {
            $course_id = $course_detail_item->course_id;
            $subject_id = $course_detail_item->subject_id;

            $user_courses[$course_id]['course_name'] = $course_detail_item->course_name;
            $user_courses[$course_id]['subjects'][$subject_id] = $course_detail_item->subject_name;
        }


        $this->view['user_courses'] = $user_courses;

    }

    public function academicRoot()
    {
        $this->init();
        $this->generateSubscriptions();
        $this->getCourseDetails();
        return view('pages.academic.academic', $this->view);
    }

    public function getSubjectDetail()
    {
        $subject_id = \Request::input('subject_id');

        $subject_details = \DB::table('subject_mapping as sm')
                ->join('topic_mapping as tm', 'tm.topic_mapping_id', '=', 'sm.topic_mapping_id')
                ->join('subjects as s', 's.subject_id', '=', 'sm.subject_id')
                ->join('topics as t', 't.topic_id', '=', 'tm.topic_id')
                ->join('chapters as c', 'c.chapter_id', '=', 'tm.chapter_id')
                ->where('s.subject_id', $subject_id)
                ->select([
                    's.subject_id',
                    's.subject_name',
                    's.subject_detail',

                    't.topic_id',
                    't.topic_name',
                    't.topic_detail',

                    'c.chapter_id',
                    'c.chapter_name',
                    'c.chapter_detail',
                ])
                ->get();


        $subject_data = [];
        foreach ($subject_details as $subject_detail_item)
        {
            $subject_id = $subject_detail_item->subject_id;
            $subject_name = $subject_detail_item->subject_name;

            $topic_id = $subject_detail_item->topic_id;
            $chapter_id = $subject_detail_item->chapter_id;

            $subject_data['subject_name'] = $subject_name;
            $subject_data['topics'][$topic_id] = [ 'topic_name' => $subject_detail_item->topic_name, 'topic_detail' => $subject_detail_item->topic_detail ];

            $subject_data['topics'][$topic_id]['chapters'][$chapter_id] = [ 'chapter_name' => $subject_detail_item->chapter_name, 'chapter_detail' => $subject_detail_item->chapter_detail ];

        }

        return view('pages.academic.subject-info', [ 'subject_details' => $subject_data]);

    }


    public function purchaseCourse()
    {
        $order_id = \Request::input('order_id');
        $user_id = Session::get('user_details')['user_id'];

        if($user_id)
        {
            \DB::table('order_history')
                    ->insert([
                        'user_id' => $user_id,
                        'course_subscription_id' => $order_id,
                    ]);

            return redirect('order-history');
        }

        return 'fail';

    }

}