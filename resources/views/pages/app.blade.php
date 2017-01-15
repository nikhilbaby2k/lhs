<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
    <script type="text/javascript" src="js/plugins/visualization/echarts/echarts.js"></script>

    <script type="text/javascript" src="js/core/app.js"></script>
    <script type="text/javascript" src="js/charts/echarts/combinations.js"></script>
    <!-- /theme JS files -->


</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li>
                <a class="sidebar-control sidebar-main-toggle hidden-xs">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                <div class="media-annotation">2 hours ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Have Carousel ignore keyboard events
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
            </li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/placeholder.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Victoria Baker</span>
                                <div class="text-size-mini text-muted">
                                    &nbsp;Company name
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->



                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <!-- Main -->

                            <li class="active"><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

                            <li>
                                <a href="pending.html"><i class="icon-copy"></i> <span>Vulnerabilties</span></a>
                                <ul>
                                    <li><a href="pending.html" id="layout1">Pending</a></li>
                                    <li><a href="patched.html" id="layout2">Patched</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-droplet2"></i> <span>Reporting</span></a>
                                <ul>
                                    <li><a href="executive.html">Executive</a></li>
                                    <li><a href="technical.html">Technical</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stack"></i> <span>Schedule</span></a>
                                <ul>

                                    <li><a href="new_assesment.html">Assesment</a></li>
                                    <li><a href="new_project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li><a href="kbase.html"><i class="icon-list-unordered"></i> <span>Knowledge Center</span></a></li>
                            <li><a href="help.html"><i class="icon-list-unordered"></i> <span>Need Help</span></a></li>
                            <!-- /main -->
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>

                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <!-- Dashboard content -->

                <div class="row">
                    <div class="col-lg-3">
                        <!-- Members online -->
                        <div class="panel bg-teal-400">
                            <div class="panel-body">

                                <h3 class="no-margin">3,450</h3>
                                Critical

                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="container-fluid">
                                <div id="today-revenue"></div>
                            </div>
                        </div>
                        <!-- /members online -->

                    </div>
                    <div class="col-lg-3">

                        <!-- Today's revenue -->
                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>

                                <h3 class="no-margin">$18,390</h3>
                                High
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a><a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>

                    <div class="col-lg-3">

                        <!-- Current server load -->
                        <div class="panel bg-pink-400">
                            <div class="panel-body">

                                <h3 class="no-margin">49.4%</h3>
                                Medium
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div id="today-revenue"></div>
                        </div>
                        <!-- /current server load -->

                    </div>

                    <div class="col-lg-3">

                        <!-- Today's revenue -->
                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>

                                <h3 class="no-margin">$18,390</h3>
                                Low

                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a><a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>


                </div>
                <!-- Combination and connection -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Combination and connection</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="connect_pie" _echarts_instance_="1461746268997" style="-webkit-tap-highlight-color: transparent; -webkit-user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);"><div style="position: relative; overflow: hidden; width: 494px; height: 400px;"><div data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none;"></div><canvas width="494" height="400" data-zr-dom-id="0" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="494" height="400" data-zr-dom-id="1" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="494" height="400" data-zr-dom-id="_zrender_hover_" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><div class="echarts-tooltip" style="position: absolute; display: none; border: 0px solid rgb(51, 51, 51); white-space: nowrap; transition: left 0.4s, top 0.4s; border-radius: 4px; color: rgb(255, 255, 255); font-family: Roboto, sans-serif; padding: 8px 12px; left: 174px; top: 138px; background-color: rgba(0, 0, 0, 0.8);">Browser <br>Chrome: 1,548 (60.42%)</div></div></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="connect_column" _echarts_instance_="1461746268998" style="-webkit-tap-highlight-color: transparent; -webkit-user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);"><div style="position: relative; overflow: hidden; width: 494px; height: 400px;"><div data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none;"></div><canvas width="494" height="400" data-zr-dom-id="0" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="494" height="400" data-zr-dom-id="1" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="494" height="400" data-zr-dom-id="_zrender_hover_" style="position: absolute; left: 0px; top: 0px; width: 494px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="timeline timeline-center content-group">
                    <div class="timeline-container">

                        <!-- Sales stats -->
                        <div class="timeline-row post-full">
                            <div class="timeline-icon">
                                <a href="#"><img src="images/placeholder.jpg" alt=""></a>
                            </div>

                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-semibold">Daily statistics</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-history position-left text-success"></i> Updated 3 hours ago</span>

                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" id="daily_stats" _echarts_instance_="1461746818848" style="-webkit-tap-highlight-color: transparent; -webkit-user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);"><div style="position: relative; overflow: hidden; width: 1007px; height: 400px;"><div data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 1007px; height: 400px; -webkit-user-select: none;"></div><canvas width="1007" height="400" data-zr-dom-id="0" style="position: absolute; left: 0px; top: 0px; width: 1007px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="1007" height="400" data-zr-dom-id="1" style="position: absolute; left: 0px; top: 0px; width: 1007px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="1007" height="400" data-zr-dom-id="_zrender_hover_" style="position: absolute; left: 0px; top: 0px; width: 1007px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><div class="echarts-tooltip" style="position: absolute; display: none; border: 0px solid rgb(51, 51, 51); white-space: nowrap; transition: left 0.4s, top 0.4s; border-radius: 4px; color: rgb(255, 255, 255); font-family: Roboto, sans-serif; padding: 8px 12px; left: 243.5px; top: 123px; background-color: rgba(0, 0, 0, 0.8);">04:00<br>Clicks : 27<br>Visits : 33<br>Sales : 7</div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /sales stats -->


                        <!-- Blog post -->
                        <div class="timeline-row">
                            <div class="timeline-icon">
                                <img src="images/placeholder.jpg" alt="">
                            </div>

                            <div class="timeline-time">
                                <a href="#">Margo</a> added a new post
                                <span class="text-muted">49 minutes ago</span>
                            </div>

                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Himalayan sunset</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-arrow-down12"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <a href="#" class="display-block content-group">
                                        <img src="images/cover.jpg" class="img-responsive content-group" alt="">
                                    </a>

                                    <h6 class="content-group">
                                        <i class="icon-comment-discussion position-left"></i>
                                        <a href="#">Jason Ansley</a> commented:
                                    </h6>

                                    <blockquote>
                                        <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                                        <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li><a href="#"><i class="icon-eye4 position-left"></i> 438</a></li>
                                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> 71</a></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li><a href="#">Read post <i class="icon-arrow-right14 position-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /blog post -->


                        <div class="timeline-date text-muted">Yesterday</div>


                        <!-- Messages -->
                        <div class="timeline-row post-even">
                            <div class="timeline-icon">
                                <div class="bg-info-400">
                                    <i class="icon-comment-discussion"></i>
                                </div>
                            </div>

                            <div class="timeline-time">
                                <a href="#">Lucy</a> sent you a message
                                <span class="text-muted">29 minutes ago</span>
                            </div>

                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Conversation with James</h6>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-circle-down2"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <ul class="media-list chat-list content-group">
                                        <li class="media date-step">
                                            <span>Today</span>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="images/placeholder.jpg">
                                                    <img src="images/placeholder.jpg" class="img-circle" alt="">
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                                <span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                            </div>
                                        </li>

                                        <li class="media reversed">
                                            <div class="media-body">
                                                <div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                                <span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                            </div>

                                            <div class="media-right">
                                                <a href="images/placeholder.jpg">
                                                    <img src="images/placeholder.jpg" class="img-circle" alt="">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="images/placeholder.jpg">
                                                    <img src="images/placeholder.jpg" class="img-circle" alt="">
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
                                                <span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                            </div>
                                        </li>

                                        <li class="media reversed">
                                            <div class="media-body">
                                                <div class="media-content"><i class="icon-menu display-block"></i></div>
                                            </div>

                                            <div class="media-right">
                                                <a href="images/placeholder.jpg">
                                                    <img src="images/placeholder.jpg" class="img-circle" alt="">
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                    <textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="icons-list icons-list-extended mt-10">
                                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="col-xs-6 text-right">
                                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /messages -->


                        <!-- Video post -->
                        <div class="timeline-row">
                            <div class="timeline-icon">
                                <img src="images/placeholder.jpg" alt="">
                            </div>

                            <div class="panel border-left-lg border-left-primary">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 class="no-margin-top"><a href="task_manager_detailed.html">#24. Create UI design model</a></h6>
                                            <p class="mb-15">One morning, when Gregor Samsa woke from troubled..</p>

                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
                                        </div>

                                        <div class="col-md-4">
                                            <ul class="list task-details">
                                                <li>28 January, 2015</li>
                                                <li class="dropdown">
                                                    Priority: &nbsp;
                                                    <a href="#" class="label label-primary dropdown-toggle" data-toggle="dropdown">Normal <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right active">
                                                        <li><a href="#"><span class="status-mark position-left bg-danger"></span> Highest priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-info"></span> High priority</a></li>
                                                        <li class="active"><a href="#"><span class="status-mark position-left bg-primary"></span> Normal priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-success"></span> Low priority</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Eternity app</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li>Due: <span class="text-semibold">23 hours</span></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Open <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right active">
                                                <li class="active"><a href="#">Open</a></li>
                                                <li><a href="#">On hold</a></li>
                                                <li><a href="#">Resolved</a></li>
                                                <li><a href="#">Closed</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Dublicate</a></li>
                                                <li><a href="#">Invalid</a></li>
                                                <li><a href="#">Wontfix</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-alarm-add"></i> Check in</a></li>
                                                <li><a href="#"><i class="icon-attachment"></i> Attach screenshot</a></li>
                                                <li><a href="#"><i class="icon-rotate-ccw2"></i> Reassign</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-pencil7"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /video post -->


                    <!-- Task -->
                    <div class="timeline-row post-even">
                        <div class="timeline-icon">
                            <img src="images/placeholder.jpg" alt="">
                        </div>

                        <div class="timeline-time">
                            <a href="#">Sophie</a> added a new task
                            <span class="text-muted">2 hours ago</span>
                        </div>

                        <div class="timeline-content">
                            <div class="panel border-left-lg border-left-primary">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 class="no-margin-top"><a href="task_manager_detailed.html">#24. Create UI design model</a></h6>
                                            <p class="mb-15">One morning, when Gregor Samsa woke from troubled..</p>

                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
                                        </div>

                                        <div class="col-md-4">
                                            <ul class="list task-details">
                                                <li>28 January, 2015</li>
                                                <li class="dropdown">
                                                    Priority: &nbsp;
                                                    <a href="#" class="label label-primary dropdown-toggle" data-toggle="dropdown">Normal <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right active">
                                                        <li><a href="#"><span class="status-mark position-left bg-danger"></span> Highest priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-info"></span> High priority</a></li>
                                                        <li class="active"><a href="#"><span class="status-mark position-left bg-primary"></span> Normal priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-success"></span> Low priority</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Eternity app</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li>Due: <span class="text-semibold">23 hours</span></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Open <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right active">
                                                <li class="active"><a href="#">Open</a></li>
                                                <li><a href="#">On hold</a></li>
                                                <li><a href="#">Resolved</a></li>
                                                <li><a href="#">Closed</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Dublicate</a></li>
                                                <li><a href="#">Invalid</a></li>
                                                <li><a href="#">Wontfix</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-alarm-add"></i> Check in</a></li>
                                                <li><a href="#"><i class="icon-attachment"></i> Attach screenshot</a></li>
                                                <li><a href="#"><i class="icon-rotate-ccw2"></i> Reassign</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-pencil7"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel border-left-lg border-left-danger">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 class="no-margin-top"><a href="task_manager_detailed.html">#23. New icons set for an iOS app</a></h6>
                                            <p class="mb-15">A collection of textile samples lay spread out on the table..</p>

                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#"><img src="images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                            <a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
                                        </div>

                                        <div class="col-md-4">
                                            <ul class="list task-details">
                                                <li>20 January, 2015</li>
                                                <li class="dropdown">
                                                    Priority: &nbsp;
                                                    <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Highest <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right active">
                                                        <li class="active"><a href="#"><span class="status-mark position-left bg-danger"></span> Highest priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-info"></span> High priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-primary"></span> Normal priority</a></li>
                                                        <li><a href="#"><span class="status-mark position-left bg-success"></span> Low priority</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Eternity app</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li>Due: <span class="text-semibold">18 hours</span></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right active">
                                                <li><a href="#">Open</a></li>
                                                <li class="active"><a href="#">On hold</a></li>
                                                <li><a href="#">Resolved</a></li>
                                                <li><a href="#">Closed</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Dublicate</a></li>
                                                <li><a href="#">Invalid</a></li>
                                                <li><a href="#">Wontfix</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-alarm-add"></i> Check in</a></li>
                                                <li><a href="#"><i class="icon-attachment"></i> Attach screenshot</a></li>
                                                <li><a href="#"><i class="icon-rotate-ccw2"></i> Reassign</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-pencil7"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /task -->


                    <div class="timeline-date text-muted">
                        <span class="text-semibold">Monday</span>, Feb 18
                    </div>


                    <!-- Weekly stats -->
                    <div class="timeline-row">
                        <div class="timeline-icon">
                            <div class="bg-warning-400">
                                <i class="icon-cash3"></i>
                            </div>
                        </div>

                        <div class="timeline-time">
                            New report has been generated
                            <span class="text-muted">1 day ago</span>
                        </div>

                        <div class="panel panel-flat timeline-content">
                            <div class="panel-heading">
                                <h6 class="panel-title">Weekly sales statistics</h6>
                                <div class="heading-elements">
											<span class="heading-text">
												<i class="icon-arrow-up22 text-success"></i>
												<span class="text-semibold">23.7%</span>
											</span>

                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="sales" _echarts_instance_="1461746818847" style="-webkit-tap-highlight-color: transparent; -webkit-user-select: none; background-color: rgba(0, 0, 0, 0);"><div style="position: relative; overflow: hidden; width: 439px; height: 400px;"><div data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 439px; height: 400px; -webkit-user-select: none;"></div><canvas width="439" height="400" data-zr-dom-id="0" style="position: absolute; left: 0px; top: 0px; width: 439px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="439" height="400" data-zr-dom-id="1" style="position: absolute; left: 0px; top: 0px; width: 439px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="439" height="400" data-zr-dom-id="_zrender_hover_" style="position: absolute; left: 0px; top: 0px; width: 439px; height: 400px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /weekly stats -->


                    <!-- Invoices -->
                    <div class="timeline-row post-even">
                        <div class="timeline-icon">
                            <div class="bg-success-400">
                                <i class="icon-spinner11"></i>
                            </div>
                        </div>

                        <div class="timeline-time">
                            Invoices from <a href="#">Leonardo</a> and <a href="#">Rebecca</a> have been updated
                            <span class="text-muted">4 hours ago</span>
                        </div>

                        <div class="timeline-content">
                            <div class="panel border-left-lg border-left-danger invoice-grid">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="text-semibold no-margin-top">Leonardo Fellini</h6>
                                            <ul class="list list-unstyled">
                                                <li>Invoice #: &nbsp;0028</li>
                                                <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6 class="text-semibold text-right no-margin-top">$8,750</h6>
                                            <ul class="list list-unstyled text-right">
                                                <li>Method: <span class="text-semibold">SWIFT</span></li>
                                                <li class="dropdown">
                                                    Status: &nbsp;
                                                    <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right active">
                                                        <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                        <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                        <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                        <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li><span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/25</span></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel border-left-lg border-left-success invoice-grid">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="text-semibold no-margin-top">Rebecca Manes</h6>
                                            <ul class="list list-unstyled">
                                                <li>Invoice #: &nbsp;0027</li>
                                                <li>Issued on: <span class="text-semibold">2015/02/24</span></li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6 class="text-semibold text-right no-margin-top">$5,100</h6>
                                            <ul class="list list-unstyled text-right">
                                                <li>Method: <span class="text-semibold">Paypal</span></li>
                                                <li class="dropdown">
                                                    Status: &nbsp;
                                                    <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right active">
                                                        <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                        <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                        <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                        <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <ul>
                                        <li><span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/24</span></li>
                                    </ul>

                                    <ul class="pull-right">
                                        <li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /invoices -->


                    <!-- Schedule -->
                    <div class="timeline-row post-full">
                        <div class="timeline-icon">
                            <img src="images/placeholder.jpg" alt="">
                        </div>

                        <div class="timeline-time">
                            <a href="#">Victoria's</a> schedule
                            <span class="text-muted">1 day ago</span>
                        </div>

                        <div class="panel panel-flat timeline-content">
                            <div class="panel-heading">
                                <h6 class="panel-title">Victoria's schedule</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-arrow-down12"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <div class="schedule fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default fc-state-active">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>Nov 9 — 15, 2014</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-agendaWeek-view fc-agenda-view"><table><thead class="fc-head"><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table><thead><tr><th class="fc-axis fc-widget-header" style="width: 39px;"></th><th class="fc-day-header fc-widget-header fc-sun">Sun 11/9</th><th class="fc-day-header fc-widget-header fc-mon">Mon 11/10</th><th class="fc-day-header fc-widget-header fc-tue">Tue 11/11</th><th class="fc-day-header fc-widget-header fc-wed">Wed 11/12</th><th class="fc-day-header fc-widget-header fc-thu">Thu 11/13</th><th class="fc-day-header fc-widget-header fc-fri">Fri 11/14</th><th class="fc-day-header fc-widget-header fc-sat">Sat 11/15</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="border-right-width: 1px; margin-right: 16px;"><div class="fc-bg"><table><tbody><tr><td class="fc-axis fc-widget-content" style="width: 39px;"><span>all-day</span></td><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><tbody><tr><td class="fc-axis" style="width:39px"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#42A5F5;border-color:#42A5F5"><div class="fc-content"> <span class="fc-title">University</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div></div><hr class="fc-divider fc-widget-header"><div class="fc-time-grid-container fc-scroller" style="height: 655px;"><div class="fc-time-grid"><div class="fc-bg"><table><tbody><tr><td class="fc-axis fc-widget-content" style="width: 39px;"></td><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-slats"><table><tbody><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>12am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>1am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>2am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>3am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>4am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>5am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>6am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>7am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>8am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>9am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>10am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>11am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>12pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>1pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>2pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>3pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>4pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>5pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>6pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>7pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>8pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>9pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>10pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"><span>11pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 39px;"></td><td class="fc-widget-content"></td></tr></tbody></table></div><hr class="fc-divider fc-widget-header" style="display: none;"><div class="fc-content-skeleton"><table><tbody><tr><td class="fc-axis" style="width:39px"></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(141, 110, 99); top: 805px; bottom: -929px; z-index: 1; left: 0%; right: 0%; background-color: rgb(141, 110, 99);"><div class="fc-content"><div class="fc-time" data-start="1:00" data-full="1:00 PM"><span>1:00</span></div><div class="fc-title">Shopping</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td><td><div class="fc-event-container"></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(120, 144, 156); top: 598px; bottom: -722px; z-index: 1; left: 0%; right: 0%; background-color: rgb(120, 144, 156);"><div class="fc-content"><div class="fc-time" data-start="9:30" data-full="9:30 AM"><span>9:30</span></div><div class="fc-title">Meeting</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(38, 166, 154); top: 908px; bottom: -1032px; z-index: 1; left: 0%; right: 0%; background-color: rgb(38, 166, 154);"><div class="fc-content"><div class="fc-time" data-start="2:30" data-full="2:30 PM"><span>2:30</span></div><div class="fc-title">Happy Hour</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(76, 175, 80); top: 185px; bottom: -309px; z-index: 1; left: 0%; right: 0%; background-color: rgb(76, 175, 80);"><div class="fc-content"><div class="fc-time" data-start="3:00" data-full="3:00 AM"><span>3:00</span></div><div class="fc-title">Birthday Party</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(255, 112, 67); top: 1177px; bottom: -1301px; z-index: 1; left: 0%; right: 0%; background-color: rgb(255, 112, 67);"><div class="fc-content"><div class="fc-time" data-start="7:00" data-full="7:00 PM"><span>7:00</span></div><div class="fc-title">Dinner</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(121, 134, 203); top: 536px; bottom: -784px; z-index: 1; left: 0%; right: 0%; background-color: rgb(121, 134, 203);"><div class="fc-content"><div class="fc-time" data-start="8:30" data-full="8:30 AM - 12:30 PM"><span>8:30 - 12:30</span></div><div class="fc-title">Meeting</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(0, 188, 212); top: 991px; bottom: -1115px; z-index: 1; left: 0%; right: 0%; background-color: rgb(0, 188, 212);"><div class="fc-content"><div class="fc-time" data-start="4:00" data-full="4:00 PM"><span>4:00</span></div><div class="fc-title">Shopping</div></div><div class="fc-bg"></div><div class="fc-resizer fc-end-resizer"></div></a></div></td></tr></tbody></table></div></div></div></td></tr></tbody></table></div></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- /schedule -->

                </div>
            </div>

            <!-- /Timeline -->
            <!-- Combination and connection -->



            <!-- /dashboard content -->

            <!-- Footer -->
            <div class="footer text-muted">
                © 2016. <a href="https://skarpsinne.com/turbosec" target="_blank" >TurboSec™</a><a href="https://skarpsinne.com/" target="_blank">by Skarpsinne InfoTech</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
