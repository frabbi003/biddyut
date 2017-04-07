@extends('layouts.extraPage')
@section('logout')
    <li class="date"><a href="{{ url('/customer/logout') }}"><i class="fa fa-power-off"> LOGOUT</i></a></li>
@endsection
@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3>Successfully Logged In</h3>
            </div>
        </div>
    </div>

@endsection