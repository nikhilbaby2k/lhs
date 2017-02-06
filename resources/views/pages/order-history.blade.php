@extends('pages.common')
@section('page-header')
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Order History</h4>
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
            <li><a href="/"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Order History</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>

        </ul>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">

            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body">

                    <h3 class="no-margin" style="color: #fff">3,450</h3>
                    Successful

                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->

        </div>

        <div class="col-lg-3">

            <!-- Current server load -->
            <div class="panel bg-pink-400">
                <div class="panel-body">
                    <div class="heading-elements">

                    </div>

                    <h3 class="no-margin" style="color: #fff"><span style="font-size: 13px">1,656</span></h3>
                    Cancelled

                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div id="server-load"></div>
            </div>
            <!-- /current server load -->

        </div>

    </div>

    <!-- Dashboard content -->
    <div class="row">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Order History Details</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>

                    </ul>
                </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

            <div class="panel-body">
                List down all your orders including <code>Successful</code> and <code>Cancelled</code> ones.
            </div>

            <table class="table table-bordered table-hover datatable-highlight dataTable no-footer"
                   id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="First Name: activate to sort column descending">Order Id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Last Name: activate to sort column ascending">Course Name
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Job Title: activate to sort column ascending">Course Description
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="DOB: activate to sort column ascending">Cost
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Status: activate to sort column ascending">Time
                    </th>

                </tr>
                </thead>
                <tbody>


                @foreach($order_data as $order_num => $order_details)
                    <tr role="row" @if($order_num%2 == 0) class="even" @else class="odd" @endif >
                    @foreach($order_details as $order_detail_item)
                            <td class="sorting_1">{{$order_detail_item}}</td>
                    @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- Quick stats boxes -->


        <!-- /quick stats boxes -->

        <!-- Marketing campaigns -->


        <div class="table-responsive">

        </div>

        <div class="table-responsive">

        </div>
    </div>
    <!-- /marketing campaigns -->





    </div>

    <div class="col-lg-4">

        <!-- Progress counters -->
        <div class="row"> </div>
        <!-- /progress counters -->
        <!-- My messages -->

    </div>
    <!-- /dashboard content -->
@endsection

@section('page-specific-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#DataTables_Table_2').DataTable();
            console.log('init dt');
        });
    </script>
@endsection