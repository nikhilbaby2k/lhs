<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1 sidebar-r3" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>

    <link href="css/vendor/all.css" rel="stylesheet">

    <link href="css/app.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script type="text/javascript" src="js/core/libraries/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.contextMenu.js" type="text/javascript"></script>
    <script src="js/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/bootbox.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>

</head>

<body>

<div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">

            <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                <!-- notifications -->
                <li class="dropdown notifications updates">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-primary">4</span>
                    </a>
                    <ul class="dropdown-menu" role="notification">
                        <li class="dropdown-header">Notifications</li>
                        <li class="media">
                            <div class="pull-right">
                                <span class="label label-success">New</span>
                            </div>
                            <div class="media-left">

                            </div>
                            <div class="media-body">
                                <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                                <br>
                                <span class="text-caption text-muted">5 mins ago</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="pull-right">
                                <span class="label label-success">New</span>
                            </div>
                            <div class="media-left">

                            </div>
                            <div class="media-body">
                                <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                                <br>
                                <span class="text-caption text-muted">3 hrs ago</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="media-body">
                                <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                                <p>
                                    <span class="text-caption text-muted">1 day ago</span>
                                </p>
                                <a href="">
                                </a>
                                <a href="">

                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- // END notifications -->
                <!-- User -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user ripple" data-toggle="dropdown" aria-expanded="false"><span class="ink animate" style="height: 104px; width: 104px; top: -18px; left: -22.7969px;"></span>
                        {{$user_name}} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" style="height: auto; display: none; overflow: visible; top: 100%; opacity: 0;">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Purchase History</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#" onclick="logout();">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->

    </div>
</div>
<!-- Wrapper required for sidebar transitions -->
<div class="st-container">

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
        <div data-scrollable>

            <ul class="sidebar-menu sm-icons-right">
                <li><a href="/"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
                <li class="hasSubmenu active">
                    <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Courses</span></a>
                    <ul id="course-menu" class="">
                        @foreach($user_courses as $course_id => $user_courses_item)
                            <li class="hasSubmenu"><a href="#course-menu-{{$course_id}}"><span>{{$user_courses_item['course_name']}}</span></a>
                                <ul id="course-menu-{{$course_id}}" >
                                    @foreach($user_courses_item['subjects'] as $subject_id => $subject_name)
                                        <li onclick="loadSubjectDetails({{$subject_id}});"><a href="#"><span>{{$subject_name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

        </div>
    </div>

    <div class="st-pusher" id="content">
        <div class="st-content" style="margin-left: 150px;">
            Subject Details will be loaded here
        </div>
    </div>



</div>
<!-- /st-container -->


<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script type="text/javascript">
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };

    function logout()
    {
        var input = {
            url: '{{route('logout')}}',
            data: {

            },

            success: function (best_response) {

                window.location = '{{route('login')}}';

            },
            type: 'POST'

        };

        var temp = $.ajax(input);
    }

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            data: {
                '_token': '{{ csrf_token() }}'
            }
        });
    });

    function loadSubjectDetails(subject_id)
    {
        var input = {
            url: '{{route('get_subject_detail')}}',
            data: {
                subject_id: subject_id
            },

            success: function (response) {

                $('#content>.st-content').html(response);

            },
            type: 'POST'

        };

        $.ajax(input);
    }


</script>
<script src="js/vendor/all.js"></script>
<script src="js/app/app.js"></script>

</body>

</html>