@extends('themes.conexi.layouts.app')
@section('content')
<div class="page-wrapper">
    <header class="site-header header-one">
        <div class="top-bar">
            <div class="container">
                <div class="left-block">
                    <a href="#"><i class="fa fa-user-circle"></i> Customer Sign In</a>
                    <a href="#"><i class="fa fa-envelope"></i> needhelp@conexi.com</a>
                </div><!-- /.left-block -->
                <div class="logo-block">
                    <a href="/"><img src="{{ asset('conexi/images/resources/logo-1-1.png') }}" alt="Awesome Image" /></a>
                </div><!-- /.logo-block -->
                <div class="social-block">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div><!-- /.social-block -->
            </div><!-- /.container -->
        </div><!-- /.top-bar -->
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="logo-box clearfix">
                    <button class="menu-toggler" data-target="#main-nav-bar">
                        <span class="fa fa-bars"></span>
                    </button>
                </div><!-- /.logo-box -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-navigation" id="main-nav-bar">
                    <ul class="navigation-box">
                        <li class=" current ">
                            <a href="/">Home</a>
                            <ul class="sub-menu">
                                <li><a href="/">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                                <li><a href="/">Header Versions</a>
                                    <ul class="sub-menu">
                                        <li><a href="/">Header One</a></li>
                                        <li><a href="index2.html">Header Two</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="driver.html">Our Drivers</a></li>
                                <li><a href="taxi.html">Our Taxi</a></li>
                                <li><a href="single-taxi.html">Taxi Details</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li><a href="book-ride.html">Book A Ride</a></li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="right-side-box">
                    <a href="callto:888-888-0000" class="contact-btn-block">
                        <span class="icon-block">
                            <i class="conexi-icon-phone-call"></i>
                        </span>
                        <span class="text-block">
                            888 888 0000
                            <span class="tag-line">Phone line</span>
                        </span>
                    </a>
                </div><!-- /.right-side-box -->
            </div>
            <!-- /.container -->
        </nav>
    </header><!-- /.site-header header-one -->
    <div class="main-banner-wrapper">
        <section class="banner-style-one owl-theme owl-carousel no-dots">
            <div class="slide slide-one" style="background-image: url({{ asset('conexi/images/slider/slider-1-1.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="banner-title">Cheap & Trusted <br> Taxi Company</h3>
                            <p>Enjoy your comfortable trip with <br> conexi company taxi</p>
                            <div class="btn-block">
                                <a href="#" class="banner-btn">Learn More</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
            <div class="slide slide-two" style="background-image: url({{ asset('conexi/images/slider/slider-1-2.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="banner-title">Cheap & Trusted <br> Taxi Company</h3>
                            <p>Enjoy your comfortable trip with <br> conexi company taxi</p>
                            <div class="btn-block">
                                <a href="#" class="banner-btn">Learn More</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
        </section><!-- /.banner-style-one -->
        <div class="carousel-btn-block banner-carousel-btn">
            <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
            <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
        </div><!-- /.carousel-btn-block banner-carousel-btn -->
    </div><!-- /.main-banner-wrapper -->
    <section class="book-ride-one">
        <img src="{{ asset('conexi/images/background/booking-bg-1-1.png') }}" class="footer-bg" alt="Awesome Image" />
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="content-block">
                        <div class="block-title mb-0">
                            <div class="dot-line"></div><!-- /.dot-line -->
                            <p class="light">Looking for taxi?</p>
                            <h2 class="light">Make your <br> booking</h2>
                        </div><!-- /.block-title -->
                        <p>Our taxis commit to make your trips unique <br> by best answering your needs.</p>
                    </div><!-- /.content-block -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <form action="#" class="booking-form-one">
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
                            <div class="col-lg-6">
                                <div class="input-holder">
                                    <button type="submit">Book Now</button>
                                </div><!-- /.input-holder -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </form><!-- /.booking-form-one -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.book-ride-one -->
    <section class="about-style-one ">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Welcome to conexi company</p>
                <h2>Your first choice <br> for traveling anywhere</h2>
            </div><!-- /.block-title -->
            <div class="row high-gutter">
                <div class="col-lg-6">
                    <div class="about-image-block">
                        <img src="{{ asset('conexi/images/resources/choise-1-1.png') }}" alt="Awesome Image" />
                        <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or random words which don't look even slightly believable. If you are going to use a passage of lorem ipsum you need to be sure there isn't anything embarrassing.</p>
                    </div><!-- /.image-block -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="text-block">
                        <div class="video-block-one">
                            <div class="image-block">
                                <div class="inner-block">
                                    <img src="{{ asset('conexi/images/resources/video-1-1.png') }}" alt="Awesome Image" />
                                    <a href="https://www.youtube.com/watch?v=hsb-fA6ApiE" class="video-popup"><i class="fa fa-play"></i></a>
                                </div><!-- /.inner-block -->
                            </div><!-- /.image-block -->
                            <div class="content-block">
                                <h3>We’re specialized in providing a high quality service</h3>
                            </div><!-- /.content-block -->
                        </div><!-- /.video-block-one -->
                        <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or random words which don't look even slightly believable. If you are going to use a passage of lorem ipsum you need to be sure there isn't anything embarrassing.</p>
                        <hr class="style-one">
                        <div class="call-block">
                            <div class="left-block">
                                <div class="icon-block">
                                    <i class="conexi-icon-phone-call"></i>
                                </div><!-- /.icon-block -->
                                <div class="content-block">
                                    <p>Call us now and make <br>your booking</p>
                                </div><!-- /.content-block -->
                            </div><!-- /.left-block -->
                            <div class="right-block">
                                <a class="phone-number" href="callto:888-888-0000">888 888 0000</a>
                            </div><!-- /.right-block -->
                        </div><!-- /.call-block -->
                    </div><!-- /.text-block -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-style-one -->
    <section class="funfact-style-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Our fun facts</p>
                <h2>Numbers speak</h2>
            </div><!-- /.block-title text-center -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-funfact-one hvr-float-shadow">
                        <i class="conexi-icon-meter"></i>
                        <h3 class="counter">8700</h3>
                        <p>KM Driven</p>
                    </div><!-- /.single-funfact-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-funfact-one hvr-float-shadow">
                        <i class="conexi-icon-team"></i>
                        <h3 class="counter">4978</h3>
                        <p>People Dropped</p>
                    </div><!-- /.single-funfact-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-funfact-one hvr-float-shadow">
                        <i class="conexi-icon-taxi"></i>
                        <h3 class="counter">800</h3>
                        <p>Taxis & Drivers</p>
                    </div><!-- /.single-funfact-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-funfact-one hvr-float-shadow">
                        <i class="conexi-icon-happy"></i>
                        <h3 class="counter">2480</h3>
                        <p>Happy People</p>
                    </div><!-- /.single-funfact-one -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.funfact-style-one -->
    <section class="cta-style-two">
        <div class="container">
            <div class="content-block">
                <p>Make a call or fill form</p>
                <h3>Call our agent to get a quote.</h3>
            </div><!-- /.content-block -->
            <div class="button-block">
                <a href="book-ride.html" class="cta-btn">Book Taxi Now</a>
            </div><!-- /.button-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-style-two -->
    <section class="taxi-style-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Our best cars</p>
                <h2>Choose taxi</h2>
            </div><!-- /.block-title -->
            <ul class="nav nav-tabs tab-title" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#hybrid" role="tab" data-toggle="tab">hybrid taxi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#town" role="tab" data-toggle="tab">town taxi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#limousine" role="tab" data-toggle="tab">LIMOUSINE taxi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#suv" role="tab" data-toggle="tab">suv taxi</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="hybrid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-1.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-bmw"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>M5 2008 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-2.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-mercedes-benz"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>E Class 2010 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-3.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-toyota"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>Yaris 2014 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
                <div role="tabpanel" class="tab-pane animated fadeInUp" id="town">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-1.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-bmw"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>M5 2008 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-2.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-mercedes-benz"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>E Class 2010 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-3.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-toyota"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>Yaris 2014 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
                <div role="tabpanel" class="tab-pane animated fadeInUp" id="limousine">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-1.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-bmw"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>M5 2008 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-2.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-mercedes-benz"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>E Class 2010 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-3.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-toyota"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>Yaris 2014 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
                <div role="tabpanel" class="tab-pane animated fadeInUp" id="suv">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-1.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-bmw"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>M5 2008 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-2.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-mercedes-benz"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>E Class 2010 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="single-taxi-one">
                                <div class="inner-content">
                                    <img src="{{ asset('conexi/images/pricing/pricing-1-3.png') }}" alt="Awesome Image" />
                                    <div class="icon-block">
                                        <i class="conexi-icon-toyota"></i>
                                    </div><!-- /.icon-block -->
                                    <h3>Yaris 2014 Model</h3>
                                    <ul class="feature-list">
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                    <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                                </div><!-- /.inner-content -->
                            </div><!-- /.single-taxi-one -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
            </div><!-- /.tab-content -->
        </div><!-- /.container -->
    </section><!-- /.taxi-style-one -->
    <hr class="style-one">
    <div class="brand-carousel-wrapper">
        <div class="container">
            <div class="brand-carousel-one owl-theme owl-carousel">
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-1.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-2.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-3.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-4.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-5.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-1.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-2.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-3.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-4.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('conexi/images/brand/brand-1-5.jpg') }}" alt="Awesome Image" />
                </div><!-- /.item -->
            </div><!-- /.brand-carousel-one -->
        </div><!-- /.container -->
    </div><!-- /.brand-carousel-wrapper -->
    <section class="feature-style-one thm-black-bg">
        <img src="{{ asset('conexi/images/background/feature-bg-1-1.png') }}" alt="Awesome Image" class="feature-bg" />
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Conexi benefit list</p>
                <h2 class="light">Why choose us</h2>
            </div><!-- /.block-title text-center -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature-one">
                        <div class="icon-block">
                            <i class="conexi-icon-insurance"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="#">Safety Guarantee</a></h3>
                        <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                        <a href="#" class="more-link">Read More</a>
                    </div><!-- /.single-feature-one -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-feature-one">
                        <div class="icon-block">
                            <i class="conexi-icon-seatbelt"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="#">DBS Cleared Drivers</a></h3>
                        <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                        <a href="#" class="more-link">Read More</a>
                    </div><!-- /.single-feature-one -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-feature-one">
                        <div class="icon-block">
                            <i class="conexi-icon-consent"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="#">Free Quotation</a></h3>
                        <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                        <a href="#" class="more-link">Read More</a>
                    </div><!-- /.single-feature-one -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-style-one -->
    <section class="taxi-fare-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Our all taxi rates</p>
                <h2>Check taxi fares</h2>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                        <div class="top-block">
                            <div class="icon-block">
                                <i class="conexi-icon-taxi"></i>
                            </div><!-- /.icon-block -->
                            <div class="text-block">
                                <h3>All taxi fares</h3>
                                <p>Lorem ipsum dolor sit amet cons adipisci elit.</p>
                            </div><!-- /.text-block -->
                        </div><!-- /.top-block -->
                        <ul class="features-list">
                            <li>
                                <div class="name-line">Initial charge:</div><!-- /.name-line -->
                                <div class="price-line">$2.50</div><!-- /.price-line -->
                            </li>
                            <li>
                                <div class="name-line">Additional Kilometre:</div><!-- /.name-line -->
                                <div class="price-line">$0.50</div><!-- /.price-line -->
                            </li>
                            <li>
                                <div class="name-line">Per 2 minutes in stopped traffic:</div><!-- /.name-line -->
                                <div class="price-line"> $0.66</div><!-- /.price-line -->
                            </li>
                        </ul><!-- /.features-list -->
                        <div class="button-block">
                            <a href="#" class="fare-btn">Order Taxi Now</a>
                        </div><!-- /.button-block -->
                    </div><!-- /.single-taxi-fare-one -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                        <div class="top-block">
                            <div class="icon-block">
                                <i class="conexi-icon-taxi"></i>
                            </div><!-- /.icon-block -->
                            <div class="text-block">
                                <h3>Additional fares</h3>
                                <p>Lorem ipsum dolor sit amet cons adipisci elit.</p>
                            </div><!-- /.text-block -->
                        </div><!-- /.top-block -->
                        <ul class="features-list">
                            <li>
                                <div class="name-line">One hour of waiting:</div><!-- /.name-line -->
                                <div class="price-line">$8.00</div><!-- /.price-line -->
                            </li>
                            <li>
                                <div class="name-line">4pm to 8pm weekday surcharge:</div><!-- /.name-line -->
                                <div class="price-line">$2.00</div><!-- /.price-line -->
                            </li>
                            <li>
                                <div class="name-line">8pm to 6am night surcharge:</div><!-- /.name-line -->
                                <div class="price-line"> $3.00</div><!-- /.price-line -->
                            </li>
                        </ul><!-- /.features-list -->
                        <div class="button-block">
                            <a href="#" class="fare-btn">Order Taxi Now</a>
                        </div><!-- /.button-block -->
                    </div><!-- /.single-taxi-fare-one -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="block-text text-center">
                <p>There are many variations of passages of lorem ipsum available but the majority have suffered <br> alteration in some form by injected humour or random words which.</p>
            </div><!-- /.block-text -->
        </div><!-- /.container -->
    </section><!-- /.taxi-fare-one -->
    <section class="testimonials-style-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p class="light">Latest blog posts</p>
                <h2 class="light">News & updates</h2>
            </div><!-- /.block-title -->
            <div class="testimonials-one-pager">                    
                <a href="#" class="pager-item active" data-slide-index="1"><img src="{{ asset('conexi/images/resources/testi-1-1.jpg') }}" alt="Awesome Image" /></a>
                <a href="#" class="pager-item" data-slide-index="2"><img src="{{ asset('conexi/images/resources/testi-1-2.jpg') }}" alt="Awesome Image" /></a>
                <a href="#" class="pager-item" data-slide-index="3"><img src="{{ asset('conexi/images/resources/testi-1-3.jpg') }}" alt="Awesome Image" /></a>
            </div><!-- /.testimonials-one-pager -->
            <ul class="slider testimonials-slider-one">
                <li class="slide-item">
                    <div class="single-testimonial-one">
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                        <h3>Shana Druckman</h3>
                    </div><!-- /.single-testimonial-one -->
                </li>
                <li class="slide-item">
                    <div class="single-testimonial-one">
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                        <h3>Emanuel Mcnamara</h3>
                    </div><!-- /.single-testimonial-one -->
                </li>
                <li class="slide-item">
                    <div class="single-testimonial-one">
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                        <h3>Jodie Hadlock</h3>
                    </div><!-- /.single-testimonial-one -->
                </li>
            </ul>
        </div><!-- /.container -->            
        <div class="testimonials-one-slider-btn">
            <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
            <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
        </div><!-- /.carousel-btn-block banner-carousel-btn -->
    </section><!-- /.testimonials-style-one -->
    <section class="blog-style-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Latest blog posts</p>
                <h2>News & updates</h2>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="single-blog-style-one">
                        <div class="image-block">
                            <div class="inner-block">
                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                <img src="{{ asset('conexi/images/blog/blog-1-1.jpg') }}" alt="Awesome Image" />
                            </div><!-- /.inner-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <div class="meta-info">
                                <a href="#" class="date-block">20 Feb, 2019</a>
                                <a href="#">by Admin</a>
                                <span class="sep">.</span>
                                <a href="#">3 Comments</a>
                            </div><!-- /.meta-info -->
                            <h3><a href="blog-details.html">We ensure you that your journey is comfortable and safe</a></h3>
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration...</p>
                        </div><!-- /.text-block -->
                    </div><!-- /.single-blog-style-one -->
                </div><!-- /.col-xl-6 col-lg-12 -->
                <div class="col-xl-6 col-lg-12">
                    <div class="row blog-style-two-row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="single-blog-style-two">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                        <img src="{{ asset('conexi/images/blog/blog-2-1.jpg') }}" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="text-block">
                                    <a href="#" class="date-block">20 Feb, 2019</a>
                                    <h3><a href="blog-details.html">Car with private and discreet cabman for a service</a></h3>
                                    <div class="meta-info">
                                        <a href="#">by Admin</a>
                                        <span class="sep">.</span>
                                        <a href="#">3 Comments</a>
                                    </div><!-- /.meta-info -->
                                </div><!-- /.text-block -->
                            </div><!-- /.single-blog-style-two -->
                        </div><!-- /.col-xl-12 -->
                        <div class="col-xl-12 col-lg-6">
                            <div class="single-blog-style-two">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                        <img src="{{ asset('conexi/images/blog/blog-2-2.jpg') }}" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="text-block">
                                    <a href="#" class="date-block">20 Feb, 2019</a>
                                    <h3><a href="blog-details.html">Our taxis commit to make your trips unique</a></h3>
                                    <div class="meta-info">
                                        <a href="#">by Admin</a>
                                        <span class="sep">.</span>
                                        <a href="#">3 Comments</a>
                                    </div><!-- /.meta-info -->
                                </div><!-- /.text-block -->
                            </div><!-- /.single-blog-style-two -->
                        </div><!-- /.col-xl-12 -->                            
                    </div><!-- /.row -->
                </div><!-- /.col-xl-6 col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-one -->
    <section class="cta-style-one text-center">
        <div class="container">
            <p>Call 24 hour service available</p>
            <h3>Call now and book <br> our taxi for your next ride</h3>
            <a href="taxi.html" class="cta-btn">Choose Your Taxi</a>
        </div><!-- /.container -->
    </section><!-- /.cta-style-one -->
    <footer class="site-footer">
        <img src="{{ asset('conexi/images/background/footer-bg-1-1.png') }}" class="footer-bg" alt="Awesome Image" />
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget about-widget">
                            <div class="widget-title">
                                <h3>About</h3>
                            </div><!-- /.widget-title -->
                            <p>There are many vari of pass of lorem ipsum availab but the majority have suffered in some form by injected humour or words</p>
                            <div class="social-block">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.social-block -->
                        </div><!-- /.footer-widget about-widget -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h3>Links</h3>
                            </div><!-- /.widget-title -->
                            <ul class="link-lists">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Get a Taxi</a></li>
                                <li><a href="#">Our Reviews</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h3>Contact</h3>
                            </div><!-- /.widget-title -->
                            <p>86 Road Broklyn Street, 600 <br> New York, USA</p>
                            <ul class="contact-infos">
                                <li><i class="fa fa-envelope"></i> needhelp@conexi.com</li>
                                <li><i class="fa fa-phone-square"></i> 666 888 000</li>
                            </ul><!-- /.contact-infos -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h3>Newsletter</h3>
                            </div><!-- /.widget-title -->
                            <p>Sign up now for our mailing list to get all latest news <br> and updates from conexi company.</p>
                            <form action="#" class="subscribe-form">
                                <input type="text" name="email" placeholder="Enter your email">
                                <button type="submit">Go</button>
                            </form>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.upper-footer -->
        <div class="bottom-footer">
            <div class="container">
                <div class="inner-container">
                    <div class="left-block">
                        <a href="/" class="footer-logo"><img src="{{ asset('conexi/images/resources/logo-1-1.png') }}" alt="Awesome Image" /></a>
                        <span>&copy; 2020 <a href="#">Tonatheme.com</a></span>
                    </div><!-- /.left-block -->
                    <div class="right-block">
                        <ul class="link-lists">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- /.right-block -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->
    </footer><!-- /.site-footer -->
</div>
@endsection