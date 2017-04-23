@extends('pages.common-process')

@section('page-header')
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-sbold">Cart</h3>
            <h4 class="">Page Sub Title Goes Here</h4>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="#">Shop</a>
            </li>
            <li>/</li>
            <li>
                <a href="shop-cart.html">Shopping Cart</a>
            </li>
            <li>/</li>
            <li class="c-state_active">Lets Home Study Components</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="c-shop-cart-page-1">
            <div class="row c-cart-table-title">
                <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">S.No</h3>
                </div>
                <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Price</h3>
                </div>
                {{--<div class="col-md-1 c-cart-total">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
                </div>--}}
                <div class="col-md-1 c-cart-remove"></div>
            </div>
            <!-- BEGIN: SHOPPING CART ITEM ROW -->

            <?php
            $total_cost = 0;
            ?>

            @foreach($cart_list as $sl_no => $cart_item)
            <div class="row c-cart-table-row">
                <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                    <p>{{$sl_no + 1 }}</p>
                </div>
                <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                    <h3>
                        <a href="{{route('cart_product_detail', [ 'course_subscription_id' => $cart_item['product_id'] ])}}" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{$cart_item['product_name']}}</a>
                    </h3>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                    <p class="c-cart-price c-font-bold">${{$cart_item['product_cost']}}</p>
                </div>
                {{--<div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
                    <p class="c-cart-price c-font-bold">$TOTAL</p>
                </div>--}}
                <div class="col-md-1 col-sm-12 c-cart-remove" onclick="removeFromCart({{$cart_item['product_id']}}, this)" style="color: red;">
                    <a href="#" class="c-theme-link c-cart-remove-desktop">×</a>
                </div>
            </div>

            <?php
            $total_cost += $cart_item['product_cost'];
            ?>
            @endforeach
            <!-- END: SHOPPING CART ITEM ROW -->
            <!-- BEGIN: SHOPPING CART ITEM ROW -->

            <!-- END: SHOPPING CART ITEM ROW -->
            <!-- BEGIN: SUBTOTAL ITEM ROW -->
            <div class="row">
                <div class="c-cart-subtotal-row c-margin-t-20">
                    <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Subtotal</h3>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-bold c-font-16">${{$total_cost}}</h3>
                    </div>
                </div>
            </div>
            <!-- END: SUBTOTAL ITEM ROW -->
            <!-- BEGIN: SUBTOTAL ITEM ROW -->
            <div class="row">
                <div class="c-cart-subtotal-row">
                    <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Shipping Fee</h3>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-bold c-font-16">$0.0</h3>
                    </div>
                </div>
            </div>
            <!-- END: SUBTOTAL ITEM ROW -->
            <!-- BEGIN: SUBTOTAL ITEM ROW -->
            <div class="row">
                <div class="c-cart-subtotal-row">
                    <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand Total</h3>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                        <h3 class="c-font-bold c-font-16">${{$total_cost}}</h3>
                    </div>
                </div>
            </div>
            <!-- END: SUBTOTAL ITEM ROW -->
            <div class="c-cart-buttons">
                <a href="home-page#purchase-section" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Continue Shopping</a>
                <a href="{{route('checkout', [ 'order_id' => 'complete' ])}}" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
            </div>
        </div>
    </div>


@endsection

@section('extra-pre-footer-content')
    <div class="c-content-box c-size-md c-theme-bg">
        <div class="container">
            <div class="c-content-step-3 c-font-white">
                <div class="row">
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-truck"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Get Your Licence</h2>
                            <em>activate with your licence key</em>
                        </div>
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-gift"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Scholorships</h2>
                            <em>Amazing opprtunities for Internationl Studies</em>
                        </div>
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-phone"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                            <em>24/7 customer care available</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-specific-scripts')
    <script>

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>'
                }
            });
        });

        function removeFromCart(product_id, element)
        {
            var input = {
                url: '<?php echo e(route('remove_from_cart')); ?>',
                data: {
                    product_id: product_id
                },
                success: function (response) {
                    $(element).parent().remove();
                },
                type: 'POST'

            };

            $.ajax(input);
        }

    </script>
@endsection

