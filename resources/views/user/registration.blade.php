<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <title>Biddyut Logistic</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Logistic">
    <meta name="keywords" content="logistic, transportation, package, delivery, cargo, carousel, post, moving, caring">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Biddut Logistic">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Biddut">
    <meta property="og:title" content="Biddut">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Biddut">
    <meta name="twitter:creator" content="@Biddut">
    <meta name="twitter:title" content="Biddut">
    <meta name="twitter:description" content="Biddut Logistic">
    <meta name="twitter:image" content="">

    <link href="{{ asset('ico/bidyut2.png') }}" rel="shortcut icon">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('lib/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/fonts/font-awesome/css/font-awesome.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <!-- Revolution Main Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/layers.css') }}">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/navigation.css') }}">
    <!-- CSS FILES -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <h3 class=" text-center"> @if (session('status'))
                    <div class="alert alert-danger">
                        <p>{{session('status')}}</p>
                    </div>
                @endif</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @else
        @if (session('status'))
            <div class="alert alert-success text-center">
                <p>{{session('status')}}</p>
            </div>
        @endif
    @endif


    <form class="form-horizontal" role="form" action="{{ url('/client/registration') }}" method="POST">
        {{ csrf_field() }}
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control" autofocus required>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" id="phone" name="phone" placeholder="Enter your phone number" class="form-control" autofocus required>
            </div>
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="col-sm-3 control-label" for="birthDate">Date of Birth</label>
            <div class="col-sm-9">
            <input class="form-control" id="date" name="date_of_birth" placeholder="MM/DD/YYY" type="date"/>
                </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date_of_birth"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    });
</script>
</body>
</html>