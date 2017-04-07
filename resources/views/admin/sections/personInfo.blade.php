@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Team/Client Information Create
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Team or Client Info Items</h3>
                                <a href="/person_info_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/person_create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="" name="person_name" placeholder="Enter title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" id="" name="person_designation" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook URL</label>
                                            <input type="text" class="form-control" id="" name="person_fb_link" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Linked In URL</label>
                                            <input type="text" class="form-control" id="" name="person_linkedin_link" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" id="" name="person_twit_link" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Person Type</label>
                                            <select class="form-control select2" name="person_type" style="width: 100%;">
                                                <option selected="selected" value=1>Team</option>
                                                <option value=2>Client</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="number" class="form-control" id="" name="person_position" placeholder="Enter home section position" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Client/Team member's Image</label>
                                            <input type="file" name="person_img_url" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="person_desc" rows="3" placeholder="Enter ..." required></textarea>
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