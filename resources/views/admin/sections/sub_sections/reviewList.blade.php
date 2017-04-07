@extends('layouts.master')
@section('contents')
    <style>
        .modal-header {
            padding: 15px;
            border-bottom: 1px solid #ffba00;
            background-color: #ffba00;
        }
        .latest-modal .modal-content {
            background: #fff none repeat scroll 0 0;
        }
        .latest-modal .close {
            opacity: 1;
        }
        .latest-modal .close:hover span {
            color: #fff;
        }
        .modal.latest-modal {
            top: 50px;
        }
    </style>
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h2 class="box-title">All Reviews</h2>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-hover">

                                    <tr>
                                        <th>Order Track ID</th>
                                        <th>Email ID</th>
                                        <th>Rating</th>
                                        <th>More</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                    <tbody>
                                    @foreach($reviewList as $list)
                                        <tr>
                                            <td>
                                                <b>{{ $list->order_tracking_number }}</b>
                                            </td>
                                            <td>
                                                {{ $list->email }}
                                            </td>
                                            <td>
                                                @if(($list->order_rate)==100)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                @elseif(($list->order_rate)==80)
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                @elseif(($list->order_rate)==60)
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                @elseif(($list->order_rate)==40)
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                @elseif(($list->order_rate)==20)
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                @else
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                @endif
                                            </td>
                                            <td><span><a href="#" data-toggle="modal" data-target="#reviewModal{{$list->id}}"><i class="glyphicon glyphicon-info-sign" style="font-size: 20px;"></i></a></span></td>
                                            <td>
                                                <span><a href="{{URL::Route('review.delete',$list->id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this review?');"></i></a></span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </section>
        </div>

    </div>
    <!-- Modal Start-->
    @foreach($reviewList as $list)
        <div class="modal fade latest-modal" id="reviewModal{{ $list->id }}" tabindex="-1" role="dialog">
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
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Order Tracking ID</th>
                                            <td>{{ $list->order_tracking_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $list->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td>{{ $list->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $list->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Rating</th>
                                            <td>
                                            @if(($list->order_rate)==100)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                            @elseif(($list->order_rate)==80)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            @elseif(($list->order_rate)==60)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            @elseif(($list->order_rate)==40)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            @elseif(($list->order_rate)==20)
                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffba00;"></i>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            @else
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Comment</th>
                                            <td>{{ $list->comment }}</td>
                                        </tr>
                                    </table>
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