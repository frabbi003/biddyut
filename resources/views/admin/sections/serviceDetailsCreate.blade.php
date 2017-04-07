@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Create Service Details
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Services Items</h3>
                                <a href="/pager_parts">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/service-details-create') }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            {{--<label>Home Section ID</label>--}}
                                            {{--{!!Form::select('bid_pager_section_id', $sections, null,['class'=>'form-control','id' =>'type', 'required'=>'required'])!!}--}}
                                            <input type="hidden" class="form-control" name="bid_pager_section_id" value="10" readonly>
                                        </div>
                                        <div class="form-group" id="pageTitle">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="" name="bid_pager_title"
                                                   placeholder="Enter title">
                                        </div>
                                        <div class="form-group posSelect" id="pagePos">
                                            <label>Position</label>
                                            <input type="number" min="1" max="6" class="form-control" id=""
                                                   name="bid_pager_position"
                                                   placeholder="Please use arrow key for input position">
                                        </div>
                                        <div class="form-group" id="pageUrl">
                                            <label>Icon Class name</label>
                                            <input type="text" class="form-control" id="" name="bid_pager_url"
                                                   placeholder="Enter title">
                                        </div>
                                        <div class="form-group" id="pageDesc">
                                            <label>Description</label>
                                            <textarea class="form-control" name="bid_pager_desc" rows="3"
                                                      placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="box-body pad" id="pageHtml"><label>HTML Parts</label>
                                            <textarea id="editor1" name="bid_pager_html" rows="10" cols="80">
                                            </textarea>
                                        </div>

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