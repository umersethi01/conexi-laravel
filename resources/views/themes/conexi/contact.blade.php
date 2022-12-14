
@extends('themes.conexi.layouts.app')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="thm-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><span class="sep">.</span></li>
            <li><span class="page-title">Contact</span></li>
        </ul><!-- /.thm-breadcrumb -->
        <h2>Contact</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<div class="contact-page-map-wrapper">
    <div class="google-map" id="contact-google-map" data-map-lat="40.712784" data-map-lng="-74.005941" data-icon-path="conexi/images/resources/map-pin-1-1.png') }}" data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="11" data-markers='{
                "marker-1": [40.712784, -74.005941, "<h4>Main Office</h4><p>Babylon Branch , Lindenhurst, UK</p>"],
                "marker-2": [40.728157, -74.077642, "<h4>Branch Office</h4> <p>291 Park Ave S, East Meadow, UK</p>"]
            }'>
    </div>
    <div class="contact-info-block">
        <p>86 Road Broklyn Street, 600 <br> New York, USA</p>
        <ul class="contact-infos">
            <li><i class="fa fa-envelope"></i> needhelp@conexi.com</li>
            <li><i class="fa fa-phone-square"></i> 666 888 000</li>
        </ul><!-- /.contact-infos -->
    </div><!-- /.contact-info-block -->
</div><!-- /.contact-page-map-wrapper -->
<section class="contact-form-style-one">
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Contact with us now</p>
            <h2>Leave a message</h2>
        </div><!-- /.block-title -->
        <form action="inc/sendmail.php" class="contact-form-one row" id="contact-form" method="post">
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_name" placeholder="Your name">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email" name="form_email" placeholder="Email address">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_phone" placeholder="Phone">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_subject" placeholder="Subject">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder">
                    <textarea class="form-control" name="form_message" placeholder="Write message"></textarea>
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
</section>
@endsection
