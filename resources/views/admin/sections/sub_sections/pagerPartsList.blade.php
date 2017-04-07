@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Pager Items</h3>
                                <a href="{{ url('/pager_part') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <!-- Start Three service Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">HOME PAGE SERVICES</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>
                                                <a href="">{{ $service->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$service->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$service->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($service->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($service->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Three Service Section -->

                                    <!-- Start Service Details Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">SERVICES DETAILS</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($servicesDetails as $servicesDetail)
                                        <tr>
                                            <td>
                                                <a href="">{{ $servicesDetail->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$servicesDetail->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$servicesDetail->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($servicesDetail->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($servicesDetail->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End service details Section -->

                                    <!-- Start Specialty Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">OUR SPECIALTY</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($specialties as $specialty)
                                        <tr>
                                            <td>
                                                <a href="">{{ $specialty->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$specialty->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$specialty->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($specialty->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($specialty->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Specialty Section -->

                                    <!-- Start Brand Logo Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">SISTER CONCERN LOGO</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($brandLogos as $brandLogo)
                                        <tr>
                                            <td>
                                                <a href="">{{ $brandLogo->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$brandLogo->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$brandLogo->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($brandLogo->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($brandLogo->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Brand Logo Section -->

                                    <!-- Start Latest News Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">LATEST NEWS</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($latestNews as $latest)
                                        <tr>
                                            <td>
                                                <a href="">{{ $latest->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$latest->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$latest->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($latest->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($latest->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Latest News Section -->

                                    <!-- Start Question Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">FREQUENTLY ASKED QUESTIONS</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($questions as $question)
                                        <tr>
                                            <td>
                                                <a href="">{{ $question->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$question->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$question->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($question->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($question->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Question Section -->

                                    <!-- Start Contact Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">HOME PAGE CONTACT</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>
                                                <a href="">{{ $contact->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$contact->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$contact->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($contact->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($contact->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Contact Section -->

                                    <!-- Start Calculate Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">CALCULATE</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($calculate as $calc)
                                        <tr>
                                            <td>
                                                <a href="">{{ $calc->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$calc->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$calc->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($calc->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($calc->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Calculate Section -->

                                    <!-- Start Work With Us Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">WORK WITH US</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($workWithUs as $workWith)
                                        <tr>
                                            <td>
                                                <a href="">{{ $workWith->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$workWith->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$workWith->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($workWith->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($workWith->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Work With Us Section -->

                                    <!-- Ride with us page  -->

                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">WHY BE A RIDER - PAGE</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($riderDetails as $rider)
                                        <tr>
                                            <td>
                                                <a href="">{{ $rider->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$rider->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$rider->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($rider->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($rider->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                    <!-- End Ride with us page  -->

                                    <!-- Start Count Section -->
                                    <tr style="font-size: 20px;width: 100%">
                                        <th colspan="3" style="text-align: center;">COUNTER</th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($counts as $count)
                                        <tr>
                                            <td>
                                                <a href="">{{ $count->bid_pager_title }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_pager_parts_edit',$count->bid_pager_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('pager.menu.delete',$count->bid_pager_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>
                                            @if(($count->bid_pager_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($count->bid_pager_status)==2)
                                                <td>
                                                    <input type="checkbox" disabled />
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- End Count Section -->

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