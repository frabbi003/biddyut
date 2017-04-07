@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Footer Edit
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Footer Item Edit</h3>
                                <a href="/footer_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/footer_update') }}" method="POST">
                                        <input type="hidden" id="" name="fot_id" value="{{ $item->fot_id }}"/>
                                        {{--<input name="_method" type="hidden" value="PATCH">--}}
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Services Menu</label>
                                            <textarea class="form-control" name="fot_serv_menu" rows="3" placeholder="Enter ...">
                                    {{ $item->fot_serv_menu }}
                                </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Biddut Menu</label>
                                            <textarea class="form-control" name="fot_bid_menu" rows="3" placeholder="Enter ...">
                                    {{ $item->fot_bid_menu }}
                                </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            @if(($item->fot_status)==1)
                                                <input type="checkbox" id="" value="1" name="fot_status" checked>
                                            @else
                                                <input type="checkbox" value="1" id="" name="fot_status">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>About Us</label>
                                            <textarea class="form-control" name="fot_about_us" rows="3">{{ $item->fot_about_us }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>News Letter</label>
                                            <textarea class="form-control" name="fot_news_letter" rows="3">{{ $item->fot_news_letter }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Copyright</label>
                                            <input type="text" class="form-control" name="fot_bid_copyright" placeholder="Copyright@example" value="{{ $item->fot_bid_copyright }}" required>
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