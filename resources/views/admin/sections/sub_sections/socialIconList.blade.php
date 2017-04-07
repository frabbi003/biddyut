@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Social Area List</h3>
                                <a href="{{ url('/social_icon') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>FaceBook</th>
                                        <th>LinkedIn</th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                        <th>YouTube</th>
                                        <th>GooglePlus</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($socialIconList as $list)
                                        <tr>
                                            <td>
                                                <a href="">{{ $list->socl_fb }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->socl_linkdin }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->socl_twit }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->socl_insta }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->socl_yt }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->socl_gp }}</a>
                                            </td>
                                            <td style="min-width: 70px;">
                                                <a href="{{url('/get_social_icon_edit',$list->socl_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <span><a href="{{URL::Route('socialIcon.delete',$list->socl_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a></span>
                                            </td>
                                            @if(($list->socl_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($list->socl_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </section>
        </div>

    </div>

@endsection