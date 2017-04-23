@extends('pages.common-process')

@section('page-header')
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-sbold">Customer Login/Register</h3>
            <h4 class="">Please fill the details </h4>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="#">Shop</a>
            </li>
            <li>/</li>
            <li>
                <a href="shop-customer-account.html">Customer Login/Register</a>
            </li>
            <li>/</li>
            <li class="c-state_active">Jango Components</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="c-shop-login-register-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default c-panel">
                        <div class="panel-body c-panel-body">
                            <form class="c-form-login" method="post" action="login" >
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control c-square c-theme input-lg" id="username" name="username" placeholder="Username">
                                    <span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control c-square c-theme input-lg" id="password" name="password" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
                                </div>
                                <div class="row c-margin-t-40">
                                    <div class="col-xs-8">
                                        <div class="c-checkbox">
                                            <input type="checkbox" id="checkbox1-77" class="c-check">
                                            <label for="checkbox1-77">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Remember me </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <button type="submit" class="pull-right btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default c-panel">
                        <div class="panel-body c-panel-body">
                            <div class="c-content-title-1">
                                <h3 class="c-left">
                                    <i class="icon-user"></i> Don't have an account yet?</h3>
                                <div class="c-line-left c-theme-bg"></div>
                                <p>Join us and enjoy shopping online today.</p>
                            </div>
                            <div class="c-margin-fix">
                                <div class="c-checkbox c-toggle-hide" data-object-selector="c-form-register" data-animation-speed="600">
                                    <input type="checkbox" id="checkbox6-444" class="c-check">
                                    <label for="checkbox6-444">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Register Now! </label>
                                </div>
                            </div>
                            <form class="c-form-register c-margin-t-20">

                                <div class="modal-body">
                                    <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                                    <p>Please fill in below form to create an account with us</p>
                                    <form lpformnum="2" _lpchecked="1">
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
                                        </div>
                                    </form>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="list-unstyled c-bs-grid-small-space">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 c-margin-t-10">
                                <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-twitter">
                                    <i class="fa fa-twitter"></i> Sign in with Twitter </a>
                            </div>
                            <div class="col-md-4 col-sm-4 c-margin-t-10">
                                <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-facebook">
                                    <i class="fa fa-facebook"></i> Sign in with Facebook </a>
                            </div>
                            <div class="col-md-4 col-sm-4 c-margin-t-10">
                                <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-google">
                                    <i class="fa fa-google-plus"></i> Sign in with Google </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
