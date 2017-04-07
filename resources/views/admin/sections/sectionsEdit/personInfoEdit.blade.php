@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Person Information Edit
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Team or Client Info Edit</h3>
                                <a href="/person_info_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/person_update') }}" method="POST"  enctype = "multipart/form-data">
                                        <input type="hidden" id="" name="person_id" value="{{ $item->person_id }}"/>
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="" name="person_name" value="{{ $item->person_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" id="" name="person_designation" value="{{ $item->person_designation }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook URL</label>
                                                <input type="text" class="form-control" id="" name="person_fb_link" value="{{ $item->person_fb_link }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Linked In URL</label>
                                                <input type="text" class="form-control" id="" name="person_linkedin_link" value="{{ $item->person_linkedin_link }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" id="" name="person_twit_link" value="{{ $item->person_twit_link }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                @if(($item->person_status)==1)
                                                    <input type="checkbox" value="1" id="" name="person_status" checked >
                                                @else
                                                    <input type="checkbox" value="1" id="" name="person_status">
                                                @endif
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
                                                <input type="number" class="form-control" id="" name="person_position" placeholder="Enter home section position" value="{{ $item->person_position }}">
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('img/'.$item->person_img_url) }}" style="height: 150px; width: 150px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload Client/Team member's Image</label>
                                                <input type="file" name="person_img_url" id="exampleInputFile" value="{{ $item->person_img_url }}" >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="person_desc" rows="3" placeholder="Enter ...">{{ $item->person_desc }}</textarea>
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