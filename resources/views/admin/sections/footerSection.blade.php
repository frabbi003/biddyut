@extends('layouts.master')
@section('contents')
    <div class="">
        <div class="row">
            <section class="content-header">
                <h1>
                    Footer Section Create
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Footer Items</h3>
                                <a href="/footer_list"><button class="btn btn-danger pull-right">Cancel</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form role="form" action="{{ url('/footer_create') }}" method="POST" enctype = "multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Services Menu</label>
                                        <textarea class="form-control" name="fot_serv_menu" rows="3" placeholder="Enter ..." required>
                                    <ul class="footer-menu">
                                        <li><a href=""></a></li>
                                    </ul>
                                </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Biddut Menu</label>
                                        <textarea class="form-control" name="fot_bid_menu" rows="3" placeholder="Enter ..." required>
                                    <ul class="footer-menu">
                                        <li><a href=""></a></li>
                                    </ul>
                                </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea class="form-control" name="fot_about_us" rows="3" placeholder="Enter ..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>News Letter</label>
                                        <textarea class="form-control" name="fot_news_letter" rows="3" placeholder="Enter ..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Copyright</label>
                                        <input type="text" class="form-control" name="fot_bid_copyright" placeholder="Copyright@example" value="Copyright ©" required>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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