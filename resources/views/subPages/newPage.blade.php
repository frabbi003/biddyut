@extends('layouts.extraPage')
@section('contents')
    @foreach($menuInfo as $menuInf)
        <section class="sub-header service-breadcrumb text-left" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$menuInf->bid_menu_img) }}) no-repeat fixed 0 0 / cover">
            <h5 class="page-title">{{ $menuInf->bid_menu_name }}</h5>
            <ul class="breadcrumb">
                <li><a href="{{ url('/?home=true') }}">Home</a></li>
                <li><span class="active">{{ $menuInf->bid_menu_name }}</span></li>
            </ul>
        </section>

        <!-- end sub-header -->

        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="section-title">{{ $menuInf->bid_menu_headline }}</h4>
                    </div>
                    <!-- end col-12 -->
                    <div class="col-md-12 col-sm-12">
                            {!! $menuInf->bid_menu_desc !!}
                        @endforeach
                    </div>
                    <!-- end col-8 -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Modal end -->
@endsection
