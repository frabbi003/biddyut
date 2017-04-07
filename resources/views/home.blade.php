@extends('layouts.extraPage')
@section('contents')
    <!-- end full-header -->
    <!-- Pop Up Modal Start -->
    <div class="openingModal-img-main" id="hukumei_hajir" style="
    background: black;
    /* width: 100%; */
    /* height: 100%; */
    position: fixed;
    z-index: 99999999999999;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    overflow: hidden;
    ">
        <div
                style="
        position: relative;
        text-align:center;
        width:100%;
        height:100%;
        /* background:#CCC; */
        /* display: none; */
      "
                class="visible-xs visible-sm"
        >
            <img src="{{ asset('images/POP-188-1.jpg') }}" alt="nothing" style="/* margin-left: auto; *//* margin-right: auto; *//* display: block; */position: absolute;margin: auto;top: 0;left: 0;right: 0;bottom: 0;">
        </div>

        <img class="openingModal-img hidden-xs hidden-sm" src="{{ asset('images/POP-188-1.jpg') }}" alt="nothing" style="/* margin-left: auto; *//* margin-right: auto; *//* display: block; *//* position: absolute; *//* margin: auto; *//* top: 0; *//* left: 0; *//* right: 0; *//* bottom: 0; */">
        <button type="submit" class="close" id="openingModalImg-btn" data-dismiss="modal" aria-label="Close"
                style="
              border: 2px solid #000;
              border-radius: 5px;
              color: #fff;
              left: calc(50% - 200px);
              opacity: 1;
              position: absolute;
              text-shadow: none;
              top: calc( 50% - 50px);
              background: rgba(182,52,38,0.5);
              height: 100px;
              width: 400px;
              transition: 0.5s;
              padding: 0 20px;
            "
        >
        <span style="
          font-size: 40px;
          font-family: 'SolaimanLipi_22022012';
          transition: 0.5s;
        " aria-hidden="true">হুকুমেই হাজির</span>
        </button>
    </div>
    <script>
        function gup( name, url ) {
            if (!url) url = location.href;
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
            var regexS = "[\\?&]"+name+"=([^&#]*)";
            var regex = new RegExp( regexS );
            var results = regex.exec( url );
            return results == null ? null : results[1];
        }
        var isShow= gup('home', window.location.href);
        console.log(isShow);
        if(isShow !=null){
            document.getElementById('hukumei_hajir').style.display = 'none';
        }
    </script>
    <!-- Start Revolution Main Slider -->
    <section class="main-slider1">
        <article class="content">
            <div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                 data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">
                <div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;"
                     data-version="5.0.7">
                    <ul>

                        @foreach ($sliderItems as $sliderItem)
                            <li data-index="rs-309{{$sliderItem->bid_slid_id}}" data-transition="scaledownfromRight"
                                data-slotamount="default" data-easein="Power4.easeIn" data-easeout="Power4.easeInOut"
                                data-thumb="{{ asset('img/'. $sliderItem->bid_slid_img_url) }}" data-rotate="0"
                                data-autoplay="true" data-fsslotamount="7" data-saveperformance="off"
                                data-title="{{$sliderItem->bid_slid_content}}" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('img/'. $sliderItem->bid_slid_img_url) }}"
                                     alt="img"
                                     data-bgposition="center center"
                                     data-kenburns="on"
                                     data-duration="10000"
                                     data-ease="Power1.easeIn"
                                     data-scalestart="150"
                                     data-scaleend="120"
                                     data-rotatestart="0"
                                     data-rotateend="0"
                                     data-offsetstart="0 -500"
                                     data-offsetend="0 500"
                                     class="rev-slidebg"
                                     data-no-retina>

                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                                     id="slide-309-layer-11"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['400','700','400','400','550']"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-style_hover="cursor:default;"
                                     data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;s:1000;"
                                     data-start="0"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"

                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-309-layer-1"
                                     data-x="['left','left','left','left','left']"
                                     data-hoffset="['265','100','100','35','30','17']"
                                     data-y="['center','center','center','center','center','center']"
                                     data-voffset="['-85','-100','-80','-50','0','160']"
                                     data-fontsize="['80','80','70','40','40','60']"
                                     data-lineheight="['100','90','60','60','60','60']"
                                     data-width="['1000','1000','600','none','500','400']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2200;e:Power2.easeInOut;"
                                     data-transform_out="x:[-105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2300;e:Power2.easeInOut;"
                                     data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-basealign="slide"
                                     data-elementdelay="0.05"
                                     data-responsive_offset="on"

                                     style="z-index: 6; white-space: nowrap; color: #F02028; font-family: Lora; font-weight: 700;">{{$sliderItem->bid_slid_content}}
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0"
                                     id="slide-309-layer-4"
                                     data-x="['left','left','left','left','left','left']"
                                     data-hoffset="['265','100','100','40','33','20']"
                                     data-y="['center','center','center','center','center','center']"
                                     data-voffset="['0','1','30','60','74','58']"
                                     data-fontsize="['30','30','20','15','15','20']"
                                     data-lineheight="['24','24','24','20']"
                                     data-width="['1000','1000','700','410','410','280']"
                                     data-height="['60','100','100','100']"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:100;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="2000"
                                     data-splitin="chars"
                                     data-splitout="none"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-responsive="on"
                                     data-startslide="0"
                                     data-endslide="1"
                                     data-elementdelay="0.05"

                                     style="z-index: 7; white-space: normal; letter-spacing: 4px; color: #fff; font-family: Lora; font-weight: 600; ">{{$sliderItem->bid_slid_content2}}
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption NotGeneric-CallToAction rs-parallaxlevel-0"
                                     id="slide-280-layer-11"
                                     data-x="['left','left','left','left','left','left']"
                                     data-hoffset="['270','10','100','30','30','0']"
                                     data-y="['center','center','center','center','center','center']"
                                     data-voffset="['70','20','60','100','100','0']"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-style_hover="cursor:default;"
                                     data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-start="1800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-responsive="on"

                                     style="z-index: 9; white-space: nowrap; padding:0px 0px 0px 0px;">
                                    <form role="search" method="GET" id="searchform-1" class="revtp-searchform"
                                          action="{{ url('/order-tracking/') }}">
                                        <input id="slider-280-layer-12"
                                               style="width: 200px; border: 4px solid #fff; background-color: transparent; font-weight: 600; color: #fff"
                                               type="text" name="order_id" value="" placeholder="Tracking ID" required/>
                                        <input id="slider-280-layer-13" class="datepicker"
                                               style="width: 100px; border: 4px solid #fff; ouline: 0; color: #fff; background-color: transparent; font-weight: 600"
                                               type="text" value="" placeholder="Date"/>
                                        <button id="slider-280-layer-14" type="submit" style="font-family: Lora;">Check Shipping</button>
                                    </form>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>

            </div>
        </article>
    </section>
    <!-- end slider -->
    <section class="featured-services">
        @if(count($getServiceSection))
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="left-side">
                        <h3 class="section-title">Services</h3>
                        @foreach($getHomeSectionItems as $getHomeSectionItem)
                            {!! $getHomeSectionItem->home_sec_services !!}
                        @endforeach
                    </div>
                    <!-- end left-side -->
                </div>

                <!-- end col-5 -->
                <div class="col-md-7">
                    <div class="right-side">
                        @foreach($getSingleSection as $getSingleSec)
                            <a href="">
                                <div class="service-box spacing">
                                    <figure><img src="{{ asset('img/'.$getSingleSec->bid_banner_url) }}" alt="Image">
                                        <figcaption>{{ $getSingleSec->bid_pager_title }}</figcaption>
                                    </figure>
                                    <div class="desc">{{ str_limit($getSingleSec->bid_pager_desc, 150) }}</div>
                                    <!-- end desc -->
                                </div>
                            </a>
                    @endforeach
                    <!-- end service-box -->
                    </div>
                    <!-- end right-side -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        @endif
        <!-- end container -->
    </section>
    <!-- end featured-services -->

    <!-- Start Company About -->
    <section class="about-main">
        <div class="container">
            <div class="col-md-12">
                @if(count($getAboutUsSection))          <!-- About Us Section -->
                <div class="row">
                    <div class="about-main-container">
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="video-bg">
                                @foreach($getAboutUsSection as $item)
                                <div class="video-img"
                                     style="display: table-cell; vertical-align: middle;text-align: center;">
                                    <img src="{{ asset('img/'.$item->home_sec_ban_url) }}" id="content" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="about-content">
                                <div class="about-details">
                                    <h3 class="section-title">ABOUT US</h3>
                                    <p>
                                        {{ str_limit($item->home_sec_desc, 250) }}
                                    </p>
                                    <a href="/about-us" class="btn btn-warning btn-md">Read More</a>
                                </div>
                                @endforeach
                                @endif
                                @if(count($getCountSection))
                                <div class="our-success-counter">
                                    <div class="row">
                                        @foreach($getCountItems as $getCountItem)
                                            <div class="col-sm-4">
                                                <div class="single-success-counter">
                                                    <!-- <i class="pe-7s-users"></i> -->
                                                    <div class="counter-img">
                                                        <img src="{{ asset('img/'.$getCountItem->bid_banner_url) }}"
                                                                 alt="">
                                                    </div>
                                                    <span class="counter">{{ $getCountItem->bid_pager_position }}</span>
                                                    <p>{{ $getCountItem->bid_pager_title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Company About -->
    @if(count($getCalculateSection))
    <section class="calculate-shipping">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h3 class="section-title">CALCULATE </h3>
                    <form action="{{ url('/charge')}}" method="POST" id="cal-Charge">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <fieldset>
                                    <legend>Pickup:</legend>
                                    <div class="form-group">
                                        <label>Division</label>
                                        <select class="form-control" id="divisionId">
                                            <option selected disabled>Select Division</option>
                                            @foreach($getDivision as $getDiv)
                                                <option value="{{ $getDiv->id }}"
                                                        name="pic_div_id">{{ $getDiv->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control" name="pic_dist_id" id="districtId"
                                                onchange="getZoneId()">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group">
                                        <label>Zone</label>
                                        <select class="service-type" name="pic_zone_id" id="zoneId">
                                            <option value="">Select Zone</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <div class="form-group">
                                    <label class="cat">Product Category</label>
                                    <select class="service-type" name="product_category_id">
                                        <option>Select Category</option>
                                        @foreach($getCatagoryId->response as $getCatagory)
                                            <option value="{{ $getCatagory->product_category_id }}">{{ $getCatagory->product_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input class="service-type" name="quantity" type="number" min="1">
                                </div>
                            </div>
                            <!-- col-6 -->
                            <div class="col-md-6 col-sm-6">
                                <fieldset>
                                    <legend>Delivery:</legend>
                                    <div class="form-group">
                                        <label>Division</label>
                                        <select class="form-control" id="divisionId2">
                                            <option selected disabled>Select Division</option>
                                            @foreach($getDivision as $getDiv)
                                                <option value="{{ $getDiv->id }}"
                                                        name="del_div_id">{{ $getDiv->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control" id="districtId2" name="del_dist_id"
                                                onchange="getZoneId2()">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group">
                                        <label>Zone</label>
                                        <select class="service-type" id="zoneId2" name="del_zone_id">
                                            <option value="">Select Zone</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <div class="form-group size-field">
                                    <label class="cat">Box Size</label>
                                    <input type="text" name="width" placeholder="cm">
                                    <span>x</span>
                                    <input type="text" name="height" placeholder="cm">
                                    <span>x</span>
                                    <input type="text" name="length" placeholder="cm">
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <small>The Field below will show the double of the number about BDT</small>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" id="charge" value="" disabled>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button type="submit" onclick="getCharge()">CALCULATE</button>
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- col-6 -->
                        </div>
                        <!-- end row -->
                    </form>

                </div>
                <!-- end col-8 -->
                <div class="col-md-4 hidden-sm hidden-xs">
                    @foreach($getCalculateItems as $getCalculateItem)
                            <figure>
                                {{--<span class='zoom ex1'>--}}
                                    <img src="{{ asset('img/'.$getCalculateItem->bid_banner_url) }}" id="content2" alt="Image') }}">
                                {{--</span>--}}
                            </figure>
                    @endforeach
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endif
    <!-- end calculate-shipping -->

    <!-- Start Our Speciality -->
    <section class="our-speciality">
        <div class="container">
            @if(count($getSpeciltySection))
            <div class="col-md-12">
                <div class="row">
                    <h3 class="section-title">OUR SPECIALTY</h3>
                </div>
                <div class="row">
                    @foreach($getSpecilityItems as $getSpecilityItem)
                        <div class="col-md-6 no-padding">
                            <div class="single-our-speciality">
                                <div class="col-md-6 no-padding">
                                    <div class="speciality-img right-arrow">
                                            <img src="{{ asset('img/'.$getSpecilityItem->bid_banner_url) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 no-padding">
                                    <div class="speciality-content special-read-more">
                                        {!! str_limit($getSpecilityItem->bid_pager_html, 120) !!}
                                        <a href="#" data-toggle="modal" data-target="#specialModal{{ $getSpecilityItem->bid_pager_id }}">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
                @endif
        </div>
    </section>
    <!-- specilty modal -->
    @foreach($getSpecilityItems as $getSpecilityItem)
    <div class="modal fade latest-modal" id="specialModal{{ $getSpecilityItem->bid_pager_id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="services">
                                {!! $getSpecilityItem->bid_pager_html !!}
                                <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Specialty Modal -->
    <!-- End Our Speciality -->

    <!-- Start Creative Team -->
    @if(count($getTeamAndClientSection))
    <section class="our-creative-team">
    <div class="container">
    <h3 class="section-title">CREATIVE TEAMS</h3>
    <div class="row">
    @foreach($personInfoItems as $personInfoItem)
    <div class="col-md-3 col-xs-6">
    <div class="single-creative-team">
    <div class="creative-img">
    <img src="{{ asset('img/'.$personInfoItem->person_img_url) }}" alt="">
    <div class="creative-img-hover">
    <p>{{ $personInfoItem->person_desc }}</p>
    <ul class="team-social">
    <li><a href="{{ $personInfoItem->person_fb_link }}"><i
    class="fa fa-facebook"></i></a></li>
    <li><a href="{{ $personInfoItem->  person_linkedin_link }}"><i
    class="fa fa-linkedin"></i></a></li>
    <li><a href="{{ $personInfoItem->person_twit_link }}"><i
    class="fa fa-twitter"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="members-name-post">
    <h5>{{ $personInfoItem->person_name }}</h5>
    <p>{{ $personInfoItem->person_designation }}</p>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    </section>
    @endif
    <!-- End Creative Team -->

    <!-- Start Step Features -->
    @if(count($getWorkWithUsSection))
    <section class="steps-features">
        <div class="container">
            <h3 class="section-title">WORK WITH US</h3>
            <div class="row spacing">
                @foreach($getFeaturesItems as $getFeaturesItem)
                    <div class="col-md-4 col-sm-4 spacing">
                        @if(($getFeaturesItem->bid_pager_position)==1)
                            <div class="step-box bg-1"
                                 style="background-image: url({{ asset('img/'.$getFeaturesItem->bid_banner_url) }});">
                                <h3>{{ $getFeaturesItem->bid_pager_title }}</h3>
                                <p>{{ $getFeaturesItem->bid_pager_desc }}</p>
                                <a href="{{ url('/career') }}">Be The One</a>
                                @elseif(($getFeaturesItem->bid_pager_position)==2)
                                    <div class="step-box bg-2 featured"
                                         style="background-image: url({{ asset('img/'.$getFeaturesItem->bid_banner_url) }});">
                                        <h3>{{ $getFeaturesItem->bid_pager_title }}</h3>
                                        <p>{{ $getFeaturesItem->bid_pager_desc }}</p>
                                        <a href="{{ url('/merchant/registration')}}" target="_blank">Team Up</a>
                                        {{--<a href="#" data-toggle="modal" data-target="#featuresModal">Team Up</a>--}}
                                        @else
                                            <div class="step-box bg-3"
                                                 style="background-image: url({{ asset('img/'.$getFeaturesItem->bid_banner_url) }});">
                                                <h3>{{ $getFeaturesItem->bid_pager_title }}</h3>
                                                <p>{{ $getFeaturesItem->bid_pager_desc }}</p>
                                                <a href="{{ url('/features') }}">Read More</a>
                                                @endif

                                            </div>
                                            <!-- end step-box -->
                                    </div>
                                @endforeach
                                <!-- end col-4 -->
                            </div>
                            <!-- end row -->
                    </div>
                    <!-- end container -->
    </section>
    @endif
    <!-- end steps-features -->
    @if(count($getClientSection))
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content-carousel">
                        @foreach($getClientInfoItems as $getClientInfoItem)
                            <div>
                                    <figure>
                                    <span class='zoom ex1'>
                                        <img src="{{ asset('img/'.$getClientInfoItem->person_img_url) }}"
                                                 class="img-responsive" alt="Image">
                                    </span>
                                    </figure>
                                <blockquote>{{ $getClientInfoItem->person_desc }}</blockquote>
                                <i class="ion-android-hangout"></i>
                                <h4>{{ $getClientInfoItem->person_name }}</h4>
                                <small>{{ $getClientInfoItem->person_designation }}</small>
                                <div class="client-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    @endforeach
                    <!-- end div -->
                    </div>
                    <!-- end content-carousel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endif
    <!-- end testimonials -->
    @if(count($getLatestNewsSection))
    <section class="latest-news">
    <div class="container">
    <div class="row spacing">
    <div class="col-xs-12 spacing">
    <h3 class="section-title">LATEST NEWS</h3>
    </div>
    <!-- end col-12 -->
    @foreach($getLatestNewsItems as $getLatestNewsItem)
    <div class="col-md-4 col-sm-6 spacing">

    @if(($getLatestNewsItem->bid_pager_position) == 2)
    <div class="news-box">
    <div class="news-caption">
    {!! str_limit($getLatestNewsItem->bid_pager_html, 100) !!}
    <a href="{{ url('/latest-news').'/'.$getLatestNewsItem->bid_pager_id }}">READ
    MORE</a>
    </div>
    <!-- end news-caption -->
    <figure><img src="{{ asset('img/'.$getLatestNewsItem->bid_banner_url) }}"
    alt="Image"><span
    class="date">{{ customDateFormat($getLatestNewsItem->created_at) }}</span>
    </figure>
    </div>
    @else
    <div class="news-box">
    <figure><img src="{{ asset('img/'.$getLatestNewsItem->bid_banner_url) }}"
    alt="Image"><span
    class="date">{{ customDateFormat($getLatestNewsItem->created_at) }}</span>
    </figure>
    <div class="news-caption">
    {{--{!! $getLatestNewsItem->bid_pager_html !!}--}}
    {!! str_limit($getLatestNewsItem->bid_pager_html, 100) !!}
    <a href="{{ url('/latest-news/').'/'.$getLatestNewsItem->bid_pager_id }}">READ
    MORE</a>
    </div>
    <!-- end news-caption -->
    </div>
    @endif

    <!-- end news-box -->
    </div>
    @endforeach

    <!-- end col-4 -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </section>
    @endif
    <!-- end latest-news -->

    <section class="clients">
        <div class="container">
            @if(count($getLogoSection))
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                    @foreach($getBrandLogoItems as $getBrandLogoItem)
                    <li>
                    <figure>
                    <a href=""><img src="{{ asset('img/'.$getBrandLogoItem->bid_banner_url) }}"
                    alt="Image"></a>
                    </figure>
                    </li>
                    @endforeach

                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
        @endif
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Start FAQ -->
    @if(count($getQuestionSection))
    <section class="faq-section" style="background-image: url({{ asset('/images/23.jpg') }})">
        <div class="faq-section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Frequently Asked Questions</h3>
                    </div>
                    <div class="faq clearfix style1">
                        <div class="panel-group" id="accordion-three" role="tablist" aria-multiselectable="true">
                            <div class="col-md-12">
                                @foreach($getQuestionsItems as $getQuestionsItem)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne{{ $getQuestionsItem->bid_pager_id }}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion-three" href="#collapseOne{{ $getQuestionsItem->bid_pager_id }}" aria-expanded="true" aria-controls="collapseOne{{ $getQuestionsItem->bid_pager_id }}">
                                                {{ $getQuestionsItem->bid_pager_desc }}                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne{{ $getQuestionsItem->bid_pager_id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne{{ $getQuestionsItem->bid_pager_id }}">
                                        <div class="panel-body">
                                            {!! $getQuestionsItem->bid_pager_html !!}                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="more-questions text-center">
                        <button type="submit" id="haveMore">HAVE MORE QUESTIONS?</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @endif
    <!-- End FAQ -->
@if(count($getContactSection))
    <section class="about-intro parent">
        @foreach($getContactsInfo as $getContactsInf)
            <div class="left-side">
                <div class="content-box">
                    <h3 class="section-title">CONTACT US</h3>
                    {!! $getContactsInf->bid_pager_html !!}
                    <div class="fun-facts hide">
                        <h5>FUN FACTS</h5>
                        <div class="fun-box"><i class="ion-trophy"></i> <span class="title">GETTED AWARDS</span> <span
                                    class="plus">+</span><b class="counter">1.246</b></div>
                        <!-- end fun-box -->
                        <div class="fun-box"><i class="ion-umbrella"></i> <span
                                    class="title">CARRIED PACKAGE</span><span class="plus">+</span><b class="counter">2.638</b>
                        </div>
                        <!-- end fun-box -->
                    </div>
                    <!-- end fun-facts -->
                </div>
                <!-- end content-box -->
            </div>
            <!-- end left-side -->
            <div class="right-side"
                 style="background-image: url({{ asset('img/'.$getContactsInf->bid_banner_url) }});background-position: 80% 0;">
                <div class="overlay parent text-center">
                    <div><a href="/contact">
                            <button type="submit" class="btn btn-lg">CONTACT US</button>
                        </a></div>
                </div>
            </div>
    @endforeach
    <!-- end left-side -->
    </section>
    @endif
    <!-- end about-intro -->
@if(count($getContactSection))
    <div class="application hide"><img src="{{ asset('img/'.$getContactsInf->bid_banner_url) }}" alt="Image"></div>
    <!-- end application -->
    @endif
@endsection
<!-- end footer -->
@section('extraScript')

    <script>
        $('#news-letter-form').submit(function (e) {
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
                        $('#news-letter-form')[0].reset();
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
        $('#team_up').submit(function (e) {
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
                        $('#team_up')[0].reset();
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
        var dist_url;
        $(document).on("change", "#divisionId", function () {
            var divisionId = this.value;
            dist_url = "/get-city/" + divisionId;
            $.ajax({
                type: "GET",
                url: dist_url,
                success: function (data) {
                    $('#districtId').empty();
                    $.each(data, function (index, data) {
                        $('#districtId').append('<option value="' + data.id + '">' + data.name + '</option>');
                    });
                    getZoneId();
                }
            });
        });

        function getZoneId() {
            var zoneId = $("#districtId").val();
            $.ajax({
                type: "GET",
                url: "/get-zone/" + zoneId,

                success: function (data) {
                    $('#zoneId').empty();
                    $.each(data, function (index, data) {
                        $('#zoneId').append('<option value="' + data.id + '">' + data.name + '</option>');
                    });
                }
            });
        }
        var dist_url2;
        $(document).on("change", "#divisionId2", function () {
            var divisionId2 = this.value;
            dist_url2 = "/get-city/" + divisionId2;
            $.ajax({
                type: "GET",
                url: dist_url2,
                success: function (data) {
                    $('#districtId2').empty();
                    $.each(data, function (index, data) {
                        $('#districtId2').append('<option value="' + data.id + '">' + data.name + '</option>');
                    });
                    getZoneId2();
                }
            });
        });

        function getZoneId2() {
            var zoneId2 = $("#districtId2").val();
            $.ajax({
                type: "GET",
                url: "/get-zone/" + zoneId2,

                success: function (data) {
                    $('#zoneId2').empty();
                    $.each(data, function (index, data) {
                        $('#zoneId2').append('<option value="' + data.id + '">' + data.name + '</option>');
                    });
                }
            });
        }

        $('#cal-Charge').submit(function () { // catch the form's submit event
            $.ajax({ // create an AJAX call...
                data: $(this).serialize(), // get the form data
                type: $(this).attr('method'), // GET or POST
                url: $(this).attr('action'), // the file to call
                success: function (response) { // on success...
                    $('#charge').val(response.data.product_total_delivery_charge);
                },
                error: function (response) {
                    alert(response.message);
                    $('#cal-Charge')[0].reset();
                }
            });
            return false; // cancel original event to prevent form submitting
        });
        var s = $("#sticker");
        var pos = s.position();
        $(window).on('scroll', function () {
            var windowpos = $(window).scrollTop();
            if (windowpos > pos.top) {
                s.addClass("stick");
            } else {
                s.removeClass("stick");
            }
        });

        // jQuery zoom for image
        $(document).ready(function(){
            $('#content').hover(function() {
                $("#content").addClass('transitions');

            }, function() {
                $("#content").removeClass('transitions');
            });
        });
        $('#content2').hover(function() {
            $("#content2").addClass('transitions');

        }, function() {
            $("#content2").removeClass('transitions');
        });

        // Jquery Have More Questions
        $(document).ready(function(){
            $('#haveMore').on('click',function(e) {
                e.preventDefault();

                var i = 0;
                $('#accordion-three .panel-default').each(function(){
                    var currnet = $(this);

                    i++;
                    if(i > 8){
                        currnet.css( "display", "block" );
                    }
                })
            });
        });

        $("#openingModalImg-btn").click(function(){
            $(".openingModal-img-main").slideUp(1000);

        });
    </script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('lib/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('lib/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
@endsection

