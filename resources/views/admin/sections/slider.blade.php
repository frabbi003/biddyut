@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Slider Create
                </h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Create Single Slider</h3>
                                <a href="/slider_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/slider_create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" name="bid_slid_position" placeholder="Enter slider position" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Slider Image</label>
                                            <input type="file" name="bid_slid_img_url" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Head Title</label>
                                            <input type="text" class="form-control" id="" name="bid_slid_content" placeholder="Enter slider heading" required>
                                        </div><div class="form-group">
                                            <label>Sub Title</label>
                                            <input type="text" class="form-control" id="" name="bid_slid_content2" placeholder="Enter slider sub heading" required>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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


