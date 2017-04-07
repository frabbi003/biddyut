@extends('layouts.master')
@section('contents')
    <style>
        .material-switch > input[type="checkbox"] {
            display: none;
        }

        .material-switch > label {
            cursor: pointer;
            height: 0px;
            position: relative;
            width: 40px;
        }

        .material-switch > label::before {
            background: rgb(0, 0, 0);
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            content: '';
            height: 16px;
            margin-top: -8px;
            position: absolute;
            opacity: 0.3;
            transition: all 0.4s ease-in-out;
            width: 40px;
        }

        .material-switch > label::after {
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            content: '';
            height: 24px;
            left: -4px;
            margin-top: -8px;
            position: absolute;
            top: -4px;
            transition: all 0.3s ease-in-out;
            width: 24px;
        }

        .material-switch > input[type="checkbox"]:checked + label::before {
            background: inherit;
            opacity: 0.5;
        }

        .material-switch > input[type="checkbox"]:checked + label::after {
            background: inherit;
            left: 20px;
        }
    </style>
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Home Section
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Home Section Item Edit</h3>
                                <a href="/home_section_list">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/home_section_update') }}" method="POST"
                                          enctype="multipart/form-data">
                                        <input type="hidden" id="" name="home_sec_id" value="{{ $item->home_sec_id }}"/>
                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            {{--<div class="form-group">--}}
                                            {{--<label>Section On/Off</label>--}}
                                            {{--@if(($item->home_sec_status)==1)--}}
                                            {{--<input type="checkbox" id="" value="1"  name="home_sec_status" checked >--}}
                                            {{--@else--}}
                                            {{--<input type="checkbox" value="1" id="" name="home_sec_status">--}}
                                            {{--@endif--}}
                                            {{--</div>--}}
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" id="" name="home_sec_title"
                                                       placeholder="Enter title" value="{{ $item->home_sec_title }}">
                                            </div>
                                            <div class="form-group">
                                                <!-- List group -->
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <b>Section Enable or Disable</b>
                                                        <div class="material-switch pull-right">
                                                            @if(($item->home_sec_status)==1)
                                                                <input id="someSwitchOptionSuccess" value="1"
                                                                       name="home_sec_status" type="checkbox" checked/>
                                                            @else
                                                                <input id="someSwitchOptionSuccess" value="1"
                                                                       name="home_sec_status" type="checkbox"/>
                                                            @endif
                                                            <label for="someSwitchOptionSuccess"
                                                                   class="label-success"></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="number" class="form-control" id="" name="home_sec_position"
                                                       value="{{ $item->home_sec_position }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Banner type</label>
                                                <select class="form-control select2" name="home_sec_ban_type"
                                                        style="width: 100%;">
                                                    <option selected="selected" value=1>Image</option>
                                                    <option value=2>Video</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('img/'.$item->home_sec_ban_url) }}"
                                                     style="height: 150px; width: 150px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload Banner Image</label>
                                                <input type="file" name="home_sec_ban_url" id="exampleInputFile"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="home_sec_desc" rows="3"
                                                          placeholder="Enter ...">{{ $item->home_sec_desc }}</textarea>
                                            </div>
                                            <div class="box-body pad"><label>Services</label>
                                                <textarea id="editor1" name="home_sec_services" rows="10" cols="80">
                                                    {{ $item->home_sec_services }}
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