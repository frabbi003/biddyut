@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Social Icon Edit
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Social Area Edit</h3>
                                <a href="/social_area_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/social_icon_update') }}" method="POST">
                                        <input type="hidden" id="" name="socl_id" value="{{ $item->socl_id }}"/>
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Facebook URL</label>
                                                <input type="text" class="form-control" id="" name="socl_fb" value="{{ $item->socl_fb }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Linked In URL</label>
                                                <input type="text" class="form-control" id="" name="socl_linkdin" value="{{ $item->socl_linkdin }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" id="" name="socl_twit" value="{{ $item->socl_twit }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Google Plus</label>
                                                <input type="text" class="form-control" id="" name="socl_gp" value="{{ $item->socl_gp }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" id="" name="socl_insta" value="{{ $item->socl_insta }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>YouTube</label>
                                                <input type="text" class="form-control" id="" name="socl_yt" value="{{ $item->socl_yt }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                @if(($item->socl_status)==1)
                                                    <input type="checkbox" value="1" id="" name="socl_status" checked >
                                                @else
                                                    <input type="checkbox" value="1" id="" name="socl_status">
                                                @endif
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
        <!-- ./row -->
        </section>
        </div>

    </div>

@endsection