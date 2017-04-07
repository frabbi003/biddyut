<!-- This master page for admin panel master page -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biddyut Logistic</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('/')}}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link href="{{ asset('ico/bidyut2.png') }}" rel="shortcut icon">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/')}}/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Version 3.0 -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .required {
            color: red;
        }

        .skin-blue .main-header .navbar {
            background-color: #ffba00;
        }

        .skin-blue .main-header .logo {
            background-color: #ffba00;
            color: #fff;
            border-bottom: 0 solid transparent;
            border-right: 1px solid #eee;
        }

        .skin-blue .main-header .logo:hover {
            background-color: #ffba00;
        }

        .box.box-info {
            border-top-color: #ffba00;
        }

        menu > li:hover > a, .skin-blue .sidebar-menu > li.active > a {
            color: #fff;
            background: #1e282c;
            border-left-color: #ffba00;
        }

        .skin-blue .sidebar-menu > li:hover > a, .skin-blue .sidebar-menu > li.active > a {
            border-left-color: #ffba00;
        }

        .skin-blue .main-header .navbar .sidebar-toggle:hover {
            background-color: #ffba25;
        }

        .box.box-info {
            border-top-color: #D73925;
        }

        .box.box-success {
            border-top-color: #D73925;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>BIDDYUT</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Biddyut</span>
                            <span class="fa fa-cogs"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="/admin/logout"><i class="fa fa-power-off"> Logout</i></a>
                            </li>
                            <li>
                                <a href="{{URL::route('user.settings')}}"><i class="fa fa-cog"> Settings</i></a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a href="/admin/dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="/logo">
                        <i class="fa fa-image"></i> <span>Logo Create</span>
                    </a>

                </li>
                <li><a href="/menu_list"><i class="fa fa-bars" aria-hidden="true"></i><span> Menu Create</span></a></li>
                <li><a href="/footer_list"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><span> Footer Part Create</span></a>
                </li>
                <li><a href="/social_area_list"><i class="fa fa-share-alt" aria-hidden="true"></i><span> Social Icon Create</span></a>
                </li>
                <li><a href="/service-details"><i class="fa fa-cogs" aria-hidden="true"></i><span> Service Details Create</span></a>
                </li>
                <li><a href="/rider-create"><i class="fa fa-motorcycle" aria-hidden="true"></i><span> Rider Page Data Create</span></a>
                <li><a href="/api_list"><i class="fa fa-link" aria-hidden="true"></i><span> API Create</span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Home Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/slider_list"><i class="fa fa-circle-o"></i>Slider Create</a></li>
                        <li><a href="/home_section_list"><i class="fa fa-circle-o"></i>Home Sections Create</a></li>
                        <li><a href="/pager_parts"><i class="fa fa-circle-o"></i>Pager Parts Create</a></li>
                        <li><a href="/person_info_list"><i class="fa fa-circle-o"></i>Team or Client Info Create</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/review_list"><i class="fa fa-star" aria-hidden="true"></i><span> Review List</span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::route('user.index')}}"><i class="fa fa-circle-o"></i>All</a></li>
                        <li><a href="{{URL::route('user.create')}}"><i class="fa fa-circle-o"></i>Create</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('contents')

        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Copyright &copy; 2016 <a href="http://stsbd.com">ST Solutions</a>.</strong> All rights
        reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{url('/')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('/')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="{{url('/')}}/plugins/ckeditor/ckeditor.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('/')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('/')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('/')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/dist/js/app.min.js"></script>

@yield('extraScript')
</body>
</html>
