@extends('layouts.extraPage')
@section('contents')
    <!-- end full-header -->
    {{--{{ dd($aboutUsDetails) }}--}}
    @foreach($aboutUsDetails as $aboutUsDetail)
    <section class="sub-header about-us-breadcrumb" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$aboutUsDetail->bid_menu_img) }}) no-repeat  scroll top center; padding:70px 0;position:relative;">
        <h5 class="page-title">ABOUT US</h5>
        <ul class="breadcrumb">
            <li><a href="{{url('/?home=true')}}">Home</a></li>
            <li><span class="active">About Us</span></li>
        </ul>
    </section>
    @endforeach
    <!-- end sub-header -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="section-title">ABOUT BIDDYUT</h4>
                </div>
                <!-- end col-12 -->
                <div class="col-md-12 col-sm-12">
                    <!-- <h5 class="lead"><b>One of the leaders in the heavy haulage and abnormal load business</b></h5>
                    <p>Back in 1971, recognising an opportunity to serve the northeast fishing community, Douglas and Helen Spence launched a road haulage company called D & H Spence. In direct competition with Charles Alexander and Partners, who were then one of the the biggest haulage companies in Scotland, their fleet of 25 vehicles transported fresh fish from Peterhead to Humberside and Tyneside on a daily basis. Moving from their base in Laurencekirk into Aberdeen in 1980 to purchase Tullos Cold Store the company was able to diversify into hauling both fresh and frozen goods all over the UK and Europe.</p> -->
                    <blockquote>
                    @foreach($getHomeSectionItems as $getHomeSectionItem)
                        {{ $getHomeSectionItem->home_sec_desc }}
                        <!-- <p>In 1990 Douglas & Helen Spence’s son Mark joined the firm and MGS Transport was established. The following year, the first Stepframe trailer was purchased to specialise in heavy haulage and abnormal loads for the oil industry. With the addition of the first Lowloader in 1996, the company has become one of the leaders in the heavy haulage and abnormal load business.</p> -->
                    @endforeach
                    <!-- end about-features -->
                </div>
                <!-- end col-8 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="mission-vission-area">
        <div class="container">
            <div class="mission-vission-container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h5>Mission</h5>
                        {{--<img src="{{ asset('images/mission-1.jpg') }}" alt="">--}}
                        <p>
                            Biddyut Limited is an innovative logistics initiative that aims to build a better eco system
                            and changes the trend from traditional system to technologically advancement in supply chain
                            industry of Bangladesh by providing modern logistics experience to its clients.
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-4 col-sm-4">
                        <h5>Vision</h5>
                        {{--<img src="{{ asset('images/mission-2.jpg') }}" alt="">--}}
                        <p>
                            To become the most reliable logistics partner to make everyone’s life easier.
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-4 col-sm-4">
                        <h5>Tagline</h5>
                        {{--<img src="{{ asset('images/mission-3.jpg') }}" alt="">--}}
                        <p>
                            হুকুমেই হাজির
                            <!-- Lorem ipsum dolor sit amet. -->
                        </p>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </section>
    {{--<section class="our-creative-team">--}}
    {{--<div class="container">--}}
    {{--<h3 class="section-title"><span>05</span>CREATIVE TEAMS</h3>--}}
    {{--<div class="row">--}}
    {{--@foreach($personInfoItems as $personInfoItem)--}}
    {{--<div class="col-md-3 col-xs-6">--}}
    {{--<div class="single-creative-team">--}}
    {{--<div class="creative-img">--}}
    {{--<img src="{{ asset('img/'.$personInfoItem->person_img_url) }}" alt="">--}}
    {{--<div class="creative-img-hover">--}}
    {{--<p>{{ $personInfoItem->person_desc }}</p>--}}
    {{--<ul class="team-social">--}}
    {{--<li><a href="{{ $personInfoItem->person_fb_link }}"><i--}}
    {{--class="fa fa-facebook"></i></a></li>--}}
    {{--<li><a href="{{ $personInfoItem->  person_linkedin_link }}"><i--}}
    {{--class="fa fa-linkedin"></i></a></li>--}}
    {{--<li><a href="{{ $personInfoItem->person_twit_link }}"><i--}}
    {{--class="fa fa-twitter"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="members-name-post">--}}
    {{--<h5>{{ $personInfoItem->person_name }}</h5>--}}
    {{--<p>{{ $personInfoItem->person_designation }}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- end about-us -->
@endsection