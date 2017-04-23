<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1 sidebar-r3 js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<head>
    <!-- Vendor Scripts Standalone Libraries -->
    <script src="room/js/vendor/core/all.js"></script>
    <script src="room/js/vendor/core/jquery.js"></script>
    <script src="room/js/vendor/core/bootstrap.js"></script>
    <script src="room/js/vendor/core/breakpoints.js"></script>
    <script src="room/js/vendor/core/jquery.nicescroll.js"></script>
    <script src="room/js/vendor/core/isotope.pkgd.js"></script>
    <script src="room/js/vendor/core/packery-mode.pkgd.js"></script>
    <script src="room/js/vendor/core/jquery.grid-a-licious.js"></script>
    <script src="room/js/vendor/core/jquery.cookie.js"></script>
    <script src="room/js/vendor/core/jquery-ui.custom.js"></script>
    <script src="room/js/vendor/core/jquery.hotkeys.js"></script>
    <script src="room/js/vendor/core/handlebars.js"></script>
    <script src="room/js/vendor/core/jquery.hotkeys.js"></script>
    <script src="room/js/vendor/core/load_image.js"></script>
    <script src="room/js/vendor/core/jquery.debouncedresize.js"></script>
    <script src="room/js/vendor/core/modernizr.js"></script>
    <script src="room/js/vendor/core/velocity.js"></script>
    <script src="room/js/vendor/tables/all.js"></script>
    <script src="room/js/vendor/forms/all.js"></script>
    <script src="room/js/vendor/media/slick.js"></script>
    <script src="room/js/vendor/charts/flot/all.js"></script>
    <script src="room/js/vendor/nestable/jquery.nestable.js"></script>
    <script src="room/js/vendor/countdown/all.js"></script>
    {{--<script src="room/js/vendor/angular/all.js"></script>--}}

    <script src="room/js/vendor/maps/google/jquery-ui-map/addons/markerclusterer.min.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/addons/infobox_packed.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.rdfa.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.overlays.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.microformat.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.microdata.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.services.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.extensions.js"></script>
    <script src="room/js/vendor/maps/google/jquery-ui-map/ui/jquery.ui.map.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>
    <link href="room/css/vendor/all.css" rel="stylesheet">


    
    <link href="room/css/app/app.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/28/10/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/28/10/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/28/10/stats.js"></script>
</head>

<body>


