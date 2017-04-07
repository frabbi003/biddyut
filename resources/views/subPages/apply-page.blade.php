@extends('layouts.extraPage')
@section('contents')

    <section class="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h4>Global Procurement Executive</h4>
                    <p>52 Banani, Dhaka, Bangladesh</p>
                    <hr>
                    <p>Our mission is to bring the world's best-loved local restaurants into everyone's home or office - fast.</p>

                        <p>We work with hundreds of the world's best loved restaurants, including names like Carluccio's, GBK, Nando's, Rossopomodoro and many top quality independents to deliver their food to homes and offices everywhere. Our customers are as passionate about great food as we are, including an ever-growing number of large and prestigious firms.

                        An exciting opportunity has arisen for an organised, self-motivated and enthusiastic individual who would like to join the Procurement team. The ideal candidate has exceptional communication skills, allowing them to build strong relationships across all levels of the business. The candidates should be able to exhibit excellent attention to detail and ability to focus on high-impact tasks to completion.

                        The primary role of the Global Procurement Executive is to manage the procurement of restaurant and driver equipment and marketing related material for Deliveroo as the company expands across the world. Your role will include:</p>
                    <ul>
                        <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Project managing a large new international initiative</li>
                        <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Creating a supply chain to fulfil this intiative</li>
                        <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Forecasting, Planning & Procurement of required stock</li>
                        <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Being a point of contact between internal teams and suppliers</li>
                        <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Managing the logistics and planning the transportation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="right-side">
                    <form id="job-apply" method="POST" action="{{ url('/job-apply') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                        <div class="form-group">
                            <label>Your name</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>Your e-mail</label>
                            <input type="text" name="email" id="email" required>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>Your message</label>
                            <textarea name="message" id="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Your CV</label>
                            <input type="file" name="cv" id="exampleInputFile"
                                   required>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <button id="submit" type="submit" name="submit">SUBMIT</button>
                        </div>
                        </div>
                        <!-- end form-group -->
                    </form>
                    <!-- end error -->
                </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/image1_3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection