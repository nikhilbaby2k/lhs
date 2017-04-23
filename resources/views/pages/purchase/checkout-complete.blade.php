@extends('pages.common-process')

@section('page-header')
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-sbold">Checkout Complete</h3>
            <h4 class="">Page Sub Title Goes Here</h4>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="shop-checkout-complete.html">Checkout Complete</a>
            </li>
            <li>/</li>
            <li class="c-state_active">Lets Home Study Components</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Checkout Completed</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="c-theme-bg">
                <p class="c-message c-center c-font-white c-font-20 c-font-sbold">
                    <i class="fa fa-check"></i> Thank you. Your order has been received. </p>
            </div>
            <!-- BEGIN: ORDER SUMMARY -->
            <div class="row c-order-summary c-center">
                <ul class="c-list-inline list-inline">
                    <li>
                        <h3>Order Number</h3>
                        <p>#12345</p>
                    </li>
                    <li>
                        <h3>Date Purchased</h3>
                        <p>August 26, 2015</p>
                    </li>
                    <li>
                        <h3>Total Payable</h3>
                        <p>$95.00</p>
                    </li>
                    <li>
                        <h3>Payment Method</h3>
                        <p>Direct Bank Transfer</p>
                    </li>
                </ul>
            </div>
            <!-- END: ORDER SUMMARY -->
            <!-- BEGIN: BANK DETAILS -->
            <div class="c-bank-details c-margin-t-30 c-margin-b-30">
                <p class="c-margin-b-20">Make your payment directly into our account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                <h3 class="c-margin-t-40 c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">OUR BANK DETAILS</h3>
                <h3 class="c-border-bottom">Account Name : &nbsp;
                    <span class="c-font-thin">Themehats</span>
                </h3>
                <ul class="c-list-inline list-inline">
                    <li>
                        <h3>Account Number</h3>
                        <p>12345678901234567</p>
                    </li>
                    <li>
                        <h3>Sort Code</h3>
                        <p>123</p>
                    </li>
                    <li>
                        <h3>Bank</h3>
                        <p>Bank Name</p>
                    </li>
                    <li>
                        <h3>BIC</h3>
                        <p>12345</p>
                    </li>
                </ul>
            </div>
            <!-- END: BANK DETAILS -->
            <!-- BEGIN: ORDER DETAILS -->
            <div class="c-order-details">
                <div class="c-border-bottom hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-3" style="text-align: center;">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Product</h3>
                        </div>
                        <div class="col-md-5" style="text-align: center;">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Description</h3>
                        </div>
                        <div class="col-md-2" style="text-align: right;">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Unit Price</h3>
                        </div>
                    </div>
                </div>

                <?php
                $total_cost = 0;
                ?>

                <!-- BEGIN: PRODUCT ITEM ROW -->
                <div class="c-border-bottom c-row-item">

                    @foreach($check_out_list as $sl_no => $check_out_item)
                    <div class="row">
                        <div class="col-md-3 col-sm-8">
                            <ul class="c-list list-unstyled" style="text-align: center;">
                                <li class="c-margin-b-25" >
                                    <a href="#" class="c-font-bold c-font-22 c-theme-link">{{$sl_no + 1}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <ul class="c-list list-unstyled" style="text-align: center;">
                                <li class="c-margin-b-25">
                                    <a href="{{route('cart_product_detail', [ 'course_subscription_id' => $check_out_item['product_id'] ])}}" class="c-font-bold c-font-22 c-theme-link">{{$check_out_item['product_name']}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2" style="text-align: right;">
                            <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                            <p class="c-font-sbold c-font-uppercase c-font-18">${{$check_out_item['product_cost']}}</p>
                        </div>
                    </div>

                    <?php
                    $total_cost += $check_out_item['product_cost'];
                    ?>

                    @endforeach

                </div>
                <!-- END: PRODUCT ITEM ROW -->
                <!-- BEGIN: PRODUCT ITEM ROW -->

                <!-- END: PRODUCT ITEM ROW -->
                <div class="c-row-item c-row-total c-right">
                    <ul class="c-list list-unstyled">
                        <li>
                            <h3 class="c-font-regular c-font-22">Subtotal : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">${{$total_cost}}</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="c-font-regular c-font-22">Shipping Fee : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">$0.00</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="c-font-regular c-font-22">Grand Total : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">${{$total_cost}}</span>
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: ORDER DETAILS -->
            <!-- BEGIN: CUSTOMER DETAILS -->
            <div class="c-customer-details row" data-auto-height="true">
                <div class="col-md-6 col-sm-6 c-margin-t-20">
                    <div data-height="height" style="height: 164px;">
                        <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Customer Details</h3>
                        <ul class="list-unstyled">
                            <li>Name: John Doe</li>
                            <li>Phone: 800 123 3456</li>
                            <li>Fax: 800 123 3456</li>
                            <li>Email:
                                <a href="mailto:info@Lets Home Study.com" class="c-theme-color">info@Lets Home Study.com</a>
                            </li>
                            <li>Skype:
                                <span class="c-theme-color">Lets Home Study</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 c-margin-t-20">
                    <div data-height="height" style="height: 164px;">
                        <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Billing Address</h3>
                        <ul class="list-unstyled">
                            <li>John Doe</li>
                            <li> 25, Lorem Lis Street, Orange
                                <br> California, US
                                <br> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: CUSTOMER DETAILS -->
        </div>
    </div>
@endsection

@section('extra-pre-footer-content')

@endsection
