@extends('layouts.default')

@section('links')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('styles')
    <style>
        #daily-engagement {
            width: 100%;
            height: 400px;
        }

        #daily-login {
            width: 100%;
            height: 400px;
        }

        #bar-device-user {
            width: 100%;
            height: 400px;
        }

        #bar-browser-user {
            width: 100%;
            height: 400px;
        }

        #device-user {
            width: 100%;
            height: 400px;
        }

        #browser-user {
            width: 100%;
            height: 400px;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid var(--kt-input-border-color);
        }
    </style>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ $pageTitle }}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('application/finance-dashboards') }}"
                            class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ $pageTitle }}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a class="btn btn-primary btn-sm float-right font-weight-bolder" data-toggle="modal" data-target="#filterExportData">
                    <i class="fa fa-plus-circle"></i>Filter & Export
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Content container-->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('failed'))
                <div class="alert alert-danger">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                            <a href="{{ url('application/visitors') }}" class="d-flex" target="_blank">
                                <h5 class="card-title">Total Pengunjung Hari Ini</h5>
                            </a>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ url('application/visitors') }}" class="d-flex" target="_blank">
                                <h1 id="count-visitor-user">{{ count($visitor) }}</h1>
                            </a>
                            <small class="today-interaction-loading" style="display: none">Please kindly wait...</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                            <a href="{{ url('application/visitors') }}" class="d-flex" target="_blank">
                                <h5 class="card-title">Total Pengunjung Total</h5>
                            </a>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ url('application/visitors') }}" class="d-flex" target="_blank">
                                <h1 id="count-visitor-user">{{ count($visitorTotal) }}</h1>
                            </a>
                            <small class="today-interaction-loading" style="display: none">Please kindly wait...</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row mt-3 w-100">
                                <div class="col-md-6 d-flex align-items-center">
                                    <a href="{{ url('application/visitors') }}" target="_blank">
                                        <h5 class="card-title">Perangkat</h5>
                                    </a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="2023" max="2073" class="form-control"
                                            value="{{ date('Y') }}" name="year-bar-device-user">
                                    </div>
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="01" max="12" class="form-control"
                                            value="{{ date('m') }}" name="month-bar-device-user">
                                    </div>
                                    <div class="form-group" style="width: 10%">
                                        <button type="button" class="btn btn-primary"
                                            id="btn-bar-device-user">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <small class="bar-device-user-loading" style="display: none">Please kindly wait...</small>
                        <div class="card-body" id="parent-bar-device-user">
                            <!-- HTML -->
                            <div id="bar-device-user"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row mt-3 w-100">
                                <div class="col-md-6 d-flex align-items-center">
                                    <a href="{{ url('application/visitors') }}" target="_blank">
                                        <h5 class="card-title">Browser</h5>
                                    </a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="2023" max="2073" class="form-control"
                                            value="{{ date('Y') }}" name="year-bar-browser-user">
                                    </div>
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="01" max="12" class="form-control"
                                            value="{{ date('m') }}" name="month-bar-browser-user">
                                    </div>
                                    <div class="form-group" style="width: 10%">
                                        <button type="button" class="btn btn-primary"
                                            id="btn-bar-browser-user">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <small class="bar-browser-user-loading" style="display: none">Please kindly wait...</small>
                        <div class="card-body" id="parent-bar-browser-user">
                            <!-- HTML -->
                            <div id="bar-browser-user"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row mt-3 w-100">
                                <div class="col-md-6 d-flex align-items-center">
                                    <a href="{{ url('application/visitors') }}" target="_blank">
                                        <h5 class="card-title">Pengunjung Harian</h5>
                                    </a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="2023" max="2073" class="form-control"
                                            value="{{ date('Y') }}" name="year-daily-engagement">
                                    </div>
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="01" max="12" class="form-control"
                                            value="{{ date('m') }}" name="month-daily-engagement">
                                    </div>
                                    <div class="form-group" style="width: 10%">
                                        <button type="button" class="btn btn-primary"
                                            id="btn-daily-engagement">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <small class="daily-engagement-loading" style="display: none">Please kindly wait...</small>
                        <div class="card-body" id="parent-daily-engagement">
                            <!-- HTML -->
                            {{-- <div id="daily-engagement"></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row mt-3 w-100">
                                <div class="col-md-4 d-flex align-items-center">
                                    <a href="{{ url('application/visitors') }}" target="_blank">
                                        <h5 class="card-title">Perangkat</h5>
                                    </a>
                                </div>
                                <div class="col-md-8 d-flex justify-content-end">
                                    <div class="form-group" style="width: 40%; margin-right:10px;">
                                        <input type="number" min="2023" max="2073" class="form-control"
                                            value="{{ date('Y') }}" name="year-device-user">
                                    </div>
                                    <div class="form-group" style="width: 30%; margin-right:10px;">
                                        <input type="number" min="01" max="12" class="form-control"
                                            value="{{ date('m') }}" name="month-device-user">
                                    </div>
                                    <div class="form-group" style="width: 15%">
                                        <button type="button" class="btn btn-primary" id="btn-device-user">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <small class="device-user-loading" style="display: none">Please kindly wait...</small>
                        <div class="card-body" id="parent-device-user">
                            <!-- HTML -->
                            <div id="device-user"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content container-->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="filterExportData" tabindex="-1" role="dialog" aria-labelledby="filterExportDataLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterExportDataLabel">Filter & Export</h5>
                    <a href="#">
                        <span aria-hidden="true" data-dismiss="modal" aria-label="Close">&times;</span>
                    </a>
            </div>
            <form action="{{ route('visitor.export') }}" method="get">
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="form-group w-100 mt-3">
                                <label>Periode</label>
                                <select class="select2 form-control" name="filter-periode">
                                    <option value="">Semua Periode</option>
                                    <option value="custom-date">Custom Range</option>
                                </select>
                                <small>Digunakan untuk export data</small>
                            </div>
                        </div>
                    </div>
        
                    <div class="row mt-2" id="filter-periode-detail" style="display: none">
                        <div class="col-md-6">
                            <div class="form-group w-100 mt-3">
                                <label>Tanggal Mulai</label>
                                <input type="date" class="form-control" name="filter-datestart">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group w-100 mt-3">
                                <label>Tanggal Selesai</label>
                                <input type="date" class="form-control" name="filter-dateend">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" id="btn-search-filter">Search</button> --}}
                    <button type="submit" class="btn btn-primary">Export</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Resources -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            dailyEngagement();
            dailyLogin();
            deviceUser();
            browserUser();
            barDeviceUser();
            barBrowserUser();

            $('.select2').select2({
                width: '100%',
                dropdownParent: $('#filterExportData')
            });

            $('#btn-search-filter').on('click', function(){
                dailyEngagement();
                dailyLogin();
                deviceUser();
                browserUser();
                barDeviceUser();
                barBrowserUser();
                todayInteraction();
            });

            $('select[name="filter-periode"]').on('change', function(){
                if($(this).val() == ''){
                    $('#filter-periode-detail').hide(500);
                }else{
                    $('#filter-periode-detail').show(500);
                }
            });
        });

        $('#btn-daily-engagement').on('click', function() {
            dailyEngagement();
        });
        $('#btn-daily-login').on('click', function() {
            dailyLogin();
        });
        $('#btn-device-user').on('click', function() {
            deviceUser();
        });
        $('#btn-browser-user').on('click', function() {
            browserUser();
        });
        $('#btn-bar-device-user').on('click', function() {
            barDeviceUser();
        });
        $('#btn-bar-browser-user').on('click', function() {
            barBrowserUser();
        });
    </script>

    <script>
        function todayInteraction(){

            $.ajax({
                url: "{{ route('api.today-interaction') }}",
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.today-interaction-loading').show();
                },
                success: function(final) {
                    $('.today-interaction-loading').hide();
                    $('#count-visitor-user').text(final.data);
                }
            });
        }
    </script>

    <!-- Chart code -->
    <script>
        function dailyEngagement() {

            var year = $('input[name="year-daily-engagement"').val();
            var month = $('input[name="month-daily-engagement"').val();

            $.ajax({
                url: "{{ route('api.daily-engagement') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.daily-engagement-loading').show();
                },
                success: function(final) {
                    $('.daily-engagement-loading').hide();

                    $('#parent-daily-engagement').html(`
                        <div id="daily-engagement"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("daily-engagement");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                            panX: true,
                            panY: true,
                            wheelX: "panX",
                            wheelY: "zoomX",
                            pinchZoomX: true
                        }));

                        // Add cursor
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
                            behavior: "none"
                        }));
                        cursor.lineY.set("visible", false);


                        // Generate random data
                        var date = new Date();
                        date.setHours(0, 0, 0, 0);
                        var value = 100;

                        function generateData() {
                            value = Math.round((Math.random() * 10 - 5) + value);
                            am5.time.add(date, "day", 1);
                            return {
                                date: date.getTime(),
                                value: value
                            };
                        }

                        function generateDatas(count) {
                            var data = [];
                            for (var i = 0; i < count; ++i) {
                                data.push(generateData());
                            }
                            return data;
                        }


                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                            maxDeviation: 0.5,
                            baseInterval: {
                                timeUnit: "day",
                                count: 1
                            },
                            renderer: am5xy.AxisRendererX.new(root, {
                                pan: "zoom"
                            }),
                            tooltip: am5.Tooltip.new(root, {})
                        }));

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                            maxDeviation: 1,
                            renderer: am5xy.AxisRendererY.new(root, {
                                pan: "zoom"
                            })
                        }));


                        // Add series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.SmoothedXLineSeries.new(root, {
                            name: "Series",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value",
                            valueXField: "date",
                            tooltip: am5.Tooltip.new(root, {
                                labelText: "{valueY}"
                            })
                        }));

                        series.fills.template.setAll({
                            visible: true,
                            fillOpacity: 0.2
                        });

                        series.bullets.push(function() {
                            return am5.Bullet.new(root, {
                                locationY: 0,
                                sprite: am5.Circle.new(root, {
                                    radius: 4,
                                    stroke: root.interfaceColors.get(
                                        "background"),
                                    strokeWidth: 2,
                                    fill: series.get("fill")
                                })
                            });
                        });


                        // Add scrollbar
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
                        chart.set("scrollbarX", am5.Scrollbar.new(root, {
                            orientation: "horizontal"
                        }));


                        // var data = generateDatas(50);
                        var data = final.data;
                        console.log(data);
                        series.data.setAll(data);

                        // date: 1687453200000
                        //value : 99


                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear(1000);
                        chart.appear(1000, 100);

                    }); // end am5.ready()

                }
            })

        }

        function dailyLogin() {

            var year = $('input[name="year-daily-login"').val();
            var month = $('input[name="month-daily-login"').val();

            $.ajax({
                url: "{{ route('api.daily-login') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.daily-login-loading').show();
                },
                success: function(final) {
                    $('.daily-login-loading').hide();

                    $('#parent-daily-login').html(`
                        <div id="daily-login"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("daily-login");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                            panX: true,
                            panY: true,
                            wheelX: "panX",
                            wheelY: "zoomX",
                            pinchZoomX: true
                        }));

                        // Add cursor
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
                            behavior: "none"
                        }));
                        cursor.lineY.set("visible", false);


                        // Generate random data
                        var date = new Date();
                        date.setHours(0, 0, 0, 0);
                        var value = 100;

                        function generateData() {
                            value = Math.round((Math.random() * 10 - 5) + value);
                            am5.time.add(date, "day", 1);
                            return {
                                date: date.getTime(),
                                value: value
                            };
                        }

                        function generateDatas(count) {
                            var data = [];
                            for (var i = 0; i < count; ++i) {
                                data.push(generateData());
                            }
                            return data;
                        }


                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                            maxDeviation: 0.5,
                            baseInterval: {
                                timeUnit: "day",
                                count: 1
                            },
                            renderer: am5xy.AxisRendererX.new(root, {
                                pan: "zoom"
                            }),
                            tooltip: am5.Tooltip.new(root, {})
                        }));

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                            maxDeviation: 1,
                            renderer: am5xy.AxisRendererY.new(root, {
                                pan: "zoom"
                            })
                        }));


                        // Add series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.SmoothedXLineSeries.new(root, {
                            name: "Series",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value",
                            valueXField: "date",
                            tooltip: am5.Tooltip.new(root, {
                                labelText: "{valueY}"
                            })
                        }));

                        series.fills.template.setAll({
                            visible: true,
                            fillOpacity: 0.2
                        });

                        series.bullets.push(function() {
                            return am5.Bullet.new(root, {
                                locationY: 0,
                                sprite: am5.Circle.new(root, {
                                    radius: 4,
                                    stroke: root.interfaceColors.get(
                                        "background"),
                                    strokeWidth: 2,
                                    fill: series.get("fill")
                                })
                            });
                        });


                        // Add scrollbar
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
                        chart.set("scrollbarX", am5.Scrollbar.new(root, {
                            orientation: "horizontal"
                        }));


                        // var data = generateDatas(50);
                        var data = final.data;
                        console.log(data);
                        series.data.setAll(data);

                        // date: 1687453200000
                        //value : 99


                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear(1000);
                        chart.appear(1000, 100);

                    }); // end am5.ready()

                }
            })

        }
    </script>

    <script>
        function deviceUser() {

            var year = $('input[name="year-device-user"').val();
            var month = $('input[name="month-device-user"').val();

            $.ajax({
                url: "{{ route('api.device-user') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.device-user-loading').show();
                },
                success: function(final) {
                    $('.device-user-loading').hide();

                    $('#parent-device-user').html(`
                        <div id="device-user"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("device-user");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                        var chart = root.container.children.push(am5percent.PieChart.new(root, {
                            layout: root.verticalLayout,
                            innerRadius: am5.percent(50)
                        }));


                        // Create series
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                        var series = chart.series.push(am5percent.PieSeries.new(root, {
                            valueField: "value",
                            categoryField: "category",
                            alignLabels: false
                        }));

                        series.labels.template.setAll({
                            textType: "circular",
                            centerX: 0,
                            centerY: 0
                        });


                        // Set data
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data

                        var data = final.data;

                        series.data.setAll(data);

                        // series.data.setAll([
                        //     {
                        //         value: 10,
                        //         category: "Computer - Windows 10"
                        //     },
                        //     {
                        //         value: 2,
                        //         category: "Tab - Windows 10"
                        //     },
                        //     {
                        //         value: 6,
                        //         category: "Mobile - Windows 10"
                        //     },
                        // ]);


                        // Create legend
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
                        var legend = chart.children.push(am5.Legend.new(root, {
                            centerX: am5.percent(50),
                            x: am5.percent(50),
                            marginTop: 15,
                            marginBottom: 15,
                        }));

                        legend.data.setAll(series.dataItems);


                        // Play initial series animation
                        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
                        series.appear(1000, 100);

                    }); // end am5.ready()

                }
            })
        }

        function browserUser() {

            var year = $('input[name="year-browser-user"').val();
            var month = $('input[name="month-browser-user"').val();

            $.ajax({
                url: "{{ route('api.browser-user') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.browser-user-loading').show();
                },
                success: function(final) {
                    $('.browser-user-loading').hide();

                    $('#parent-browser-user').html(`
                        <div id="browser-user"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("browser-user");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                        var chart = root.container.children.push(am5percent.PieChart.new(root, {
                            layout: root.verticalLayout,
                            innerRadius: am5.percent(50)
                        }));


                        // Create series
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                        var series = chart.series.push(am5percent.PieSeries.new(root, {
                            valueField: "value",
                            categoryField: "category",
                            alignLabels: false
                        }));

                        series.labels.template.setAll({
                            textType: "circular",
                            centerX: 0,
                            centerY: 0
                        });


                        // Set data
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data

                        var data = final.data;

                        series.data.setAll(data);

                        // series.data.setAll([
                        //     {
                        //         value: 10,
                        //         category: "Computer - Windows 10"
                        //     },
                        //     {
                        //         value: 2,
                        //         category: "Tab - Windows 10"
                        //     },
                        //     {
                        //         value: 6,
                        //         category: "Mobile - Windows 10"
                        //     },
                        // ]);


                        // Create legend
                        // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
                        var legend = chart.children.push(am5.Legend.new(root, {
                            centerX: am5.percent(50),
                            x: am5.percent(50),
                            marginTop: 15,
                            marginBottom: 15,
                        }));

                        legend.data.setAll(series.dataItems);


                        // Play initial series animation
                        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
                        series.appear(1000, 100);

                    }); // end am5.ready()

                }
            })
        }
    </script>

    <script>
        function barDeviceUser() {

            var year = $('input[name="year-bar-device-user"').val();
            var month = $('input[name="month-bar-device-user"').val();

            $.ajax({
                url: "{{ route('api.bar-device-user') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.bar-device-user-loading').show();
                },
                success: function(final) {
                    $('.bar-device-user-loading').hide();

                    $('#parent-bar-device-user').html(`
                        <div id="bar-device-user"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("bar-device-user");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                            panX: true,
                            panY: true,
                            wheelX: "panX",
                            wheelY: "zoomX",
                            pinchZoomX: true
                        }));

                        // Add cursor
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
                        cursor.lineY.set("visible", false);


                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xRenderer = am5xy.AxisRendererX.new(root, {
                            minGridDistance: 30
                        });
                        xRenderer.labels.template.setAll({
                            rotation: -90,
                            centerY: am5.p50,
                            centerX: am5.p100,
                            paddingRight: 15
                        });

                        xRenderer.grid.template.setAll({
                            location: 1
                        })

                        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                            maxDeviation: 0.3,
                            categoryField: "country",
                            renderer: xRenderer,
                            tooltip: am5.Tooltip.new(root, {})
                        }));

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                            maxDeviation: 0.3,
                            renderer: am5xy.AxisRendererY.new(root, {
                                strokeOpacity: 0.1
                            })
                        }));


                        // Create series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                            name: "Series 1",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value",
                            sequencedInterpolation: true,
                            categoryXField: "country",
                            tooltip: am5.Tooltip.new(root, {
                                labelText: "{valueY}"
                            })
                        }));

                        series.columns.template.setAll({
                            cornerRadiusTL: 5,
                            cornerRadiusTR: 5,
                            strokeOpacity: 0
                        });
                        series.columns.template.adapters.add("fill", function(fill, target) {
                            return chart.get("colors").getIndex(series.columns.indexOf(target));
                        });

                        series.columns.template.adapters.add("stroke", function(stroke, target) {
                            return chart.get("colors").getIndex(series.columns.indexOf(target));
                        });


                        // Set data
                        // var data = [{
                        //     country: "USA",
                        //     value: 2025
                        // }, {
                        //     country: "China",
                        //     value: 1882
                        // }, {
                        //     country: "Japan",
                        //     value: 1809
                        // }, {
                        //     country: "Germany",
                        //     value: 1322
                        // }, {
                        //     country: "UK",
                        //     value: 1122
                        // }, {
                        //     country: "France",
                        //     value: 1114
                        // }, {
                        //     country: "India",
                        //     value: 984
                        // }, {
                        //     country: "Spain",
                        //     value: 711
                        // }, {
                        //     country: "Netherlands",
                        //     value: 665
                        // }, {
                        //     country: "South Korea",
                        //     value: 443
                        // }, {
                        //     country: "Canada",
                        //     value: 441
                        // }];

                        var data = final.data;
                        series.data.setAll(data);

                        xAxis.data.setAll(data);
                        series.data.setAll(data);


                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear(1000);
                        chart.appear(1000, 100);

                    }); // end am5.ready()

                }
            })

        }

        function barBrowserUser() {

            var year = $('input[name="year-bar-browser-user"').val();
            var month = $('input[name="month-bar-browser-user"').val();

            $.ajax({
                url: "{{ route('api.bar-browser-user') }}",
                data: {
                    year: year,
                    month: month,
                },
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('.bar-browser-user-loading').show();
                },
                success: function(final) {
                    $('.bar-browser-user-loading').hide();

                    $('#parent-bar-browser-user').html(`
                        <div id="bar-browser-user"></div>
                    `);

                    am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("bar-browser-user");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                            am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                            panX: true,
                            panY: true,
                            wheelX: "panX",
                            wheelY: "zoomX",
                            pinchZoomX: true
                        }));

                        // Add cursor
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
                        cursor.lineY.set("visible", false);


                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xRenderer = am5xy.AxisRendererX.new(root, {
                            minGridDistance: 30
                        });
                        xRenderer.labels.template.setAll({
                            rotation: -90,
                            centerY: am5.p50,
                            centerX: am5.p100,
                            paddingRight: 15
                        });

                        xRenderer.grid.template.setAll({
                            location: 1
                        })

                        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                            maxDeviation: 0.3,
                            categoryField: "country",
                            renderer: xRenderer,
                            tooltip: am5.Tooltip.new(root, {})
                        }));

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                            maxDeviation: 0.3,
                            renderer: am5xy.AxisRendererY.new(root, {
                                strokeOpacity: 0.1
                            })
                        }));


                        // Create series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                            name: "Series 1",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value",
                            sequencedInterpolation: true,
                            categoryXField: "country",
                            tooltip: am5.Tooltip.new(root, {
                                labelText: "{valueY}"
                            })
                        }));

                        series.columns.template.setAll({
                            cornerRadiusTL: 5,
                            cornerRadiusTR: 5,
                            strokeOpacity: 0
                        });
                        series.columns.template.adapters.add("fill", function(fill, target) {
                            return chart.get("colors").getIndex(series.columns.indexOf(target));
                        });

                        series.columns.template.adapters.add("stroke", function(stroke, target) {
                            return chart.get("colors").getIndex(series.columns.indexOf(target));
                        });


                        // Set data
                        // var data = [{
                        //     country: "USA",
                        //     value: 2025
                        // }, {
                        //     country: "China",
                        //     value: 1882
                        // }, {
                        //     country: "Japan",
                        //     value: 1809
                        // }, {
                        //     country: "Germany",
                        //     value: 1322
                        // }, {
                        //     country: "UK",
                        //     value: 1122
                        // }, {
                        //     country: "France",
                        //     value: 1114
                        // }, {
                        //     country: "India",
                        //     value: 984
                        // }, {
                        //     country: "Spain",
                        //     value: 711
                        // }, {
                        //     country: "Netherlands",
                        //     value: 665
                        // }, {
                        //     country: "South Korea",
                        //     value: 443
                        // }, {
                        //     country: "Canada",
                        //     value: 441
                        // }];

                        var data = final.data;
                        series.data.setAll(data);

                        xAxis.data.setAll(data);
                        series.data.setAll(data);


                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear(1000);
                        chart.appear(1000, 100);

                    }); // end am5.ready()

                }
            })

        }
    </script>
@endsection
