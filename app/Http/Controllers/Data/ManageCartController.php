<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 23-04-2017
 * Time: 05:58 PM
 */

namespace App\Http\Controllers\Data;


use App\Http\Controllers\AbstractBaseController;
use Session;

class ManageCartController extends AbstractBaseController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getCartView()
    {
        $this->init();

        $cart_list = Session::has('cart_list') ? Session::get('cart_list') : [];

        $cart_view_list = [];
        $this->generateSubscriptions();
        foreach ($cart_list as $product_id => $product_datum)
        {
            //product un available
            if (!isset($this->view['main_subscriptions'][$product_id]))
            {
                continue;
            }

            //he already bought it.
            if (isset($this->view['user_order_history'][$product_id]))
            {
                $this->removeFromSession('cart_list', $product_id);
                continue;
            }

            $product_detail = [
                'product_id' => $product_id,
                'product_name' => $this->view['main_subscriptions'][$product_id],
                'product_cost' => $this->view['feature_detail'][$product_id]['subscription_cost']
            ];

            $cart_view_list[] = $product_detail;
        }

        $this->view['cart_list'] = $cart_view_list;

        return view('pages.purchase.cart', $this->view);
    }

    public function addToCart()
    {
        $product_id =  \Request::input('product_id');
        if (empty($product_id))
        {
            return '';
        }

        $cart_list_item = [
            'product_id' => $product_id
        ];

        $this->addToSession('cart_list', $cart_list_item, $product_id);

        return 'added to cart';
    }

    public function removeFromCart()
    {
        $product_id =  \Request::input('product_id');
        if (empty($product_id))
        {
            return '';
        }

        $this->removeFromSession('cart_list', $product_id);

        return 'removed from cart';
    }

    public function getCartProductDetail($course_subscription_id)
    {
        if (empty($course_subscription_id))
        {
            return redirect(route('home-page'));
        }

        $this->init();
        $this->generateSubscriptions();
        //Un available subscription
        if (!isset($this->view['main_subscriptions'][$course_subscription_id]))
        {
            return redirect(route('home-page'));
        }

        $this->view['subscription_cost'] = $this->view['feature_detail'][$course_subscription_id]['subscription_cost'];
        $this->view['subscription_name'] = $this->view['main_subscriptions'][$course_subscription_id];
        $this->view['order_id'] = $course_subscription_id;
        $this->view['course_subscription_id'] = $course_subscription_id;

        $cart_list = Session::has('cart_list') ? Session::get('cart_list') : [];

        $this->view['product_purchase_status'] = 'none';
        if (isset($this->view['user_order_history'][$course_subscription_id]))
        {
            $this->view['product_purchase_status'] = 'purchased';
        }
        elseif (isset($cart_list[$course_subscription_id]))
        {
            $this->view['product_purchase_status'] = 'in-cart';
        }

        return view('pages.purchase.product-detail', $this->view);
    }

    public function checkout($order_id)
    {
        $this->init();

        $cart_list = Session::has('cart_list') ? Session::get('cart_list') : [];

        $cart_view_list = [];
        $this->generateSubscriptions();
        foreach ($cart_list as $product_id => $product_datum)
        {
            //product un available
            if (!isset($this->view['main_subscriptions'][$product_id]))
            {
                continue;
            }

            //he already bought it.
            if (isset($this->view['user_order_history'][$product_id]))
            {
                $this->removeFromSession('cart_list', $product_id);
                continue;
            }

            $product_detail = [
                'product_id' => $product_id,
                'product_name' => $this->view['main_subscriptions'][$product_id],
                'product_cost' => $this->view['feature_detail'][$product_id]['subscription_cost']
            ];

            $cart_view_list[] = $product_detail;
        }

        $this->view['cart_list'] = $cart_view_list;

        return view('pages.purchase.checkout', $this->view);
    }

    public function getCheckoutCompleteView()
    {
        $this->init();

        $cart_list = Session::has('cart_list') ? Session::get('cart_list') : [];

        if (empty($cart_list))
        {
            return redirect(route('home-page'));
        }

        $cart_view_list = [];
        $this->generateSubscriptions();
        foreach ($cart_list as $product_id => $product_datum)
        {
            //product un available
            if (!isset($this->view['main_subscriptions'][$product_id]))
            {
                continue;
            }

            $product_detail = [
                'product_id' => $product_id,
                'product_name' => $this->view['main_subscriptions'][$product_id],
                'product_cost' => $this->view['feature_detail'][$product_id]['subscription_cost']
            ];

            $cart_view_list[] = $product_detail;
        }

        $this->view['check_out_list'] = $cart_view_list;

        //Session::remove('cart_list');

        return view('pages.purchase.checkout-complete', $this->view);
    }


    public function purchaseCourse()
    {

        $order_ids = explode(',', \Request::input('order_ids'));
        $user_id = Session::get('user_details')['user_id'];

        $products_bought = [];
        $products_checked_out_view = [];

        if($user_id)
        {
            foreach ($order_ids as $order_id)
            {
                \DB::table('order_history')
                    ->insert([
                        'user_id' => $user_id,
                        'course_subscription_id' => $order_id,
                    ]);
            }



            return redirect(route('checkout_complete'));
        }

        return 'fail';

    }

}