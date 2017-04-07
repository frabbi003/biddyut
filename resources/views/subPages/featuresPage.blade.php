@extends('layouts.extraPage')
@section('contents')
    <section class="sub-header breadcrumb"
             @foreach($riderPageUpper as $upper)
             style="background: rgba(0, 0, 0, 0) url({{ asset('/img/'.$upper->home_sec_ban_url) }}) no-repeat fixed 0 0 / cover;">
            <h5 class="page-title">{{ $upper->home_sec_title }}</h5>
            <ul class="breadcrumb">
                <li><a href="{{ url('/?home=true') }}">Home</a></li>
                <li><span class="active">{{ $upper->home_sec_title }}</span></li>
            </ul>
    </section>
    <section class="sign-up-main">
        <div class="container">
            <div class="sign-up-container clearfix">
                <div class="section-content">
                </div>
            </div>
        </div>
    </section>
    <section class="why-be-rider">
        <div class="container">
            <div class="why-be-rider-container clearfix">
                <div class="col-md-6">
                    <div class="be-rider-left-img">
                        <img src="images/6.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="be-rider-right">
                        <div class="section-title-main">
                            <h3 class="section-title">Why be a rider?</h3>
                            <p>
                                {{ $upper->home_sec_desc }}
                            </p>
                        </div>
                        @endforeach
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach($riderPageInfo as $info)
                                    <div class="col-md-6">
                                        <div class="be-rider-oppurtunity">
                                            <div class="be-rider-oppurtunity-img">
                                                <i class="{{ $info->bid_pager_url }}" aria-hidden="true" style="color: #B63426;"></i>
                                            </div>
                                            <div class="be-rider-oppurtunity-details">
                                                <p>
                                                    {{ $info->bid_pager_desc }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-you-need-main" style="background-image: url({{ asset('/images/7.jpg') }})">
        <div class="container">
            <div class="what-you-need-container clearfix">
                <div class="col-md-6">
                    <div class="what-you-need-content">
                        <h3 class="section-title">What you'll need</h3>
                        <p>To work with us, you’ll need the following:</p>
                        <ul>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Updated CV</li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Know how to ride
                                bicycle / motor-bike
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Driving license
                                copy of Motor-Bike
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> National
                                ID/Photocopy of Passport
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Passport Sized
                                Latest Photograph (3 Copies)
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Educational
                                Certificate
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Character
                                Certificate
                            </li>
                            <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Reference Letter
                            </li>
                        </ul>
                        {{--<button class="btn btn-danger apply-btn"><a href="#" data-toggle="modal" data-target="#featuresModal">Apply</a></button>--}}
                        <a class="btn btn-danger" href="#" data-toggle="modal"
                           data-target="#featuresApplyModal">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up-main">
        <div class="container">
            <div class="sign-up-container clearfix">
                <div class="section-title-main">
                    <h3 class="section-title">SIGN UP HERE</h3>
                </div>
                <div class="section-content">
                    <div class="col-md-4">
                        <div class="choose-city-option">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputcity1" class="control-label">1. Choose your city</label>
                                    <select class="form-control" id="inputcity1">
                                        <option>Dhaka</option>
                                        <option>Sylhet</option>
                                        <option>Khulna</option>
                                        <option>Barishal</option>
                                        <option>Comilla</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose-vehicle-option">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputvehicle1" class="control-label">2. Choose your vehicle</label>
                                    <select class="form-control" id="inputvehicle1">
                                        <option>Bike</option>
                                        <option>Bi-Cycle</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sign-up-btn">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <p>3. Fill out our quick application</p>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Start-->
    <div class="modal fade" id="featuresApplyModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-pro-content">
                        <h3>We only works with the best restaurants</h3>
                        <div class="row">
                            <form action="{{ url('/apply') }}" id="apply" method="POST">
                                {{ csrf_field() }}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputname1">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="exampleInputname1"
                                               placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputweb1">Present Address</label>
                                        <input type="text" name="pre-add" class="form-control" id="exampleInputweb1"
                                               placeholder="Restaurent">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputcity1">Occupation</label>
                                        <input type="text" name="occupation" class="form-control" id="exampleInputcity1"
                                               placeholder="Occupation">
                                    </div>
                                    <div class="form-group">
                                        <p>Do you have a motorbike driving license?</p>
                                        <div class="radio-inline nice-radio">
                                            <label class="radio-inline"><input type="radio" name="license"
                                                                               value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="license"
                                                                               value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Are you a fit and competent with bi-cycle? </p>
                                        <div class="radio-inline nice-radio">
                                            <label class="radio-inline"><input type="radio" name="bi-cycle" value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="bi-cycle"
                                                                               value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Have you worked with any Delivery company before? </p>
                                        <div class="radio-inline nice-radio">
                                            <label class="radio-inline"><input type="radio" name="del-com"
                                                                               value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="del-com"
                                                                               value="No">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputname2">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="exampleInputname2"
                                               placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputphone1">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputphone1"
                                               placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputweb2">Permanent Address</label>
                                        <input type="text" name="per-add" class="form-control" id="exampleInputweb2"
                                               placeholder="Website">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputcity1" class="control-label">Choose your city</label>
                                        <select class="form-control" id="inputcity1" name="city">
                                            <option>Dhaka</option>
                                            <option>Shylet</option>
                                            <option>Khulna</option>
                                            <option>Barishal</option>
                                            <option>Comilla</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <p>Do you have an Android or smart mobile? </p>
                                        <div class="radio-inline nice-radio">
                                            <label class="radio-inline"><input type="radio" name="mobile"
                                                                               value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="mobile"
                                                                               value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Can you ride Motorbike?</p>
                                        <div class="radio-inline nice-radio">
                                            <label class="radio-inline"><input type="radio" name="ride-bike"
                                                                               value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="ride-bike"
                                                                               value="No">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-btn text-center">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->





@endsection