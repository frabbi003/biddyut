@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Logo Section
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Logo URL</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach()
                                    <form role="form" action="{{ url('/logo_create') }}" method="POST" enctype = "multipart/form-data">
                                        <input type="hidden" id="" name="bid_log_id" value="{{ $item->bid_log_id }}"/>
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
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
                                    </form>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
        </div>

    </div>

@endsection