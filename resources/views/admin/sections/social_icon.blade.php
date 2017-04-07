@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Social Icon Create
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Social Area Create</h3>
                                <a href="/social_area_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/icon_create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Facebook URL</label>
                                            <input type="text" class="form-control" id="" name="socl_fb" placeholder="Enter Facebook URL" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Linked In URL</label>
                                            <input type="text" class="form-control" id="" name="socl_linkdin" placeholder="Enter Linked In Link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" id="" name="socl_twit" placeholder="Enter Twitter Link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Google Plus</label>
                                            <input type="text" class="form-control" id="" name="socl_gp" placeholder="Enter Google Plus Link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" id="" name="socl_insta" placeholder="Enter Instagram Link" required>
                                        </div>
                                        <div class="form-group">
                                            <label>YouTube</label>
                                            <input type="text" class="form-control" id="" name="socl_yt" placeholder="Enter YouTube Link" required>
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
        <!-- ./row -->
        </section>
        </div>

    </div>

@endsection