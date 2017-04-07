@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Footer List</h3>
                                <a href="{{ url('/footer') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Service Items</th>
                                        <th>Biddut Menu Items</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($footerList as $list)
                                        <tr>
                                            <td>
                                                <a href="">{{ $list->fot_serv_menu }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $list->fot_bid_menu }}</a>
                                            </td>
                                            <td style="min-width:70px;">
                                                <a href="{{url('/get_footer_edit',$list->fot_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('footer.menu.delete',$list->fot_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($list->fot_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($list->fot_status)==2)
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