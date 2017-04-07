<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Client Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link href="{{ asset('ico/bidyut2.png') }}" rel="shortcut icon">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .log-button {
            background-color: #EC2028 !important;
            border-color: #E82027;
            color: #fff;
        }
        .log-button:hover, .log-button:active, .log-button.hover {
            background-color: #E82027;
            color: #fff;
        }
        .registration-page .panel-info>.panel-heading {
            color: #31708f;
            background-color: #eee;
            border-color: #eee;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini" style="background-image: url('../images/login-admin.jpg');">
<div class="registration-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a href="{{ url('/') }}"><img src="{{ asset('images/logo-2.png') }}" class="img-responsive center-block"></a>
            </div>
        </div>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/client/login') }}">
                        {{csrf_field()}}
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        @if (Session::has('message'))
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="alert alert-warning">
                                        <label class="text-danger">
                                            {{ Session::get('message')}}
                                        </label>
                                    </div>

                                </div>
                            </div>
                        @endif
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn log-button btn-block login">Login  </button>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account!
                                    <a href="{{ url('/client/reg') }}">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
