@extends('pages.common-process')

@section('page-header')
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-sbold">Product Details </h3>
            <h4 class="">all about #{{$subscription_name}}</h4>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="#">Shop</a>
            </li>
            <li>/</li>
            <li>
                <a href="shop-product-details-4.html">Product Details 4</a>
            </li>
            <li>/</li>
            <li class="c-state_active">Lets Home Study Components</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="c-shop-product-details-4">
            <div class="c-product-header">

                <div class="">
                    <a onclick="javascript:window.history.back();">
                        <button class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase c-add-cart" >Go back</button>
                    </a>

                    @if(isset($product_purchase_status) && $product_purchase_status == 'in-cart')
                    <a href=" {{route('checkout', [ 'order_id' => 'complete' ])}}">
                        <button class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase c-add-cart" >Checkout</button>
                    </a>
                    @endif
                </div>
                <br>

                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">#Product Name : {{$subscription_name}} </h3>
                </div>

                <div class="c-product-review">
                    <div class="c-product-rating">
                        <i class="fa fa-star c-font-red"></i>
                        <i class="fa fa-star c-font-red"></i>
                        <i class="fa fa-star c-font-red"></i>
                        <i class="fa fa-star c-font-red"></i>
                        <i class="fa fa-star-half-o c-font-red"></i>
                    </div>
                    <div class="c-product-write-review">
                        <a class="c-font-red" href="#">Write a review</a>
                    </div>
                </div>
            </div>

            <div class="c-product-meta">
                <div class="row c-theme-border">
                    <div class="col-sm-10 col-xs-9">
                        <div class="c-product-short-desc c-bg-grey"> Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore. </div>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <div class="c-product-price c-theme-font">${{$subscription_cost}}</div>
                    </div>
                </div>
                <div class="row">
                    @if(isset($product_purchase_status) && $product_purchase_status == 'none')
                    <div class="col-sm-2 col-sm-offset-1 col-xs-12 pull-right" onclick="addToCart({{$course_subscription_id}}, this)">
                        <button class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase c-add-cart">Add to Cart</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-pre-footer-content')
    <div class="c-content-box c-size-md c-no-padding">
        <div class="c-shop-product-tab-1" role="tabpanel">
            <div class="container">
                <ul class="nav nav-justified" role="tablist">
                    <li role="presentation" class="active">
                        <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Description</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                    <div class="c-product-desc c-center">
                        <div class="container">
                            <!--<img src="assets/base/img/content/shop5/30.png" />-->
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="c-product-desc c-bg-dark">
                        <div class="container">
                            <div class="" "row"="">
                            <div class="col-md-6">
                                <!--<img src="assets/base/img/content/shop5/32.png" />--> </div>
                            <div class="col-md-6">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-white c-font-bold">Incredibly Versatile</h3>
                                    <div class="c-line-left"></div>
                                </div>
                                <p class="c-font-grey"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                <br>
                                <button class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-product-desc c-bg-grey">
                    <div class="container">
                        <div class="" "row"="">
                        <div class="col-md-6">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold c-right">High Quality</h3>
                                <div class="c-line-right"></div>
                            </div>
                            <p class="c-right"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <br>
                            <button class="btn c-float-r c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>
                        </div>
                        <div class="col-md-6">
                            <!--<img src="assets/base/img/content/shop5/31.png" /> --></div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab-2">

            <div class="c-product-desc c-center">
                <div class="container">
                    <!--<img src="assets/base/img/content/shop5/30.png" />-->
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                        lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                        lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab-3">
            <div class="container">
                <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">Reviews for Warm Winter Jacket</h3>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{asset('home/assets/base/img/content/avatars/team1.jpg')}}"> </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Steve</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                </div>
                <div class="row c-margin-t-40">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{asset('home/assets/base/img/content/avatars/team12.jpg')}}"> </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">John</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                </div>
                <div class="row c-margin-t-40">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{asset('home/assets/base/img/content/avatars/team8.jpg')}}"> </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                </div>
                <div class="row c-product-review-input">
                    <h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
                    <p class="c-review-rating-input">Rating:
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <textarea></textarea>
                    <button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
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

        function addToCart(product_id, element)
        {
            var input = {
                url: '<?php echo e(route('add_to_cart')); ?>',
                data: {
                    product_id: product_id
                },
                success: function (response) {
                    $(element).html('<button class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase c-add-cart" href="{{route('cart')}}" disabled="disabled">Added to Cart</button>');
                },
                type: 'POST'

            };

            $.ajax(input);
        }

    </script>
@endsection
