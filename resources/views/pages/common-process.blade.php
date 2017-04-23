<!DOCTYPE html>
<!--
Theme: Lets Home Study - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.5
Version: 1.3.5
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/Lets Home Study-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from themehats.com/themes/Lets Home Study/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:47:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Lets Home Study | Ultimate Multipurpose Bootstrap HTML Theme - Cart</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="{{asset('home/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="{{asset('home/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('home/assets/base/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/base/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/assets/base/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="{{asset('home/assets/base/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">

                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i>
                        <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-active">
                            <a href="home-page" class="c-link dropdown-toggle">Home
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('my_room')}}" class="c-link dropdown-toggle">My Room
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        </li>
                        {{--<li class="c-search-toggler-wrapper">
                            <a href="#" class="c-btn-icon c-search-toggler">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>--}}

                        @if(isset($user_name))
                        <li>
                            <a href="#" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold dropdown-toggle user" data-toggle="dropdown">
                                {{$user_name}}
                            </a>
                            <ul class="dropdown-menu main-list" role="menu">
                                <li><a href="app-student-profile.html">My Profile</a></li>
                                <li><a href="app-student-billing.html">My Wishlist</a></li>
                                <li><a href="login.html">Account Settings</a></li>
                                <li><a href="login.html">Purchase History</a></li>
                                <li><a href="login.html">Help</a></li>
                                <li><a href="#" onclick="logout();">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- BEGIN: CART MENU -->

            <!-- END: CART MENU -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>        </header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p>To recover your password please fill in your email address</p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p>Please fill in below form to create an account with us</p>
                <form>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="username_sign_up" placeholder="Email"> </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="password_1" placeholder="Password"> </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="password_2" placeholder="Password"> </div>
                    <div class="form-group">
                        <button type="submit" onclick="registerNow();" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                <p>Let's make today a great day!</p>
                <form method="post" action="login">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="username" name="username" placeholder="Email"> </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="password" name="password" placeholder="Password"> </div>
                    <div class="form-group">
                        <div class="c-checkbox">
                            <input type="checkbox" id="login-rememberme" class="c-check">
                            <label for="login-rememberme" class="c-font-thin c-font-17">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Remember Me </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                    </div>

                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->
<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
    <div class="c-header">
        <button type="button" class="c-link c-close">
            <i class="icon-login"></i>
        </button>
    </div>
    <div class="c-content">
        <div class="c-section">
            <h3>Theme Colors</h3>
            <div class="c-settings">
                <span class="c-color c-default c-active" data-color="default"></span>
                <span class="c-color c-green1" data-color="green1"></span>
                <span class="c-color c-green2" data-color="green2"></span>
                <span class="c-color c-green3" data-color="green3"></span>
                <span class="c-color c-yellow1" data-color="yellow1"></span>
                <span class="c-color c-yellow2" data-color="yellow2"></span>
                <span class="c-color c-yellow3" data-color="yellow3"></span>
                <span class="c-color c-red1" data-color="red1"></span>
                <span class="c-color c-red2" data-color="red2"></span>
                <span class="c-color c-red3" data-color="red3"></span>
                <span class="c-color c-purple1" data-color="purple1"></span>
                <span class="c-color c-purple2" data-color="purple2"></span>
                <span class="c-color c-purple3" data-color="purple3"></span>
                <span class="c-color c-blue1" data-color="blue1"></span>
                <span class="c-color c-blue2" data-color="blue2"></span>
                <span class="c-color c-blue3" data-color="blue3"></span>
                <span class="c-color c-brown1" data-color="brown1"></span>
                <span class="c-color c-brown2" data-color="brown2"></span>
                <span class="c-color c-brown3" data-color="brown3"></span>
                <span class="c-color c-dark1" data-color="dark1"></span>
                <span class="c-color c-dark2" data-color="dark2"></span>
                <span class="c-color c-dark3" data-color="dark3"></span>
            </div>
        </div>
        <div class="c-section">
            <h3>Header Type</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed" />
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid" /> </div>
        </div>
        <div class="c-section">
            <h3>Header Mode</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed" />
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static" /> </div>
        </div>
        <div class="c-section">
            <h3>Mega Menu Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark" />
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
        </div>
        <div class="c-section">
            <h3>Font Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default" />
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
        </div>
    </div>
</nav>
<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">

    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        @yield('page-header')
    </div>

    <div class="c-content-box c-size-md c-bg-white">
        @yield('content')
    </div>

    @yield('extra-pre-footer-content')

</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
    <div class="container">
        <div class="c-prefooter c-bg-white">
            <div class="c-head">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-left">
                            <div class="socicon">
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-right">
                            <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                            <div class="c-icons">
                                <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="Android" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-line"></div>
            <div class="c-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">About Jango</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Delivery</a>
                            </li>
                            <li>
                                <a href="#">Promotions</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                        </ul>
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="#">Clients</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Stats</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-twitter">
                            <a class="twitter-timeline" href="https://twitter.com/themehats" data-theme="dark" data-widget-id="626329365547061249" data-tweet-limit="2" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @themehats...</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-address c-font-16"> 7, Jalan Sri Klebang 17, Bandar Baru Sri Klebang,
                            <br/> Ipoh, Perak, Malaysia
                            <br/> Phone: 800 123 3456
                            <br/> Fax: 800 123 3456
                            <br/> Email:
                            <a href="mailto:info@jango.com">
                                <span class="c-theme-color">info@jango.com</span>
                            </a>
                            <br/> Skype:
                            <a href="#">
                                <span class="c-theme-color">jango</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="c-line"></div>
            <div class="c-foot">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">About
                                <span class="c-theme-font">JANGO</span>
                            </h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-line-left hide"></div>
                        <form action="#">
                            <div class="input-group input-group-lg c-square">
                                <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Your Email Here" />
                                <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
                                        </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2015 &copy; JANGO
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 c-col">
                    <ul class="list-unstyled list-inline pull-right">
                        <li>
                            <img class="img-responsive" src="{{asset('home/assets/base/img/content/payments/light/1.png')}}" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('home/assets/base/img/content/payments/light/2.png')}}" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('home/assets/base/img/content/payments/light/22.png')}}" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('home/assets/base/img/content/payments/light/5.png')}}" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('home/assets/base/img/content/payments/light/6.png')}}" width="60" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../home/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{asset('home/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="{{asset('home/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="{{asset('home/assets/base/js/components.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/base/js/app.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-64667612-1', 'themehats.com');
    ga('send', 'pageview');
</script>
</body>



<!-- Mirrored from themehats.com/themes/jango/shop-customer-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:47:48 GMT -->
</html>

@yield('page-specific-scripts')

<script type="text/javascript">

    function registerNow() {

        var password_1 = $('#password_1').val();
        var password_2 = $('#password_2').val();
        var user_name = $('#username_sign_up').val();

        if(password_1 == '' || password_2 == '' || user_name == '')
        {
            window.alert('Please fill up the form');
            return;
        }

        if((password_1 != password_2))
        {
            window.alert('Passwords should match');
            return;
        }

        if(user_name == '')
        {
            window.alert('Please give a user-name');
            return;
        }

        var input = {
            url: '{{route('sign_up')}}',
            data: {
                password: password_1,
                username: user_name
            },

            success: function (response) {

                if(response == 'user_exist')
                {
                    $('#sign_up_error').html('User Already exists').show();
                    alert('User Already exists');
                    return;
                }

                if(response == 'user_created')
                {
                    $('#sign_up_error').html('').hide();
                    window.location = '{{route('login')}}';
                }

            },
            type: 'POST'

        };

        var temp = $.ajax(input);
    }

    function logout()
    {
        var input = {
            url: '{{route('logout')}}',
            data: {
                '_token': '{{ csrf_token() }}'
            },

            success: function (best_response) {

                window.location = '{{route('home-page')}}';

            },
            type: 'POST'

        };

        var temp = $.ajax(input);
    }

    $.ajaxSetup({
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        data: {
            '_token': '{{ csrf_token() }}'
        }
    });

</script>

</body>
</html>
