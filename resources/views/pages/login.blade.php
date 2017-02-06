<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LHS</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="js/core/app.js"></script>
    <script type="text/javascript" src="js/pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Advanced login -->
                <div id="login_container">
                <form method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
                            @if(isset($error))
                                <small style="color: red; margin-bottom: 15px;">{{$error}}</small>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="username" name="username" type="text" class="form-control" placeholder="Email">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input id="remember_me" name="remember_me" type="checkbox" class="styled" checked="checked">
                                        Remember
                                    </label>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="reset-password">Forgot password?</a>
                                </div>
                                <div class="col-sm-12" style="margin-top: 2em">
                                    <a onclick="$('#login_container').hide();$('#register').show();">Don't Have an account. Click here to Sign Up</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-circle-right2 position-right"></i></button>
                        </div>
                        <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </div>
                </form>
                </div>
                <div id="register" style="display: none">
                <form method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <h5 class="content-group-lg">Sign up for free<small class="display-block">Enter your credentials</small></h5>
                            <small style="color: red; margin-bottom: 15px; display: none;" id="sign_up_error"></small>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="username_sign_up" name="username_sign_up" type="email" class="form-control" placeholder="Email">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="password_1" name="password_1" type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="password_2" name="password_2" type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group">
                            <button onclick="registerNow();" type="button" class="btn bg-blue btn-block">Register <i class="icon-circle-right2 position-right"></i></button>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-12" >
                                    <a {{--style="color: blue; cursor: pointer; border: dotted; border-radius: 1px;"--}}  onclick="$('#login_container').show();$('#register').hide();">Already Have an account. Click here to Log In</a>
                                </div>
                            </div>
                        </div>

                        <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </div>
                </form>
                </div>
                <!-- /advanced login -->


                <!-- Footer -->
                <div class="footer text-white">&copy; 2016. <a href="https://skarpsinne.com/turbosec" target="_blank" class="text-white">TurboSec™</a> <a href="https://skarpsinne.com/" target="_blank" class="text-white">by Skarpsinne InfoTech</a></div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

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
