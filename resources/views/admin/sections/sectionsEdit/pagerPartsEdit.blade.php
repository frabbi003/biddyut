@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Pager-Parts Edit
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Pager Item Edit</h3>
                                <a href="/pager_parts">
                                    <button class="btn btn-danger pull-right">Cancel</button>
                                </a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                @foreach( $items as $item)
                                    <form role="form" action="{{ url('/pager_update') }}" method="POST"
                                          enctype="multipart/form-data">
                                        <input type="hidden" id="" name="bid_pager_id"
                                               value="{{ $item->bid_pager_id }}"/>
                                        {{ csrf_field() }}
                                        @if(( $item->bid_pager_section_id )==1)
                                            <div class="box-body">
                                                <div class="form-group" id="pageUrl">
                                                    <label>Page URL</label>
                                                    <input type="text" class="form-control" name="bid_pager_url"
                                                           placeholder="Enter title" value="{{ $item->bid_pager_url }}">
                                                </div>
                                                <div class="form-group" id="pageTitle">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="bid_pager_title"
                                                           placeholder="Enter title"
                                                           value="{{ $item->bid_pager_title }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Home Section ID</label>
                                                    <input type="number" class="form-control" id="type"
                                                           name="bid_pager_section_id"
                                                           value="{{ $item->bid_pager_section_id }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    @if(($item->bid_pager_status)==1)
                                                        <input type="checkbox" id="" value="1" name="bid_pager_status"
                                                               checked>
                                                    @else
                                                        <input type="checkbox" value="1" id="" name="bid_pager_status">
                                                    @endif
                                                </div>
                                                <div class="form-group posSelect" id="pagePos">
                                                    <label>Position</label>
                                                    <input type="number" min="1" step="1" class="form-control"
                                                           name="bid_pager_position"
                                                           value="{{ $item->bid_pager_position }}" max="3">
                                                </div>
                                                <div class="form-group">
                                                    <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                         style="height: 150px; width: 150px;">
                                                </div>
                                                <div class="form-group" id="pageImg">
                                                    <label for="exampleInputFile">Upload Banner Image</label>
                                                    <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                </div>
                                                <div class="form-group" id="pageDesc">
                                                    <label>Description</label>
                                                    <textarea class="form-control" name="bid_pager_desc"
                                                              rows="3">{{ $item->bid_pager_desc }}</textarea>
                                                </div>

                                                @elseif(($item->bid_pager_section_id )==2)
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                               name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}" max="4">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    <div class="box-body pad" id="pageHtml"><label>HTML Parts</label>
                                                        <textarea id="editor1" name="bid_pager_html" rows="10"
                                                                  cols="80">
                                                        {{ $item->bid_pager_html }}
                                                </textarea>
                                                    </div>
                                                @elseif(($item->bid_pager_section_id)==3)
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                               max="3" name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    <div class="box-body pad" id="pageHtml"><label>HTML Parts</label>
                                                        <textarea id="editor1" name="bid_pager_html" rows="10"
                                                                  cols="80">
                                                    {{ $item->bid_pager_html }}
                                                </textarea>
                                                    </div>
                                                @elseif(($item->bid_pager_section_id==4))
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                               max="6" name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                @elseif(($item->bid_pager_section_id==5))
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                               max="14" name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    <div class="form-group" id="pageDesc">
                                                        <label>Description</label>
                                                        <textarea class="form-control" name="bid_pager_desc"
                                                                  rows="3">{{ $item->bid_pager_desc }}</textarea>
                                                    </div>
                                                    <div class="box-body pad" id="pageHtml"><label>HTML Parts</label>
                                                        <textarea id="editor1" name="bid_pager_html" rows="10"
                                                                  cols="80">
                                                        {{ $item->bid_pager_html }}
                                                    </textarea>
                                                    </div>
                                                @elseif(($item->bid_pager_section_id==6))
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                               max="6" name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    {{--<div class="form-group" id="pageDesc">--}}
                                                        {{--<label>Description</label>--}}
                                                        {{--<textarea class="form-control" name="bid_pager_desc"--}}
                                                                  {{--rows="3">{{ $item->bid_pager_desc }}</textarea>--}}
                                                    {{--</div>--}}
                                                    <div class="box-body pad" id="pageHtml"><label>Description</label>
                                                        <textarea id="editor1" name="bid_pager_html" rows="10"
                                                                      cols="80">
                                                            {{ $item->bid_pager_html }}
                                                        </textarea>
                                                    </div>
                                                @elseif(($item->bid_pager_section_id==8))
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group" id="pageUrl">
                                                        <label>Page URL</label>
                                                        <input type="text" class="form-control" name="bid_pager_url"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_url }}">
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" max="3"
                                                               class="form-control" max="3" name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    <div class="form-group" id="pageDesc">
                                                        <label>Description</label>
                                                        <textarea class="form-control" name="bid_pager_desc"
                                                                  rows="3">{{ $item->bid_pager_desc }}</textarea>
                                                    </div>
                                                @elseif(($item->bid_pager_section_id==9))
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="bid_pager_title"
                                                               placeholder="Enter title"
                                                               value="{{ $item->bid_pager_title }}">
                                                    </div>
                                                    <div class="form-group" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" step="1" class="form-control"
                                                                name="bid_pager_position"
                                                               value="{{ $item->bid_pager_position }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked>
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status">
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('img/'.$item->bid_banner_url) }}"
                                                             style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="form-group" id="pageImg">
                                                        <label for="exampleInputFile">Upload Banner Image</label>
                                                        <input type="file" name="bid_banner_url" id="exampleInputFile">
                                                    </div>
                                                    @else
                                                    <div class="form-group">
                                                        <label>Home Section ID</label>
                                                        <input type="number" class="form-control" id="type"
                                                               name="bid_pager_section_id"
                                                               value="{{ $item->bid_pager_section_id }}" readonly>
                                                    </div>
                                                    <div class="form-group" id="pageTitle">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" id="" name="bid_pager_title"
                                                              value="{{ $item->bid_pager_title }}" />
                                                    </div>
                                                    <div class="form-group posSelect" id="pagePos">
                                                        <label>Position</label>
                                                        <input type="number" min="1" max="6" class="form-control" id=""
                                                               name="bid_pager_position" value="{{ $item->bid_pager_position }}"
                                                                />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        @if(($item->bid_pager_status)==1)
                                                            <input type="checkbox" id="" value="1"
                                                                   name="bid_pager_status" checked />
                                                        @else
                                                            <input type="checkbox" value="1" id=""
                                                                   name="bid_pager_status" />
                                                        @endif
                                                    </div>
                                                    <div class="form-group" id="pageUrl">
                                                        <label>Icon Class name</label>
                                                        <input type="text" class="form-control" id="" name="bid_pager_url"
                                                             value="{{ $item->bid_pager_url }}" />
                                                    </div>
                                                    <div class="form-group" id="pageDesc">
                                                        <label>Description</label>
                                                        <textarea class="form-control" name="bid_pager_desc" rows="3"
                                                                  placeholder="Enter ...">
                                                            {{ $item->bid_pager_desc }}
                                                        </textarea>
                                                    </div>
                                                    <div class="box-body pad" id="pageHtml"><label>HTML Parts</label>
                                                        <textarea id="editor1" name="bid_pager_html" rows="10" cols="80">
                                                            {{ $item->bid_pager_html }}
                                                        </textarea>
                                                    </div>
                                            </div>
                                    @endif
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