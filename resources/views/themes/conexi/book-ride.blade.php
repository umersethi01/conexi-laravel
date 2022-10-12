@extends('themes.conexi.layouts.app')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="thm-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><span class="sep">.</span></li>
            <li><span class="page-title">Book a Ride</span></li>
        </ul><!-- /.thm-breadcrumb -->
        <h2>Book a Ride</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="book-ride-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="block-title">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Looking for a taxi</p>
                    <h2>Make your booking</h2>
                </div><!-- /.block-title -->
                <form action="inc/sendemail.php" class="booking-form-two ">
                    <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humor or random word which don't look even slightly believ- <br>able you are going to use a passage.</p>
                    <h3 class="form-block-title">Select Information</h3><!-- /.form-block-title -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Email address">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Phone">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Passengers #">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Pick up address">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Drop off address">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Select date">
                                <i class="conexi-icon-small-calendar"></i>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <select class="selectpicker">
                                    <option>Select Time</option>
                                    <option>10AM-10.59AM</option>
                                    <option>12PM-12.59PM</option>
                                    <option>1PM-1.59PM</option>
                                    <option>2PM-2.59PM</option>
                                </select>
                                <i class="conexi-icon-clock"></i>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <h3 class="form-block-title">Select Car Type</h3><!-- /.form-block-title -->
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="radio-fields clearfix">
                                <li>
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">Any type</label>
                                </li>
                                <li>
                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">Hybrid</label>
                                </li>
                                <li>
                                    <input type="radio" id="test3" name="radio-group">
                                    <label for="test3">SUV</label>
                                </li>
                                <li>
                                    <input type="radio" id="test4" name="radio-group">
                                    <label for="test4">Luxury</label>
                                </li>
                                <li>
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Vans</label>
                                </li>
                            </ul>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <h3 class="form-block-title">Other Information</h3><!-- /.form-block-title -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <select class="selectpicker">
                                    <option>Car model</option>
                                    <option>Yaris 2014</option>
                                    <option>E Class 2010</option>
                                    <option>M5 2008</option>
                                </select>
                                <i class="fa fa-angle-down select-icon"></i>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <select class="selectpicker">
                                    <option>Driver age</option>
                                    <option>21</option>
                                    <option>36</option>
                                    <option>42</option>
                                    <option>48</option>
                                </select>
                                <i class="fa fa-angle-down select-icon"></i>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="type of driver" placeholder="Professional driver">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <ul class="special-checkbox">
                        <li>
                            <span class="input-checker">
                                <input type="checkbox" name="apt_vehicle_services_needed" value="">
                            </span>By using this form you agree to our terms & conditions.
                        </li>
                    </ul>
                    <button type="submit" class="book-btn">Book Now</button>
                </form><!-- /.booking-form-two -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection