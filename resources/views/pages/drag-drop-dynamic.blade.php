<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" type="text/css"/>
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/loaders/blockui.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.contextMenu.js" type="text/javascript"></script>
    <script src="js/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/bootbox.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>

    <!-- Theme JS files -->
    <script type="text/javascript" src="js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/pickers/daterangepicker.js"></script>

    <script src="js/drag-drop-dynamic/highcharts.js"></script>
    <script src="js/drag-drop-dynamic/data.js"></script>
    <script src="js/drag-drop-dynamic/drilldown.js"></script>
</head>
<title> Drag - Drop Dynamic Demo </title>

<body>

<div style="margin: 5px 30px;">
    <div class="row">

        {{--  Content 1 Start --}}
        <div class="col-lg-3 data-graph-dropable" >
            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div id="chart-1" class="panel-body" style="min-width: 310px; height: 400px; margin: 0 auto">

                </div>
                <!-- /members online -->
            </div>

        </div>
        {{--  Content 1 END --}}

        {{--  Content 2 Start --}}
        <div class="col-lg-3 data-graph-dropable">
            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body">
                    <h3 class="no-margin" style="color: #fff">3,450</h3>
                    Successful
                </div>
                <!-- /members online -->
            </div>

        </div>
        {{--  Content 2 END --}}

    </div>

</div>


<!-- Dashboard content -->
<div class="">
    <div class="" style="margin: 5px 30px;">

        <div class="panel-body">
            Your Data set is here.
        </div>

        <table class="table table-bordered table-hover datatable-highlight dataTable no-footer"
               id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc data-column data-date" data-col-value="date" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="First Name: activate to sort column descending">Date
                </th>
                <th class="sorting data-column" data-col-value="withdrawal" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                    aria-label="Last Name: activate to sort column ascending">Withdrawal
                </th>
                <th class="sorting data-column" data-col-value="balance-enquiry" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                    aria-label="Job Title: activate to sort column ascending">Balance Enquiry
                </th>
                <th class="sorting data-column" data-col-value="decline"  tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                    aria-label="DOB: activate to sort column ascending">Declines
                </th>
                <th class="sorting data-column" data-col-value="invalid-pin" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                    aria-label="Status: activate to sort column ascending">Invalid PIN
                </th>

            </tr>
            </thead>
            <tbody>

            @foreach($data_set as $data_set_number => $data_set_item)
                <tr role="row" @if($data_set_number%2 == 0) class="even" @else class="odd" @endif >
                        <td class="sorting_1 date-row" data-col-name="date">{{$data_set_item['date']}}</td>
                        <td class="sorting_1 data-item-cell" data-col-name="withdrawal">{{$data_set_item['withdrawal']}}</td>
                        <td class="sorting_1 data-item-cell" data-col-name="balance-enquiry">{{$data_set_item['balance_enquiry']}}</td>
                        <td class="sorting_1 data-item-cell" data-col-name="decline">{{$data_set_item['decline']}}</td>
                        <td class="sorting_1 data-item-cell" data-col-name="invalid-pin">{{$data_set_item['invalid_pin']}}</td>
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


</body>

<script type="text/javascript">
    $(document).ready(function(){

        $('#DataTables_Table_2').DataTable();

    });

    $('th.data-column').click( function () {
        var data_col_name = $(this).attr('data-col-value');
        var data_col_heading = $(this).html();

        var date_ordering = [];
        var all_dates = $('td[data-col-name="date"]');

        $.each(all_dates, function (index, date_elt) {
            var date_value = $(date_elt).html();
            date_ordering.push(date_value);
        });

        var all_data_sets = $('td[data-col-name="'+data_col_name+'"]');
        var all_data_sets_values = [];

        $.each(all_data_sets, function (index, elt) {
            var data_value = $(elt).html();
            all_data_sets_values.push({name: date_ordering[index], y: parseInt(data_value)});
        });

        console.log('Date Order: ', date_ordering);
        console.log('Data Col Name: ', data_col_heading);
        console.log('Data Set: ', all_data_sets_values);


        Highcharts.chart('chart-1', {
            chart: {
                type: 'column'
            },
            title: {
                text: data_col_heading
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Value'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> ' + data_col_heading + '<br/>'
            },

            series: [{
                name: data_col_heading,
                colorByPoint: true,
                data: all_data_sets_values
            }],
            drilldown: {}
        });


    } );

    $('td.date-row').click( function () {
        var date_heading = $(this).html();
        var row_set = $(this).parent().find('.data-item-cell');
        console.log(row_set);

        var all_data_sets_values = [];

        $.each(row_set, function (index, elt) {
            var data_value = $(elt).html();
            var data_name = $(elt).attr('data-col-name');
            all_data_sets_values.push({name: data_name, y: parseInt(data_value)});
        });

        console.log('Data Set: ', all_data_sets_values);


        Highcharts.chart('chart-1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data for ' + date_heading
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Value'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> <br/>'
            },

            series: [{
                name: 'Data for ' + date_heading,
                colorByPoint: true,
                data: all_data_sets_values
            }],
            drilldown: {}
        });


    } );

    $('td.data-item-cell').click( function () {
        var date_col_name = $(this).attr('data-col-name');
        var date_col_date = $(this).parent().find('.date-row').html();
        var data_value = $(this).html();

        var row_set = $(this).parent().find('.data-item-cell');
        console.log(row_set);

        var all_data_sets_values = [];

        all_data_sets_values.push({name: date_col_name, y: parseInt(data_value)});

        console.log('Data Set: ', all_data_sets_values);

        Highcharts.chart('chart-1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data for ' + date_col_date
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Value'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b>  <br/>'
            },

            series: [{
                name: 'Data for ' + date_col_date,
                colorByPoint: true,
                data: all_data_sets_values
            }],
            drilldown: {}
        });


    } );

    //High-chart start
    Highcharts.chart('chart-1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data Title'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Y-Axis Text'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [
                {
                name: 'Microsoft Internet Explorer',
                y: 56.33
                },
                {
                    name: 'Chrome',
                    y: 24.03
                },
                {
                    name: 'Firefox',
                    y: 10.38
                },
                {
                    name: 'Safari',
                    y: 4.77
                },
                {
                    name: 'Opera',
                    y: 0.91
                },
                {
                    name: 'Proprietary or Undetectable',
                    y: 0.2
                }
            ]
        }],
        drilldown: {}
    });

    //High Chart End



</script>
</html>