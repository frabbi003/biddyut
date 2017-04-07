@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Edit Menu Section
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Menu Edit</h3>
                                <a href="/menu_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            {{--{{ dd(get_defined_vars()) }}--}}
                            <div class="box-body pad">
                                @foreach($items as $item)
                                    <form role="form" action="/menu_update" method="POST" enctype = "multipart/form-data">
                                        <input type="hidden" id="" name="bid_menu_id" value="{{ $item->bid_menu_id }}"/>
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="" name="bid_menu_name" value="{{ $item->bid_menu_name }}" />
                                            </div>

                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" class="form-control" id="" name="bid_menu_link" value="{{ $item->bid_menu_link }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Page Headline</label>
                                                <input type="text" class="form-control" id="" name="bid_menu_headline" value="{{ $item->bid_menu_headline }}" placeholder="Enter Page Headline">
                                            </div>
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="number" class="form-control" id="" name="bid_menu_position" value="{{ $item->bid_menu_position }}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                @if(($item->bid_menu_status)==1)
                                                    <input type="checkbox" value="1" id="" name="bid_menu_status" checked >
                                                @else
                                                    <input type="checkbox" value="1" id="" name="bid_menu_status">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('img/'.$item->bid_menu_img) }}" style="height: 150px; width: 150px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload Image</label>
                                                <input type="file" name="bid_menu_img" id="" value="" />
                                            </div>
                                            {{--<div class="form-group" id="pageImg">--}}
                                                {{--<label for="exampleInputFile">Upload Menu Cover Photo</label>--}}
                                                {{--<input type="file" name="bid_menu_cover_img" id="exampleInputFile">--}}
                                            {{--</div>--}}
                                            <div class="box-body pad" id="pageHtml"><label>Page Details</label>
                                                <textarea id="editor1" name="bid_menu_desc" rows="10" cols="80">

                                                    {!! $item->bid_menu_desc !!}

                                                </textarea>
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
@section('extraScript')
    <script>
        $(function () {

            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>

@endsection