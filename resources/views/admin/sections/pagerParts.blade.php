@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Pager-Parts Section Create
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Pager Items</h3>
                                <a href="/pager_parts">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/page_create') }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Home Section ID</label>
                                            {!!Form::select('bid_pager_section_id', $sections, null,['class'=>'form-control','id' =>'type', 'required'=>'required'])!!}
                                        </div>
                                        <div class="form-group" id="pageUrl">
                                            <label>Page URL</label>
                                            <input type="text" class="form-control" id="" name="bid_pager_url"
                                                   placeholder="Enter title">
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
                                        <div class="form-group" id="pageImg">
                                            <label for="exampleInputFile">Upload Image</label>
                                            <input type="file" name="bid_banner_url" id="exampleInputFile" required>
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


            $('#type').on('change', function () {

                var stmt = $('#type option:selected').text();
                if (stmt == 'SERVICES') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').show();
                    $('#pageUrl').show();
                    $('#pagePos').show();
                    $('#pageHtml').hide();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 3);
                    $("div.posSelect [name='bid_pager_position']").val("");

                } else if (stmt == 'SPECIALITY') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').hide();
                    $('#pageUrl').hide();
                    $('#pagePos').show();
                    $('#pageHtml').show();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 4);
                    $("div.posSelect [name='bid_pager_position']").val("");

                } else if (stmt == 'LATEST NEWS') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').hide();
                    $('#pagePos').show();
                    $('#pageUrl').hide();
                    $('#pageHtml').show();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 3);
                    $("div.posSelect [name='bid_pager_position']").val("");

                } else if (stmt == 'BRAND LOGO') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').hide();
                    $('#pagePos').show();
                    $('#pageUrl').hide();
                    $('#pageHtml').hide();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 6);
                    $("div.posSelect [name='bid_pager_position']").val("");

                } else if (stmt == 'QUESTIONS') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').show();
                    $('#pagePos').show();
                    $('#pageUrl').hide();
                    $('#pageHtml').show();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 14);
                    $("div.posSelect [name='bid_pager_position']").val("");

                } else if (stmt == 'CONTACT') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').hide();
                    $('#pagePos').hide();
                    $('#pageUrl').hide();
                    $('#pageHtml').show();

                } else if (stmt == 'CALCULATE') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').show();
                    $('#pagePos').show();
                    $('#pageUrl').show();
                    $('#pageHtml').hide();

                } else if (stmt == 'FEATURES') {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').show();
                    $('#pagePos').show();
                    $('#pageUrl').show();
                    $('#pageHtml').hide();

//                    var posChange = '<label>Position</label>' +
//                            '<select class="form-control" name="bid_pager_position">' +
//                            '<option value = 1>Position One</option>' +
//                            '<option value = 2>Position Two</option>' +
//                            '<option value = 3>Position Three</option>' +
//                            '</select>';
//                    $("div.posSelect").replaceWith(posChange);
                    $("div.posSelect [name='bid_pager_position']").val("");
                    $("div.posSelect [name='bid_pager_position']").attr('max', 3);


                }

                else {
                    $('#pageImg').show();
                    $('#pageTitle').show();
                    $('#pageDesc').hide();
                    $('#pagePos').show();
                    $('#pageUrl').hide();
                    $('#pageHtml').hide();

                    $("div.posSelect [name='bid_pager_position']").attr('max', 3);
                    $("div.posSelect [name='bid_pager_position']").val("");
                }
            });
        });
    </script>

@endsection