@extends('pages.common-process')

@section('page-header')
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-sbold">Checkout</h3>
            <h4 class="">Please fill up your billing address</h4>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="shop-checkout.html">Purchase</a>
            </li>
            <li>/</li>
            <li class="c-state_active">checkout</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <form class="c-shop-form-1">
            <div class="row">
                <!-- BEGIN: ADDRESS FORM -->
                <div class="col-md-7 c-padding-20">
                    <!-- BEGIN: BILLING ADDRESS -->
                    <h3 class="c-font-bold c-font-uppercase c-font-24">Billing Address</h3>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Country</label>
                            <select class="form-control c-square c-theme">
                                <option value="1">Malaysia</option>
                                <option value="2">Singapore</option>
                                <option value="3">Indonesia</option>
                                <option value="4">Thailand</option>
                                <option value="5">China</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="First Name"> </div>
                                <div class="col-md-6">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Last Name"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Company Name</label>
                            <input type="text" class="form-control c-square c-theme" placeholder="Company Name"> </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control c-square c-theme" placeholder="Street Address"> </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)"> </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Town / City</label>
                            <input type="text" class="form-control c-square c-theme" placeholder="Town / City"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">State / County</label>
                                    <select class="form-control c-square c-theme">
                                        <option value="0">Select an option...</option>
                                        <option value="1">Malaysia</option>
                                        <option value="2">Singapore</option>
                                        <option value="3">Indonesia</option>
                                        <option value="4">Thailand</option>
                                        <option value="5">China</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Postcode / Zip</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Postcode / Zip"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Email Address</label>
                                    <input type="email" class="form-control c-square c-theme" placeholder="Email Address"> </div>
                                <div class="col-md-6">
                                    <label class="control-label">Phone</label>
                                    <input type="tel" class="form-control c-square c-theme" placeholder="Phone"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row c-margin-t-15">
                        <div class="form-group col-md-12">
                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
                                <input type="checkbox" id="checkbox1-77" class="c-check">
                                <label for="checkbox1-77">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Create an account? </label>
                            </div>
                            <p class="help-block">Create an account by entering the information below. If you are a returning customer please login.</p>
                        </div>
                    </div>
                    <div class="row c-account">
                        <div class="form-group col-md-12">
                            <label class="control-label">Account Password</label>
                            <input type="password" class="form-control c-square c-theme" placeholder="Password"> </div>
                    </div>
                    <!-- BILLING ADDRESS -->
                    <!-- SHIPPING ADDRESS -->
                    <h3 class="c-font-bold c-font-uppercase c-font-24">Shipping Address</h3>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="c-checkbox-inline">
                                <div class="c-checkbox c-toggle-hide" data-object-selector="c-shipping-address" data-animation-speed="600">
                                    <input type="checkbox" id="checkbox6-444" class="c-check">
                                    <label for="checkbox6-444">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ship to different address? </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-shipping-address">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Country</label>
                                <select class="form-control c-square c-theme">
                                    <option value="1">Malaysia</option>
                                    <option value="2">Singapore</option>
                                    <option value="3">Indonesia</option>
                                    <option value="4">Thailand</option>
                                    <option value="5">China</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="First Name"> </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Last Name"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Company Name</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="Company Name"> </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="Street Address"> </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)"> </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Town / City</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="Town / City"> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">State / County</label>
                                        <select class="form-control c-square c-theme">
                                            <option value="0">Select an option...</option>
                                            <option value="1">Malaysia</option>
                                            <option value="2">Singapore</option>
                                            <option value="3">Indonesia</option>
                                            <option value="4">Thailand</option>
                                            <option value="5">China</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Apply coupon code</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="coupen code"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Email Address</label>
                                        <input type="email" class="form-control c-square c-theme" placeholder="Email Address"> </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Phone</label>
                                        <input type="tel" class="form-control c-square c-theme" placeholder="Phone"> </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- SHIPPING ADDRESS -->

                </div>
                <!-- END: ADDRESS FORM -->
                <!-- BEGIN: ORDER FORM -->
                <div class="col-md-5">
                    <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                        <h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
                        <ul class="c-order list-unstyled">
                            <li class="row c-margin-b-15">
                                <div class="col-md-6 c-font-20">
                                    <h2>Product</h2>
                                </div>
                                <div class="col-md-6 c-font-20">
                                    <h2>Total</h2>
                                </div>
                            </li>
                            <li class="row c-border-bottom"></li>

                            <?php
                                $total_cost = 0;
                                $products = [];
                            ?>

                            @foreach($cart_list as $sl_no => $cart_item)

                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">
                                    <a href="#" class="c-theme-link">{{$cart_item['product_name']}} x 1</a>
                                </div>
                                <div class="col-md-6 c-font-20">
                                    <p class="">$ {{$cart_item['product_cost']}}</p>
                                </div>
                            </li>

                            <?php
                            $total_cost += $cart_item['product_cost'];
                            $products[] = $cart_item['product_id'];
                            ?>

                            @endforeach

                            {{--<li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">Subtotal</div>
                                <div class="col-md-6 c-font-20">
                                    <p class="">$
                                        <span class="c-subtotal">{{$total_cost}}</span>
                                    </p>
                                </div>
                            </li>--}}
                            <li class="row c-border-top c-margin-b-15"></li>

                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-30">Total</p>
                                </div>
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-bold c-font-30">$
                                        <span class="c-shipping-total">{{$total_cost}}</span>
                                    </p>
                                </div>
                            </li>
                            <div class="col-md-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Apply code</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Apply your coupon code" />
                                        <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Apply</button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <li class="row">
                                <div class="col-md-12">
                                    <div class="c-radio-list">
                                        <div class="c-radio">
                                            <input type="radio" id="radio1" class="c-radio" name="payment" checked="">
                                            <label for="radio1" class="c-font-bold c-font-20">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Direct Bank Transfer </label>
                                            <p class="help-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                        <div class="c-radio">
                                            <input type="radio" id="radio2" class="c-radio" name="payment">
                                            <label for="radio2" class="c-font-bold c-font-20">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Cheque Payment </label>
                                        </div>
                                        <div class="c-radio">
                                            <input type="radio" id="radio3" class="c-radio" name="payment">
                                            <label for="radio3" class="c-font-bold c-font-20">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Paypal </label>
                                            <!-- <img class="img-responsive" width="250" src="../../../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" /> --></div>
                                    </div>
                                </div>
                            </li>
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="form-group col-md-12">
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox1-11" class="c-check">
                                        <label for="checkbox1-11">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> I’ve read and accept the Terms & Conditions </label>
                                    </div>
                                </div>
                            </li>
                            <li class="row">
                                <div class="form-group col-md-12" role="group">
                                    <button type="button" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" onclick="purchaseCourse('{{implode(',', $products)}}')">Submit</button>
                                    <button type="button" href="/dashboard" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: ORDER FORM -->
            </div>
        </form>
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

        function purchaseCourse(order_ids)
        {
            var input = {
                url: '<?php echo e(route('purchase_course')); ?>',
                data: {
                    order_ids: order_ids
                },

                success: function (response) {
                    window.location = '<?php echo e(route('checkout_complete')); ?>'
                },
                type: 'POST'

            };

            $.ajax(input);
        }

    </script>
@endsection


