<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <title>Biddyut Logistics</title>
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

    <!-- Version 3.0 -->

    <link href="{{ asset('ico/bidyut2.png') }}" rel="shortcut icon">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('lib/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
{{--<link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/fonts/font-awesome/css/font-awesome.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/progress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <!-- Revolution Main Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/layers.css') }}">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/revolution/css/navigation.css') }}">
    <!-- CSS FILES -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js')}}"></script>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color:    #B63426;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:    #B63426;
            opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:    #B63426;
            opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color:    #B63426;
        }
        /* these styles are for the demo, but are not required for the plugin */
        .zoom {
            display:inline-block;
            position: relative;
        }
    </style>
</head>
<body>

<div class="soft-transition"></div>
<!-- end soft-transition -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
<main>
    <header class="full-header">
        <nav class="navbar navbar-default" id="sticker">
            <div class="top-bar  navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12"><a href="{{ asset(url('/merchant/registration')) }}" target="_blank"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 16px;"></i> Marchent Registration</a></div>
                        <div class="col-md-8 col-sm-6 col-xs-12 pull-right">
                            <div class="right-top-bar" style="margin-left:10px;">
                                <div class="ssl_pay_widget">
                                    <button class="btn btn-success ssl_button"> Pay Now</button>
                                </div>
                            </div>
                            <div class="right-top-bar">
                                <ul>
                                    @yield('logout')
                                    <li class="date"><span class="phone1"><a href="{{ url('http://system.biddyut.com/')}}" target="_blank"><i class="fa fa-sign-in" aria-hidden="true" style="font-size: 16px;"></i> Merchant Login</a></span></li>
                                    <li class="date"><span class="phone"><i class="ion-ios-telephone"></i> 09612433988 </span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end top-bar -->
            <div class="container">
                <div class="navbar-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <button type="button" class="navbar-toggle toggle-menu menu-left push-body"
                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span
                                        class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span></button>
                            <a class="navbar-brand" href="/?home=true"><img src="{{ asset('img/'. $logo) }}" alt="Image"></a>
                        </div>
                        <!-- end col-2 -->
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                                 id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav main-menu">
                                    @foreach ($menuItems as $menuItem)
                                        @if($loop->first)
                                            <li><a href="{{ $menuItem->bid_menu_link }}?home=true"
                                                   class="transition">{{ $menuItem->bid_menu_name }}</a></li>
                                        @else
                                            <li><a href="{{ $menuItem->bid_menu_link }}"
                                                   class="transition">{{ $menuItem->bid_menu_name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end navbar-collapse -->
                    <!-- end row -->
                </div>
                <!-- end navbar-header -->
            </div>
            <!-- end container -->
        </nav>
    </header>
    <!-- Content Wrapper. Contains page content -->

@yield('contents')


<!-- /.content-wrapper -->
    <footer class="dark-footer service-page">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4 class="title">ABOUT US</h4>
                        @foreach( $getFooterItems as $getFooterItem)
                            <p>{{ $getFooterItem->fot_about_us }}</p>
                        @endforeach
                        <ul class="social-media">
                            @foreach($getSocialAreaItems as $getSocialAreaItem)
                                <li><a href="{{ $getSocialAreaItem->socl_fb }}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="{{ $getSocialAreaItem->socl_twit }}" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                {{--<li><a href="{{ $getSocialAreaItem->socl_gp }}" target="_blank"><i class="ion-social-googleplus"></i></a></li>--}}
                                {{--<li><a href="{{ $getSocialAreaItem->socl_yt }}" target="_blank"><i class="ion-social-youtube"></i></a></li>--}}
                                {{--<li><a href="{{ $getSocialAreaItem->socl_linkdin }}" target="_blank"><i class="ion-social-linkedin"></i></a></li>--}}
                            @endforeach
                        </ul>
                    </div>
                    <!-- end col-5 -->
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4 class="title">SERVICES</h4>


                        {!! $getFooterItem->fot_serv_menu !!}

                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4 class="title">BIDDYUT</h4>
                        <ul class="footer-menu">
                            @foreach ($menuItems as $menuItem)
                                @if($loop->first)
                                    <li><a href="{{ $menuItem->bid_menu_link }}?home=true"
                                           class="transition">{{ $menuItem->bid_menu_name }}</a></li>
                                @else
                                    <li><a href="{{ $menuItem->bid_menu_link }}"
                                           class="transition">{{ $menuItem->bid_menu_name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-4">
                        <div class="newsletter">
                            <h4 class="title">NEWSLETTER</h4>
                            @foreach( $getFooterItems as $getFooterItem)
                                <p>{{ $getFooterItem->fot_news_letter }}</p>

                                <form action="{{ url('/news-letter') }}" id="news-letter-form" method="POST">
                                    {{ csrf_field() }}
                                    <input type="email" name="email" placeholder="Type your e-mail">
                                    <button type="submit">JOIN</button>
                                </form>
                                <small>We promise, we won’t spam you!</small> </div>
                        <!-- end newsletter -->
                    </div>
                    <!-- end col-2 -->
                </div>
                <!-- end row -->
                <div class="row middle-bar hide">
                        <h4>INTERNATIONAL LOGISTIC</h4>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h3>MOBILE APP</h3>
                        <p>Download our mobile applications from Google Play and Apple Store or decode QR Code just below and start using.</p>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-sm-6 col-md-5 col-xs-12">
                        <i class="icon-mobile responsive-icon"></i> <a rel='nofollow' href='#' ><img src='https://chart.googleapis.com/chart?cht=qr&amp;chl=www.Biddyut&amp;chs=90x90' alt=''></a> </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-content -->
        <div class="sub-footer">
            <div class="container"> <span class="copyright">Copyright © <?php echo date("Y") - 1; echo "-"; echo date("Y");?>,  Biddyut Logistics </span></div>
            <!-- end container -->
        </div>
    @endforeach
    <!-- end sub-footer -->

    </footer>
    <!-- end footer -->

    <!-- Start Go Top -->
    <div class="go-top-main">
        <a href="#" class="go-top  no-visibility ">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a>
    </div>
    <!-- End Go Top -->

    <div class="social-fixed-btn">
        <ul>
            <li class="social-fb">
                <a href="https://www.facebook.com/biddyutlimited" target="_blank"><i class="fa fa-facebook"></i>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbiddyutlimited&tabs=timeline&width=300&height=200&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=1743014502610525" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </a>
            </li>
            <li class="social-twitter">
                <a href="https://twitter.com/biddyutlimited" target="_blank"><i class="fa fa-twitter"></i>
                    <iframe height="50px" width="100px"
                            src="https://platform.twitter.com/widgets/tweet_button.html?size=l&url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&via=twitterdev&related=twitterapi%2Ctwitter&text=custom%20share%20text&hashtags=example%2Cdemo"

                            title="Twitter Tweet Button"
                            style="border: 0; overflow: hidden; text-align: center">
                    </iframe>
                </a>
            </li>
        </ul>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-button">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="width: 100%" class="embed-responsive-item" height="500"></iframe>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</main>

<!-- JS FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/contact-form.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('plugins/photo-zoom/jquery.zoom.min.js') }}"></script>
<!--Fixed menu bar-->
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script>

    Shaz=window.Shaz||function(){(Shaz.q=Shaz.q||[]).push(arguments)},function(){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src="http://easy.com.bd/widget_library/widget_new_biddut.js?lasdfjlksj=1";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}(),Shaz("appkey","BL-SSL");

    // for Apply form
    $('#apply').submit(function (e) {
        e.preventDefault();
        var postUrl = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: postUrl,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    $('#apply')[0].reset();
                }
                else {
                    alert(response.message);
                }

            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    });

    // for team up form
    $('#job-apply').submit(function(e){
        e.preventDefault();
        var postUrl = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: postUrl,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                if(response.success){
                    alert(response.message);
                    $('#job-apply')[0].reset();
                }
                else {
                    alert(response.message);
                }

            },
            error: function(response){
                console.log(response.responseText);
            }
        });
    });

    $('#contactForm').submit(function(e){
        e.preventDefault();
        var postUrl = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: postUrl,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                if(response.success){
                    alert(response.message);
                    $('#contactForm')[0].reset();
                }
                else {
                    alert(response.message);
                }

            },
            error: function(response){
                console.log(response.responseText);
            }
        });
    });

    var s = $("#sticker");
    var pos = s.position();
    $(window).on('scroll',function() {
        var windowpos = $(window).scrollTop();
        if (windowpos > pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }
    });
    function createCookie(name, value, days) {
        var expires;

        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name, "", -1);
    }

</script>
@yield('extraScript')

</body>

</html>