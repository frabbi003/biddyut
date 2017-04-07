@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">API List</h3>
                                <a href="{{ url('/api_create') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <th>API URL</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($apiList as $list)
                                        <tr>
                                            <td>
                                                <a href="">{{ $list->title }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->url }}</a>
                                            </td>
                                            <td style="min-width:70px;">
                                                <a href="{{url('/api_update',$list->id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                {{--<a href="{{URL::Route('footer.menu.delete',$list->fot_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>--}}
                                            </td>
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