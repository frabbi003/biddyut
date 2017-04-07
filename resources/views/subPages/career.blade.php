@extends('layouts.extraPage')
@section('contents')
    @foreach($careerPageDetails as $careerPageDetail)
    <section class="sub-header career-breadcrumb" style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$careerPageDetail->bid_menu_img) }}) no-repeat fixed 0 0 / cover">
        <h5 class="page-title">Be the One</h5>
        <ul class="breadcrumb">
            <li><a href="{{ url('/?home=true') }}">Home</a></li>
            <li><span class="active">Join</span></li>
        </ul>
    </section>
    <!-- end sub-header -->

    <section class="special-career">
        <div class="container">
            <div class="special-career-container clearfix">
                        {!! $careerPageDetail->bid_menu_desc !!}
                    @endforeach
            </div>
        </div>
    </section>
@endsection