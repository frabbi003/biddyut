@include('admin.common.header')
@include('admin.common.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
        <section class="content-header">
            <section class="content">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">All Sections</h3>
                        </div>
                        <div class="box-body table-responsive">

                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">Serial</th>
                                    <th>Section Name</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                @foreach($list as $row)
                                <tr>
                                    <td>{{ $row->sec_id }}</td>
                                    <td>
                                        <a href="{{ url($row->section_url) }}">{{ $row->section_name }}</a>
                                    </td>
                                    @if(($row->section_status)==1)
                                    <td>
                                        <input type="checkbox" checked />
                                    </td>
                                    @elseif(($row->section_status)==2)
                                    <td>
                                         <input type="checkbox" />
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
<!-- /.content-wrapper -->

@include('admin.common.footer')
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/app.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements


        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

    });
</script>
