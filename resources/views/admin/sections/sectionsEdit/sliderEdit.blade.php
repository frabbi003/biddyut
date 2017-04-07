@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Slider Edit
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Slider Edit</h3>
                                <a href="/slider_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/slider_update') }}" method="POST"  enctype = "multipart/form-data">
                                        <input type="hidden" id="" name="bid_slid_id" value="{{ $item->bid_slid_id }}"/>
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="number" class="form-control" id="" name="bid_slid_position" placeholder="Enter slider position" value="{{ $item->bid_slid_position }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                @if(($item->bid_slid_status)==1)
                                                    <input type="checkbox" value="1" id="" name="bid_slid_status" checked >
                                                @else
                                                    <input type="checkbox" value="1" id="" name="bid_slid_status">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('img/'.$item->bid_slid_img_url) }}" style="height: 150px; width: 150px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Slider Image</label>
                                                <input type="file" name="bid_slid_img_url" id="exampleInputFile" value="{{ $item->bid_slid_img_url }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Head Title</label>
                                                <input type="text" class="form-control" id="" name="bid_slid_content" value="{{ $item->bid_slid_content }}" required>
                                            </div><div class="form-group">
                                                <label>Sub Title</label>
                                                <input type="text" class="form-control" id="" name="bid_slid_content2" value="{{ $item->bid_slid_content2 }}" required>
                                            </div>

                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-->
                <!-- ./row -->
            </section>
        </div>

    </div>

@endsection