<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title') | Sistem Kepegawaian</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/docs/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Sistem Karyawan</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">

            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i
                                class="fa fa-sign-out fa-lg"></i> Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('image/.jpeg') }}"
                alt="User Image">
            <div>
                <p class="app-sidebar__user-name">RICO DWI PUTRA</p>
                <p class="app-sidebar__user-designation">Web Developer</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item @yield('dashboard')" href="{{ url('/') }}"><i
                        class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
            </li>
            <!---<li class="treeview"><a class="app-menu__item @yield('master')" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Tabel Master</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href"><i class="icon fa fa-circle-o"></i>
                            Agama</a></li>
                    <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>
                            Kewarganegaraan</a></li>
                    <li><a class="treeview-item" href="{"><i class="icon fa fa-circle-o"></i>
                            Golongan Darah</a></li>
                    <li><a class="treeview-item" href"><i
                                class="icon fa fa-circle-o"></i> Keluarga</a></li>
                </ul>
            </li>-->
            <li class="treeview"><a class="app-menu__item @yield('pegawai')" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Pegawai</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ route('pegawai.index') }}"><i class="icon fa fa-circle-o"></i>
                            Data Pegawai</a></li>
                    <li><a class="treeview-item" href="{{ route('pegawai.create') }}" target=""
                            rel="noopener"><i class="icon fa fa-circle-o"></i> Tambah Pegawai</a></li>
                    <!-- <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li> -->
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item @yield('KontrakdanJabatan')" href="#"
                    data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span
                        class="app-menu__label">Kontrak Dan <br> Jabatan Pegawai</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ route('KontrakdanJabatan.index') }}"><i
                                class="icon fa fa-circle-o"></i> Kontrak dan Jabatan Pegawai</a></li>

                    <!-- <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
    <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li> -->
                </ul>
            </li>
            <li><a class="app-menu__item @yield('chart')" href="{{ route('chart.index') }}"><i
                        class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a>
            </li>

            <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Referensi</span><i class="treeview-indicator fa fa-angle-right"></i></a> -->

            </li>
            <!---<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Rekap Data</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ route('pegawai-pdf') }}"><i
                                class="icon fa fa-circle-o"></i> Pegawai</a></li>
                </ul> -->
            </li>
        </ul>
    </aside>
    @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('template/docs/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('template/docs/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
        var jmlh_pegawai = {{ json_encode($jmlh_pegawai) }}
        var jmlh_user = {{ json_encode($jmlh_user) }}
        var jmlh_kontrak = {{ json_encode($jmlh_kontrak) }}
        var data = {
            labels: ["User Dan Pegawai"],
            datasets: [{
                    label: "Jumlah User",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [jmlh_user],
                    // label: "Sudah Menikah"
                },
                {
                    label: "Jumlah Pegawai",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [jmlh_pegawai],
                    // label: "Belum Menikah"
                }
            ]
        };
        var pdata = [{
                value: jmlh_pegawai,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Jumlah Pegawai"
            },
            {
                value: jmlh_kontrak,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: " Jumlah Kontrak"
            }
        ]

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
</body>

</html>
