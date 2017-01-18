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

                    <h3 class="no-margin">3,450</h3>
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

                    <h3 class="no-margin">48% <span style="font-size: 13px">1,656</span></h3>
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

            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_2"></label></div><div class="dataTables_length" id="DataTables_Table_2_length"><label><span>Show:</span> <div class="select2-container" id="s2id_autogen5"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">10</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-6">   </ul></div></div><select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="select2-offscreen" tabindex="-1" title=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="datatable-scroll"><table class="table table-bordered table-hover datatable-highlight dataTable no-footer" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                        <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">Vulnerbility Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Risk Type</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Bug Found On</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th></tr>
                        </thead>
                        <tbody>


                        <tr role="row" class="odd">
                            <td class="sorting_1">Aura</td>
                            <td class="">Hard</td>
                            <td class="">Business Services Sales Representative</td>
                            <td class="">19 Apr 1969</td>
                            <td class=""><span class="label label-danger">Suspended</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">Chantal</td>
                            <td class=""><a href="#">Nailor</a></td>
                            <td class="">Technical Services Librarian</td>
                            <td class="">10 Jan 1980</td>
                            <td class=""><span class="label label-default">Inactive</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">Cicely</td>
                            <td class="">Sigler</td>
                            <td class=""><a href="#">Senior Research Officer</a></td>
                            <td class="">15 Mar 1960</td>
                            <td class=""><span class="label label-info">Pending</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">Coy</td>
                            <td class="">Wollard</td>
                            <td class="">Customer Service Operator</td>
                            <td class="">12 Oct 1982</td>
                            <td class=""><span class="label label-success">Active</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">Delma</td>
                            <td class="">Bonds</td>
                            <td class="">Lead Brand Manager</td>
                            <td class="">21 Dec 1968</td>
                            <td class=""><span class="label label-info">Pending</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">Jackelyn</td>
                            <td class="">Weible</td>
                            <td class=""><a href="#">Airline Transport Pilot</a></td>
                            <td class="">3 Oct 1981</td>
                            <td class=""><span class="label label-default">Inactive</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">Kennedy</td>
                            <td class="">Haley</td>
                            <td class="">Senior Marketing Designer</td>
                            <td class="">18 Dec 1960</td>
                            <td class=""><span class="label label-success">Active</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">Lizzee</td>
                            <td class=""><a href="#">Goodlow</a></td>
                            <td class="">Technical Services Librarian</td>
                            <td class="">1 Nov 1961</td>
                            <td class=""><span class="label label-danger">Suspended</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">Marth</td>
                            <td class=""><a href="#">Enright</a></td>
                            <td class="">Traffic Court Referee</td>
                            <td class="">22 Jun 1972</td>
                            <td class=""><span class="label label-success">Active</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">Maxine</td>
                            <td class=""><a href="#">Woldt</a></td>
                            <td class=""><a href="#">Business Services Sales Representative</a></td>
                            <td class="">17 Oct 1987</td>
                            <td class=""><span class="label label-info">Pending</span></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr></tbody>
                    </table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" id="DataTables_Table_2_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" id="DataTables_Table_2_next">→</a></div></div></div>
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