@extends('layouts.extraPage')
@section('contents')
    <!-- end full-header -->
    @foreach($contactDetails as $contactDetail)
    <section class="sub-header contact-us-breadcrumb" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$contactDetail->bid_menu_img) }}) no-repeat  scroll top center;padding:70px 0;position:relative;">
        <h5 class="page-title">CONTACT</h5>
        <ul class="breadcrumb">
            <li><a href="/?home=true">Home</a></li>
            <li><span class="active">Contact</span></li>
        </ul>
    </section>
    <!-- end sub-header -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <!-- end col-12 -->
                <div class="col-md-8 col-sm-8">
                    <h4 class="section-title">CONTACT US</h4>
                        {!! $contactDetail->bid_menu_desc !!}

                </div>
                <!-- end col-4 -->
    @endforeach
                <!-- end col-4 -->
                <div class="col-xs-12">


                    <div class="column">
                        <div class="left-side">
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                            <div style='overflow:hidden;height:600px;width:580px; text-align: center;'>
                                <div id='gmap_canvas' style='height:600px;width:510px;'></div>
                                <div>
                                    <small><a href="http://embedgooglemaps.com">embed google maps</a></small>
                                </div>
                                <div>
                                    <small><a href="https://termsandcondiitionssample.com">terms and conditions
                                            sample</a></small>
                                </div>
                                <style>#gmap_canvas img {
                                        max-width: none !important;
                                        background: none !important
                                    }</style>
                            </div>
                            <script type='text/javascript'>function init_map() {
                                    var myOptions = {
                                        zoom: 10,
                                        center: new google.maps.LatLng(23.747474, 90.392696),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };
                                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                    marker = new google.maps.Marker({
                                        map: map,
                                        position: new google.maps.LatLng(23.747474, 90.392696)
                                    });
                                    infowindow = new google.maps.InfoWindow({content: '<strong>BIDDYUT</strong><br> 300/5/A/1,Hamid Plaza, Bir Uttam C.R Datta Road,Hatirpool, Dhaka-1205<br>'});
                                    google.maps.event.addListener(marker, 'click', function () {
                                        infowindow.open(map, marker);
                                    });
                                    infowindow.open(map, marker);
                                }
                                google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                        <!-- end left-side -->
                        <div class="right-side contact-us-breadcrumb">
                            <form action="{{ url('/send') }}" id="contactForm" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label style="font-size: 20px; font-weight: bold;color: #fff;">Your name</label>
                                    <input style="background-color: rgba(255,255,255,0.2); color: #FFF;font-size: 18px;font-weight: bold; border: none;" type="text" name="name" id="name" value="" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label style="font-size: 20px; font-weight: bold;color: #fff;">Your e-mail</label>
                                    <input style="background-color: rgba(255,255,255,0.2); color: #FFF;font-size: 18px;font-weight: bold; border: none;" type="email" name="email" id="email" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label style="font-size: 20px; font-weight: bold;color: #fff;">What about ?</label>
                                    <textarea style="background-color: rgba(255,255,255,0.2); color: #FFF;font-size: 18px;font-weight: bold; border: none;" id="text-1" name="desc"></textarea>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label style="font-size: 20px; font-weight: bold;color: #fff;">Your message</label>
                                    <textarea style="background-color: rgba(255,255,255,0.2); color: #FFF;font-size: 18px;font-weight: bold; border: none;" name="message" id="message" name="msg" required></textarea>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button id="submitBtn" type="submit" name="submit">SUBMIT</button>
                                </div>
                                <!-- end form-group -->
                            </form>
                            <div id="success" class="alert alert-success" role="alert">
                                <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
                            </div>
                            <!-- end success -->
                            <div id="error" class="alert alert-danger" role="alert">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <!-- end error -->
                        </div>
                        <!-- end right-side -->
                    </div>
                    <!-- end column -->

                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->
    <!-- end application -->

    <script>
        $('#contactForm').submit(function (e) {
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
                        $('#contactForm')[0].reset();
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

    </script>
@endsection