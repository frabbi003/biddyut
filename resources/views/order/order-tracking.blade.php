@extends('layouts.extraPage')
@section('contents')
    <div class="container">
        <div class="row">
            @if($responseData)
                <div class="col-md-12">
                    <div class="progressCircle">


                        @if($responseData->response->order_status == "Order")
                            <div>
                                <div class="circle done">
                                    <span class="label">1</span>
                                    <span class="title">Order</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">2</span>
                                    <span class="title">Picked</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">3</span>
                                    <span class="title">Received</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">4</span>
                                    <span class="title">Transit</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">5</span>
                                    <span class="title">Complete</span>
                                </div>
                            </div>
                        @elseif($responseData->response->order_status == "Picked")
                            <div>
                                <div class="circle done">
                                    <span class="label">1</span>
                                    <span class="title">Order</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">2</span>
                                    <span class="title">Picked</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">3</span>
                                    <span class="title">Received</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">4</span>
                                    <span class="title">Transit</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle">
                                    <span class="label">5</span>
                                    <span class="title">Complete</span>
                                </div>
                            </div>
                        @elseif($responseData->response->order_status == "Received")
                            <div>
                                <div class="circle done">
                                    <span class="label">1</span>
                                    <span class="title">Order</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">2</span>
                                    <span class="title">Picked</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">3</span>
                                    <span class="title">Received</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle ">
                                    <span class="label">4</span>
                                    <span class="title">Transit</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle ">
                                    <span class="label">5</span>
                                    <span class="title">Complete</span>
                                </div>
                            </div>
                        @elseif($responseData->response->order_status == "In Transit")
                            <div>
                                <div class="circle done">
                                    <span class="label">1</span>
                                    <span class="title">Order</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">2</span>
                                    <span class="title">Picked</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">3</span>
                                    <span class="title">Received</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">4</span>
                                    <span class="title">Transit</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle ">
                                    <span class="label">5</span>
                                    <span class="title">Complete</span>
                                </div>
                            </div>
                        @elseif($responseData->response->order_status == "Complete")
                            <div>
                                <div class="circle done">
                                    <span class="label">1</span>
                                    <span class="title">Order</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">2</span>
                                    <span class="title">Picked</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">3</span>
                                    <span class="title">Received</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">4</span>
                                    <span class="title">Transit</span>
                                </div>
                                <span class="bar done"></span>

                                <div class="circle done">
                                    <span class="label">5</span>
                                    <span class="title">Complete</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
        {{--{{ dd($message) }}--}}
        @if($responseData)
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 track-list">
                        <br>
                        <h3 style="color: #B63426;"><strong>Order Information</strong></h3><br>
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Order ID:</td>
                                <td>{{ $responseData->response->order_id }}</td>
                            </tr>
                            <tr>
                                <td>Merchant Name:</td>
                                <td>{{ $responseData->response->order_merchant }}</td>
                            </tr>
                            <tr>
                                <td>Order Status:</td>
                                <td>{{ $responseData->response->order_status }}</td>
                            </tr>
                            @foreach($responseData->response->sub_orders as $sub_order)
                                <tr>
                                    <td>Sub Order ID:</td>
                                    <td>{{ $sub_order->sub_order_id }}</td>
                                </tr>
                                <tr>
                                    <td>Sub Order ID:</td>
                                    <td>{{ $sub_order->sub_order_status }}</td>
                                </tr>
                                @foreach($sub_order->products as $product)
                                    <tr>
                                        <td>Product Name:</td>
                                        <td>{{ $product->product_title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Category:</td>
                                        <td>{{ $product->product_category }}</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity:</td>
                                        <td>{{ $product->product_quantity }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <a href="#" data-toggle="modal" data-target="#trackAgainBigBtn">
                                <button type="" class="btn btn-primary btn-block">Track again!</button>
                            </a>
                        </div>
                    </div>
                    <div class="box-body pad">
                        <form role="form" action="{{ url('/review') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="order_tracking_number"
                                   value="{{ $responseData->response->order_id }}">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <br>
                                    <h3 style="color: #B63426;"><strong>Quality of Product</strong></h3>
                                    <div class="rating">
                                        @if(count($reviewDetails))
                                            @foreach($reviewDetails as $rate)
                                                @if(($rate->order_rate)/20 == 5)
                                                    <input type="radio" id="star5" name="order_rate" value="5" checked/>
                                                    <label for="star5" title="Rocks!"></label>
                                                    <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                            for="star4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                            for="star3" title="Meh">3 stars</label>
                                                    <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                            for="star2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                            for="star1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->order_rate)/20 == 4)
                                                    <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                            for="star5" title="Rocks!"></label>
                                                    <input type="radio" id="star4" name="order_rate" value="4" checked/>
                                                    <label for="star4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                            for="star3" title="Meh">3 stars</label>
                                                    <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                            for="star2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                            for="star1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->order_rate)/20 == 3)
                                                    <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                            for="star5" title="Rocks!"></label>
                                                    <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                            for="star4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="star3" name="order_rate" value="3" checked/>
                                                    <label for="star3" title="Meh">3 stars</label>
                                                    <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                            for="star2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                            for="star1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->order_rate)/20 == 2)
                                                    <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                            for="star5" title="Rocks!"></label>
                                                    <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                            for="star4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                            for="star3" title="Meh">3 stars</label>
                                                    <input type="radio" id="star2" name="order_rate" value="2" checked/>
                                                    <label for="star2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                            for="star1" title="Sucks big time">1 star</label>
                                                @elseif($rate->order_rate)/20 == 1)
                                                <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                        for="star5" title="Rocks!"></label>
                                                <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                        for="star4" title="Pretty good">4 stars</label>
                                                <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                        for="star3" title="Meh">3 stars</label>
                                                <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                        for="star2" title="Kinda bad">2 stars</label>
                                                <input type="radio" id="star1" name="order_rate" value="1" checked/>
                                                <label for="star1" title="Sucks big time">1 star</label>
                                                @else
                                                    <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                            for="star5" title="Rocks!"></label>
                                                    <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                            for="star4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                            for="star3" title="Meh">3 stars</label>
                                                    <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                            for="star2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                            for="star1" title="Sucks big time">1 star</label>
                                                @endif
                                            @endforeach
                                        @else
                                            <input type="radio" id="star5" name="order_rate" value="5"/><label
                                                    for="star5" title="Rocks!"></label>
                                            <input type="radio" id="star4" name="order_rate" value="4"/><label
                                                    for="star4" title="Pretty good">4 stars</label>
                                            <input type="radio" id="star3" name="order_rate" value="3"/><label
                                                    for="star3" title="Meh">3 stars</label>
                                            <input type="radio" id="star2" name="order_rate" value="2"/><label
                                                    for="star2" title="Kinda bad">2 stars</label>
                                            <input type="radio" id="star1" name="order_rate" value="1"/><label
                                                    for="star1" title="Sucks big time">1 star</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <h3 style="color: #B63426;"><strong>Delivery Service</strong></h3>
                                    <div class="drating">
                                        @if(count($reviewDetails))
                                            @foreach($reviewDetails as $rate)
                                                @if(($rate->del_rate)/20 == 5)
                                                    <input type="radio" id="starr5" name="del_rate" value="5" checked/>
                                                    <label for="starr5" title="Rocks!"></label>
                                                    <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                            for="starr4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                            for="starr3" title="Meh">3 stars</label>
                                                    <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                            for="starr2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                            for="starr1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->del_rate)/20 == 4)
                                                    <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                            for="starr5" title="Rocks!"></label>
                                                    <input type="radio" id="starr4" name="del_rate" value="4" checked/>
                                                    <label for="starr4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                            for="starr3" title="Meh">3 stars</label>
                                                    <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                            for="starr2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                            for="starr1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->del_rate)/20 == 3)
                                                    <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                            for="starr5" title="Rocks!"></label>
                                                    <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                            for="starr4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="starr3" name="del_rate" value="3" checked/>
                                                    <label for="starr3" title="Meh">3 stars</label>
                                                    <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                            for="starr2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                            for="starr1" title="Sucks big time">1 star</label>
                                                @elseif(($rate->del_rate)/20 == 2)
                                                    <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                            for="starr5" title="Rocks!"></label>
                                                    <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                            for="starr4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                            for="starr3" title="Meh">3 stars</label>
                                                    <input type="radio" id="starr2" name="del_rate" value="2" checked/>
                                                    <label for="starr2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                            for="starr1" title="Sucks big time">1 star</label>
                                                @elseif($rate->del_rate)/20 == 1)
                                                <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                        for="starr5" title="Rocks!"></label>
                                                <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                        for="starr4" title="Pretty good">4 stars</label>
                                                <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                        for="starr3" title="Meh">3 stars</label>
                                                <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                        for="starr2" title="Kinda bad">2 stars</label>
                                                <input type="radio" id="starr1" name="del_rate" value="1" checked/>
                                                <label for="starr1" title="Sucks big time">1 star</label>
                                                @else
                                                    <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                            for="starr5" title="Rocks!"></label>
                                                    <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                            for="starr4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                            for="starr3" title="Meh">3 stars</label>
                                                    <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                            for="starr2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                            for="starr1" title="Sucks big time">1 star</label>
                                                @endif
                                            @endforeach
                                        @else
                                            <input type="radio" id="starr5" name="del_rate" value="5"/><label
                                                    for="starr5" title="Rocks!"></label>
                                            <input type="radio" id="starr4" name="del_rate" value="4"/><label
                                                    for="starr4" title="Pretty good">4 stars</label>
                                            <input type="radio" id="starr3" name="del_rate" value="3"/><label
                                                    for="starr3" title="Meh">3 stars</label>
                                            <input type="radio" id="starr2" name="del_rate" value="2"/><label
                                                    for="starr2" title="Kinda bad">2 stars</label>
                                            <input type="radio" id="starr1" name="del_rate" value="1"/><label
                                                    for="starr1" title="Sucks big time">1 star</label>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <br><br>
                            <div class="col-md-6">
                                <div class="box-body">
                                    <div class="form-group" id="pageUrl">
                                        <label><b>Name</b></label>
                                        <input type="text" class="form-control" id="" name="name"
                                               placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group" id="pageTitle">
                                        <label><b>Email</b></label>
                                        <input type="email" class="form-control" id="" name="email"
                                               placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group" id="pageTitle">
                                        <label><b>Phone</b></label>
                                        <input type="text" class="form-control" id="" name="phone"
                                               placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="form-group" id="pageDesc">
                                        <label><b>Comment</b></label>
                                        <textarea class="form-control" name="comment" rows="3"
                                                  placeholder="Enter your message"></textarea>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row" style="margin-top: 100px;">
                <div class="container">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            {{ $message }}<span style="float: right;"><a href="{{ asset(url('/?home=true')) }}"
                                                                         style=" color: deepskyblue;"><b><u>Back Home</u></b></a></span>
                        </div>
                    </div>
                </div>
            </div>

        @endif

    </div>
    <div class="modal fade latest-modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modaltop">
                <div class="modal-header modHeader">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="alert alert-success">
                            <h2>Thank You!</h2>
                            <h4>Your review successfully added.</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="" id="trackAgainBtn" class="btn btn-primary pull-left">Track again!</button>
                    <button type="" class="btn btn-success" data-dismiss="modal" aria-label="Close">OK</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade latest-modal" id="trackModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modaltop">
                <div class="modal-header modHeader">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                </div>
                <form role="search" method="GET" id="searchform-1" action="{{ url('/order-tracking/') }}">
                    <div class="modal-body">
                        <div class="modal-body">
                            <input id="" type="text" name="order_id" value="" placeholder="Tracking ID" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="" type="submit" style="font-family: Lora;">Check Shipping</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade latest-modal" id="trackAgainBigBtn" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modaltop">
                <div class="modal-header modHeader">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                </div>
                <form role="search" method="GET" id="searchform-1" action="{{ url('/order-tracking/') }}">
                    <div class="modal-body">
                        <div class="modal-body">
                            <input id="" type="text" name="order_id" value="" placeholder="Tracking ID" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="" type="submit" style="font-family: Lora;">Check Shipping</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extraScript')
    <script>
        $(document).ready(function () {
            var isSubmit = {{$isSubmited}};
            if (isSubmit) {
                $('#successModal').modal('show');
            }
            $('#trackAgainBtn').click(function () {
                $('#successModal').modal('hide');
                $('#trackModal').modal('show');
            });
        });
    </script>
@endsection