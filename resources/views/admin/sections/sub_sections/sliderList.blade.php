@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Slider Image URL</h3>
                                <a href="{{ url('/slider') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Slider Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($sliderList as $sliderName)
                                        <tr>
                                            <td>
                                                <a href="">{{ $sliderName->bid_slid_content }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_slider_edit',$sliderName->bid_slid_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <span><a href="{{URL::Route('slider.delete',$sliderName->bid_slid_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a></span>
                                            </td>
                                            @if(($sliderName->bid_slid_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($sliderName->bid_slid_status)==2)
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
