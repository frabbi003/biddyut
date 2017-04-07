@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Home Section Create
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Home Section Items</h3>
                                <a href="/home_section_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/section_create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="" name="home_sec_title" placeholder="Enter title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" name="home_sec_position" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Banner type</label>
                                            <select class="form-control select2" name="home_sec_ban_type" style="width: 100%;">
                                                <option selected="selected" value=1>Image</option>
                                                <option value=2>Video</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Banner Image</label>
                                            <input type="file" name="home_sec_ban_url" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="home_sec_desc" rows="3" placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="box-body pad"><label>Services</label>
                                            <textarea id="editor1" name="home_sec_services" rows="10" cols="80" required>
                                    </textarea>
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