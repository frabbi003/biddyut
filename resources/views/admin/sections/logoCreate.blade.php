@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Upload Logo</h3>
                                <a href="/admin/dashboard">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/logo_create') }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{--{{ csrf_field() }}--}}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Logo</label>
                                            <input type="file" name="bid_log_url" id="exampleInputFile" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="box-footer">

                                    </div>
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                                </form>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->
                </section>
                <!-- ./row -->
            </section>

        </div>
    </div>

@endsection
