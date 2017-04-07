<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merchant Registration</title>
    <meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
    <meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
    <meta name="author" content="Codrops" />
    <link href="{{ asset('ico/bidyut2.png') }}" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cs-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cs-skin-boxes.css') }}" />
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>
<body>
<div class="container">

    <div class="fs-form-wrap" id="fs-form-wrap" style="background-image: url('../images/login-admin.jpg');">
        <div class="fs-title">
            <h1>Merchant Registration</h1>
        </div>
        <form id="myform" class="fs-form fs-form-full" autocomplete="off" action="{{ url('/merchant/registration') }}" method="POST">
            {{ csrf_field() }}
            <ol class="fs-fields">
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q1">What's your name?<span class="required"> *</span></label>
                    <input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Enter Your Name" required/>
                </li>
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?<span class="required"> *</span></label>
                    <input class="fs-anim-lower" id="q2" name="email" type="email" placeholder="test@test.com" required/>
                </li>
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q3" data-info="We won't send you spam, we promise...">Type your Password<span class="required"> *</span></label>
                    <input class="fs-anim-lower" id="q3" name="password" type="password" placeholder="******" required/>
                </li>
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q4" data-info="We won't send you spam, we promise...">What's your phone number?<span class="required"> *</span></label>
                    <input class="fs-anim-lower" id="q4" name="phone" type="text" placeholder="+8801*********" required/>
                </li>
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q5" data-info="We won't send you spam, we promise...">What's your Birth date?</label>
                    <input class="fs-anim-lower" id="q5" name="date_of_birth" type="date" placeholder="MM/DD/YYYY"/>
                </li>
            </ol><!-- /fs-fields -->
            <button class="fs-submit" type="submit">Submit</button>
        </form><!-- /fs-form -->
    </div><!-- /fs-form-wrap -->

</div><!-- /container -->
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/selectFx.js') }}"></script>
<script src="{{ asset('js/fullscreenForm.js') }}"></script>
<script>
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
</script>
</body>
</html>