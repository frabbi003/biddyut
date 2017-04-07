@extends('layouts.extraPage')
@section('contents')

                @foreach($getLatestNewsItems as $getLatestNewsItem)
                <section class="sub-header career-breadcrumb" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$getLatestNewsItem->bid_banner_url) }}) no-repeat fixed 0 0 / cover">
                    <h5 class="page-title">NEWS</h5>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/?home=true')}}">Home</a></li>
                        <li><span class="active">News</span></li>
                    </ul>
                </section>
                <!-- end sub-header -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                <section class="news">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="section-title">RECENT NEWS</h4>
                            </div>
                            <!-- end col-12 -->
                            <div class="col-md-12">
                                <div class="blog-post">
                                    {{--<figure class="post-image"> <span class="post-date">{{ customDateFormat($getLatestNewsItem->created_at) }}</span> <img src="{{ asset('img/'.$getLatestNewsItem->bid_banner_url) }}" alt="Image"></figure>--}}
                                    {!! $getLatestNewsItem->bid_pager_html !!}
                                </div>
                                <!-- end blog-post -->
                            </div>
                            @endforeach
                            <!-- end col-9 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end news -->
            </div>
        </div>

    </div>

@endsection

