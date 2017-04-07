@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">UPDATE API URL</h3>
                                <a href="/api_list">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/api_update') }}" method="POST">
                                    @foreach($apiData as $api)
                                    <input class="form-control" type="hidden" name="id" value="{{ $api->id }}">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Title</label>
                                            <input class="form-control" type="text" name="title" value="{{ $api->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">API URL</label>
                                            <input class="form-control" type="text" name="url" value="{{ $api->url }}" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="box-footer">

                                    </div>
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                                        @endforeach
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