<div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i
                            class="fa fa-ellipsis-v"></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

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
                                    <img src="room/images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
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
                                    <img src="room/images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                                </div>
                                <div class="media-body">
                                    <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a
                                            href="#">post</a>.
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
                                        <img class="width-30 img-circle" src="room/images/people/50/woman-6.jpg"
                                             alt="people">
                                    </a>
                                    <a href="">
                                        <img class="width-30 img-circle" src="room/images/people/50/woman-3.jpg"
                                             alt="people">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- // END notifications -->
                    <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="room/images/people/110/guy-5.jpg" class="img-circle" width="40"> {{$user_name}} <span
                                    class="caret"></span>
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark"
         id="sidebar-menu" data-type="collapse">
        <div data-scrollable="" tabindex="0" style="overflow-y: hidden; outline: none;">

            <ul class="sidebar-menu sm-icons-right">
                <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a>
                </li>
                <li class="hasSubmenu active open">
                    <a href="#course-menu" data-toggle="collapse" aria-expanded="true"><i
                                class="fa fa-mortar-board"></i><span>Intractive Board</span></a>
                    <ul id="course-menu" class="in collapse" aria-expanded="true">
                        <li class="active"><a href="acadamic_room.html"><span>Acadamic Room</span></a></li>
                        <li><a href="Extra-curriculam-room.html"><span>ExtraCurriculamRoom</span></a></li>
                        <li><a href="e_library.html"><span>E-library</span></a></li>
                        <li><a href="student_room.html"><span>Student Room</span></a></li>
                        <li><a href="league_room.html"><span>League Room</span></a></li>
                        <li><a href="progress_report_room.html"><span>ProgressReport Room</span></a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#forum-menu" data-toggle="collapse" class="collapsed" aria-expanded="false"><i
                                class="fa fa-file-text-o"></i><span>Forum</span></a>
                    <ul id="forum-menu" class="collapse" aria-expanded="false">
                        <li><a href="app-forum.html"><span>Forum Home</span></a></li>
                        <li><a href="app-forum-category.html"><span>Forum Category</span></a></li>
                        <li><a href="app-forum-thread.html"><span>Forum Thread</span></a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#account-menu" data-toggle="collapse" class="collapsed" aria-expanded="false"><i
                                class="fa fa-user"></i><span>Account</span></a>
                    <ul id="account-menu main-list" class="collapse" aria-expanded="false">
                        <li><a href="app-student-profile.html">My Profile</a></li>
                        <li><a href="app-student-billing.html">My Wishlist</a></li>
                        <li><a href="login.html">Account Settings</a></li>
                        <li><a href="login.html">Purchase History</a></li>
                        <li><a href="login.html">Help</a></li>
                    </ul>
                </li>
                <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li>
                <li><a href="#" onclick="logout();"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
            </ul>
        </div>
        <div id="ascrail2000" class="nicescroll-rails"
             style="width: 5px; z-index: 2; cursor: default; position: absolute; top: 0px; left: 194px; height: 206px; display: block; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(66, 165, 245); border: 0px; background-clip: padding-box; border-radius: 5px;"></div>
        </div>
    </div>
    <div class="sidebar right sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-skin-white"
         id="sidebar-library">
        <div data-scrollable="" tabindex="1" style="overflow-y: hidden; outline: none;">
            <h4 class="category">Category</h4>
            <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                <li class="list-group-item active"><a href="#"><span class="badge pull-right"></span> POP QUIZ</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span>Formative Exam</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span> Submissive Exam</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span> Mock Exam</a></li>

            </ul>
        </div>
        <div id="ascrail2001" class="nicescroll-rails"
             style="width: 5px; z-index: 2; cursor: default; position: absolute; top: 0px; left: 245px; height: 539px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(66, 165, 245); border: 0px; background-clip: padding-box; border-radius: 5px;"></div>
        </div>
    </div>
    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

        <!-- sidebar effects INSIDE of st-pusher: -->
        <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

        <!-- this is the wrapper for the content -->
        <div class="st-content">

            <!-- extra div for emulating position:fixed of the menu -->
            <div class="st-content-inner padding-none">

                <div class="container-fluid">

                    <div class="page-section-common">
                        @yield('page-header')
                    </div>

                    <div class="page-content-common">
                        @yield('content')
                    </div>
                    <br>

                </div>

            </div>

            <!-- content push wrapper -->
            <div class="st-pusher" id="content">

                <!-- this is the wrapper for the content -->
                <div class="st-content">

                </div>
                <!-- /st-content -->

            </div>
            <!-- /st-pusher -->

            <!-- Footer -->
            <footer class="footer">
                <strong>LetsHomeStudy</strong> v1.1.0 © Copyright 2015
            </footer>
            <!-- // Footer -->

        </div>
        <!-- /st-container -->

        <!-- Inline Script for colors and config objects; used by various external scripts; -->
        <script>
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
        </script>

        <script src="room/js/vendor/all.js"></script>
        <script src="room/js/app/app.js"></script>


    </div>
</div>


<script type="text/javascript">
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

    $(document).ready(function () {
        contextMenuBind();

        $('.drop-down.main-list:visible').focusout(function () {
            console.log(2256);
        })

    });

    function contextMenuBind()
    {
        $(function() {
            $.contextMenu({
                selector: '.drag-drop',
                callback: function(key, options) {

                    var m = "clicked: " + key;
                    bootbox.alert(m);

                },
                items: {
                    "Drag": {name: "Drag", icon: "drag"},
                    "Drop": {name: "Drop", icon: "drop"},
                    "Save": {name: "Save", icon: function(){
                        return 'save save-icon';
                    }}
                }
            });

        });
    }





</script>
@yield('page-specific-scripts')

</body>
</html>
