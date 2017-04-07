@extends('layouts.extraPage')
@section('contents')
    @foreach($serviceContant as $serviceImage)
            <section class="sub-header service-breadcrumb text-left" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$serviceImage->bid_menu_img) }}) no-repeat fixed 0 0 / cover">
                        <h5 class="page-title">SERVICES</h5>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/?home=true') }}">Home</a></li>
                            <li><span class="active">Services</span></li>
                        </ul>
            </section>

            <!-- end sub-header -->

            <section class="fastest-reliable-service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fastest-reliable-header text-center">
                                <h3>
                                    {{ $serviceImage->bid_menu_headline }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach($getServiceDetails as $getServices)
                        <div class="col-md-4">
                            <div class="single-fastest-service six-services" style="background: rgba(214, 223, 35, 1) none repeat scroll 0 0; none repeat scroll 0 0;">
                                <div class="single-fastest-left">
                                    <!-- <i class="fa fa-snowflake-o"></i> -->
                                    <i class="{{ $getServices->bid_pager_url }}" aria-hidden="true"></i>
                                </div>
                                <div class="single-fastest-right">
                                    <h5>{{ $getServices->bid_pager_title }}:</h5>
                                    <p>
                                        {{ $getServices->bid_pager_desc }}
                                    </p>
                                    <a href="#" data-toggle="modal" data-target="#productModal{{ $getServices->bid_pager_id }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-chose-biddyut-main text-center" style="background: rgba(0, 0, 0, 0) url({{ asset('images/why-chose-biddyut-1.jpg') }}) no-repeat fixed 0 100% / cover ;">
                <div class="container">
                    <div class="why-chose-biddyut-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Why Biddyut?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="why-chose-biddyut-content">
                        <div class="row">
                            @foreach($getSingleSection as $getSingleSec )
                            <div class="col-md-4">
                                <div class="single-why-chose">
                                    <!-- <i class="fa fa-skyatlas"></i> -->
                                    @if(($getSingleSec->bid_pager_position) == 1)
                                    <i class="fa fa-clock-o"></i>
                                    <h5>{{ $getSingleSec->bid_pager_title }}</h5>
                                    <p>
                                        {{ $getSingleSec->bid_pager_desc }}
                                    </p>
                                    @elseif(($getSingleSec->bid_pager_position) == 2)
                                        <i class="fa fa-paw"></i>
                                        <h5>{{ $getSingleSec->bid_pager_title }}</h5>
                                        <p>
                                            {{ $getSingleSec->bid_pager_desc }}
                                        </p>
                                    @else
                                        <i class="fa fa-whatsapp"></i>
                                        <h5>{{ $getSingleSec->bid_pager_title }}</h5>
                                        <p>
                                            {{ $getSingleSec->bid_pager_desc }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        <!-- end row -->
    <!-- Modal Start-->
            @foreach($getServiceDetails as $getServices)
    <div class="modal fade latest-modal" id="productModal{{ $getServices->bid_pager_id }}" tabindex="-1" role="dialog">
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
                                    {!! $getServices->bid_pager_html !!}
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
    <!-- Modal end -->
@endsection
