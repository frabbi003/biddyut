@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <section class="content">
                    <div class="">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">Persons List</h3>
                                <a href="{{ url('/person_info') }}"><input type=button class="btn btn-primary pull-right" value="Create"></a>
                            </div>
                            <div class="box-body table-responsive">

                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                    @foreach($personInfoList as $person)
                                        <tr>
                                            <td>
                                                <a href="">{{ $person->	person_name }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/get_person_info_edit',$person->person_id)}}"><i class="glyphicon glyphicon-pencil btn btn-primary btn-xs btnEdit"></i></a>
                                                <a href="{{URL::Route('person.menu.delete',$person->person_id)}}"><i class="glyphicon glyphicon-trash btn btn-danger btn-xs btnDelete" onclick="return confirm('Are you sure to delete this data');"></i></a>
                                            </td>

                                            </td>
                                            @if(($person->person_status)==1)
                                                <td>
                                                    <input type="checkbox" checked disabled />
                                                </td>
                                            @elseif(($person->person_status)==2)
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