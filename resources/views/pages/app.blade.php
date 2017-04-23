@extends('pages.common')

@section('page-header')
    <div class="page-section">
        <h1 class="text-display-1 margin-none">Overview</h1>
    </div>
@endsection
@section('content')
    <div class="row" data-toggle="isotope" style="position: relative; height: 619px;">
        <div class="item col-xs-12 col-lg-6" style="position: absolute; top: 0px; left: 0px;">
            <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                    <h4 class="text-headline margin-none">Courses</h4>
                    <p class="text-subhead text-light">Your recent courses</p>
                </div>
                <ul class="list-group">

                    @foreach($user_order_history as $course_id => $course_detail)

                    <li class="list-group-item media v-middle">
                        <div class="media-body">
                            <a href="{{route('cart_product_detail', [ 'course_subscription_id' => $course_id ])}}" class="text-subhead list-group-link">{{$course_detail['course_name']}}</a>
                        </div>
                        <div class="media-right">
                            <div class="progress progress-mini width-100 margin-none">
                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:{{rand(0, 100)}}%;">
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach

                </ul>

            </div>
        </div>
        <div class="item col-xs-12 col-lg-6" style="position: absolute; left: 511px; top: 0px;">
            <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-body">
                    <h4 class="text-headline margin-none">Rewards</h4>
                    <p class="text-subhead text-light">Your latest achievements</p>
                    <div class="icon-block half img-circle bg-purple-300">
                        <i class="fa fa-star text-white"></i>
                    </div>
                    <div class="icon-block half img-circle bg-indigo-300">
                        <i class="fa fa-trophy text-white"></i>
                    </div>
                    <div class="icon-block half img-circle bg-green-300">
                        <i class="fa fa-mortar-board text-white"></i>
                    </div>
                    <div class="icon-block half img-circle bg-orange-300">
                        <i class="fa fa-code-fork text-white"></i>
                    </div>
                    <div class="icon-block half img-circle bg-red-300">
                        <i class="fa fa-diamond text-white"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="item col-xs-12 col-lg-6" style="position: absolute; left: 511px; top: 165px;">
            <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                    <h4 class="text-headline margin-none">Quizzes</h4>
                    <p class="text-subhead text-light">Your recent performance</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item media v-middle">
                        <div class="media-body">
                            <h4 class="text-subhead margin-none">
                                <a href="app-take-quiz.html" class="list-group-link">Title of quiz goes here?</a>
                            </h4>
                            <div class="caption">
                                <span class="text-light">Course:</span>
                                <a href="app-take-course.html">Basics of HTML</a>
                            </div>
                        </div>
                        <div class="media-right text-center">
                            <div class="text-display-1">5.8</div>
                            <span class="caption text-light">Good</span>
                        </div>
                    </li>
                    <li class="list-group-item media v-middle">
                        <div class="media-body">
                            <h4 class="text-subhead margin-none">
                                <a href="app-take-quiz.html" class="list-group-link">Directives &amp; Routing</a>
                            </h4>
                            <div class="caption">
                                <span class="text-light">Course:</span>
                                <a href="app-take-course.html">Angular in Steps</a>
                            </div>
                        </div>
                        <div class="media-right text-center">
                            <div class="text-display-1 text-green-300">9.8</div>
                            <span class="caption text-light">Great</span>
                        </div>
                    </li>
                    <li class="list-group-item media v-middle">
                        <div class="media-body">
                            <h4 class="text-subhead margin-none">
                                <a href="app-take-quiz.html" class="list-group-link">Responsive &amp; Retina</a>
                            </h4>
                            <div class="caption">
                                <span class="text-light">Course:</span>
                                <a href="app-take-course.html">Bootstrap Foundations</a>
                            </div>
                        </div>
                        <div class="media-right text-center">
                            <div class="text-display-1 text-red-300">3.4</div>
                            <span class="caption text-light">Failed</span>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer">
                    <a href="app-student-quizzes.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated=""> Go to Results</a>
                </div>
            </div>
        </div>
        <div class="item col-xs-12 col-lg-6" style="position: absolute; left: 0px; top: 283px;">
            <h4 class="text-headline margin-none">Forum Activity</h4>
            <p class="text-subhead text-light">Latest forum topics &amp; comments</p>
            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated="">
                <li class="list-group-item paper-shadow">
                    <div class="media v-middle">
                        <div class="media-left">
                            <a href="#">
                                <img src="room/images/people/110/guy-3.jpg" alt="person" class="img-circle width-40">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                            <div class="text-light">
                                Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="width-60 text-right">
                                <span class="text-caption text-light">1 hr ago</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item paper-shadow">
                    <div class="media v-middle">
                        <div class="media-left">
                            <a href="#">
                                <img src="room/images/people/110/guy-6.jpg" alt="person" class="img-circle width-40">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                            <div class="text-light">
                                Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="width-60 text-right">
                                <span class="text-caption text-light">2 hrs ago</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item paper-shadow">
                    <div class="media v-middle">
                        <div class="media-left">
                            <a href="#">
                                <img src="room/images/people/110/guy-5.jpg" alt="person" class="img-circle width-40">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                            <div class="text-light">
                                Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="width-60 text-right">
                                <span class="text-caption text-light">3 hr ago</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item paper-shadow">
                    <div class="media v-middle">
                        <div class="media-left">
                            <a href="#">
                                <img src="room/images/people/110/guy-4.jpg" alt="person" class="img-circle width-40">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                            <div class="text-light">
                                Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="width-60 text-right">
                                <span class="text-caption text-light">4 hr ago</span>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
@endsection

@section('page-specific-scripts')
    <script>

    </script>
@endsection