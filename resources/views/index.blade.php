<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cab On Click</title>
 

 


<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="public/css/theme-color.css" type="text/css">
 
<link rel="stylesheet" href="public/css/responsive.css" type="text/css">
 
<link rel="stylesheet" href="public/css/owl.carousel.css" type="text/css">
 
<link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
 
<link rel="stylesheet" href="public/css/icomoon.css" type="text/css">
 
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,600,700,900,800,200,100,500,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
 
<div id="wrapper">

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
 
<header class="cp_header">
<div id="cp-slide-menu" class="cp_side-navigation">
<ul class="navbar-nav">
<li id="close"><a href="#"><i class="fa fa-close"></i></a></li>
<li><a href="index-2.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="offers.html">Online Offers</a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FAQs <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="faq.html">FAQs</a></li>
<li><a href="faq-sidebar.html">FAQs With Sidebar</a></li>
<li><a href="faq-terms.html">Terms & Condition</a></li>
<li><a href="faq-terms.html">Privacy Scurity</a></li>
</ul>
</li>
<li><a href="booking.html">View a booking</a>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="blog.html">Ride Sharing</a></li>
<li><a href="blog-sidebar.html">Blog with Sidebar</a></li>
<li><a href="blog-detail.html">Blog Detail</a></li>
</ul>
</li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="#">Gallery</a>
<ul>
<li><a href="gallery.html">Our Gallery</a></li>
<li><a href="gallery-2.html">Gallery 2 Col</a></li>
<li><a href="gallery-3.html">Gallery 3 Col</a></li>
<li><a href="gallery-full.html">Gallery Full Width</a></li>
</ul>
</li>
<li><a href="testimonial.html">Testimonial</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="reservation.html">Reservation</a></li>
</ul>
</li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Us<i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="contact-us.html">Contact Us</a></li>
<li><a href="contact-us2.html">Contact Us 2</a></li>
</ul>
</li>
</ul>
</div>
<div id="cp-slide-search" class="cp_side-search">
<form method="get">
<input type="text" placeholder="Enter Your Name..." required>
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
 
<div class="cp-navigation-row">
<div class="container">
<div class="row">
<div class="col-md-12">
 
<div class="cp-topbar">
<ul class="top-listed">
<li><a href="login">Log in</a></li>
<li><a href="register">Register</a></li>
<li>
<a href="driver_register">Become A driver</a>
</li>
<li>
<a href="driverlogin">Driver Login</a>
</li>
</ul>
<span class="tp-num">Call Us. +91 8460 8860 13</span>
</div> 
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-12 col-xs-6">
 
<strong class="cp-logo">
<a href="index-2.html"><img src="public/images/cp-logo.png" alt=""></a>
</strong> 
</div>
<div class="col-md-9 col-sm-12 col-xs-6">
 
<div class="cp-nav-holder">
<ul class="navbar-nav">
<li><a href="index-2.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="offers.html">Online Offers</a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FAQs <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="faq.html">FAQs</a></li>
<li><a href="faq-sidebar.html">FAQs With Sidebar</a></li>
<li><a href="faq-terms.html">Terms & Condition</a></li>
<li><a href="faq-terms.html">Privacy Scurity</a></li>
</ul>
</li>
<li><a href="booking.html">View a booking</a>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="blog.html">Blog</a></li>
<li><a href="blog-sidebar.html">Blog with Sidebar</a></li>
<li><a href="blog-detail.html">Blog Detail</a></li>
</ul>
</li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="#">Gallery</a>
<ul>
<li><a href="gallery.html">Our Gallery</a></li>
<li><a href="gallery-2.html">Gallery 2 Col</a></li>
<li><a href="gallery-3.html">Gallery 3 Col</a></li>
<li><a href="gallery-full.html">Gallery Full Width</a></li>
</ul>
</li>
<li><a href="testimonial.html">Testimonial</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="reservation.html">Reservation</a></li>
</ul>
</li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Us<i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a href="contact-us.html">Contact Us</a></li>
<li><a href="contact-us2.html">Contact Us 2</a></li>
</ul>
</li>
</ul>
<ul class="nav-right-listed">
<li id="search-push"><i class="fa fa-search"></i></li>
<li id="push" class="cp-sidemenu"><a href="#"><i class="fa fa-align-justify"></i></a></li>
</ul>
</div> 
</div>
</div>
</div>
</div> 
</header> 
 
<div class="cp_banner">
 
<div class="owl-carousel" id="cp_banner-slider">
 
<div class="item">
<img src="public/images/banner/banner-img-01.jpg" alt="">
 
<div class="cp-banner-caption">
<div class="container">
<div class="banner-inner-holder">
<strong class="banner-title">Book a Car</strong>
<h2>A rELIABLE WAY TO TRAVEL</h2>
<a href="#" class="cp-btn-style1">Search Now</a>
</div>
</div>
</div> 
</div> 
 
<div class="item">
<img src="public/images/banner/banner-img-02.jpg" alt="">
 
<div class="cp-banner-caption">
<div class="container">
<div class="banner-inner-holder">
<strong class="banner-title">Save Time</strong>
<h2>Save time when you arrive!</h2>
<a href="#" class="cp-btn-style1">Search Now</a>
</div>
</div>
</div> 
</div> 
 
<div class="item">
<img src="public/images/banner/banner-img-03.jpg" alt="">
 
<div class="cp-banner-caption">
<div class="container">
<div class="banner-inner-holder">
<strong class="banner-title">Get Startd!</strong>
<h2>Rent for a month. Save $50.</h2>
<a href="#" class="cp-btn-style1">Search Now</a>
</div>
</div>
</div> 
</div> 
</div> 
</div> 
 
<div id="cp-main-content">
 
<section class="cp-booking-section pd-b80">
<div class="container">
<div class="cp-heading-style1">
<h2>Book <span>Taxi Now</span></h2>
</div>
 
<div class="cp-booking-form-outer">
<form method="get">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="booking-inner-holder">
<label>Pick-up Location</label>
<select>
<option value="">UK</option>
<option value="">USA</option>
<option value="">UAE</option>
<option value="">Canada</option>
<option value="">Denmark</option>
<option value="">Spain</option>
</select>
</div>
<div class="booking-inner-holder">
<label>Pick-up Date</label>
<div class="booking-date">
<div class="inner">
<input type="text" placeholder="31">
<span>Day</span>
</div>
<div class="inner">
<input type="text" placeholder="10">
<span>Month</span>
</div>
<div class="inner">
<input type="text" placeholder="2016">
<span>Year</span>
</div>
<div class="inner inner2">
<span>at</span>
</div>
<div class="inner">
<select>
<option value="">20</option>
<option value="">19</option>
<option value="">18</option>
<option value="">17</option>
<option value="">16</option>
</select>
<span>Hours</span>
</div>
<div class="inner">
<select>
<option value="">10</option>
<option value="">11</option>
<option value="">12</option>
<option value="">13</option>
<option value="">14</option>
</select>
<span>Minutas</span>
</div>
<div class="inner inner2">
<i class="fa fa-calendar-check-o"></i>
</div>
</div>
</div>
<div class="booking-inner-holder booking-inner-holder2">
<label>License type:</label>
<select>
<option value="">Full European Liense</option>
<option value="">Full UK Liense</option>
<option value="">Full UAE Liense</option>
<option value="">Full USA Liense</option>
</select>
</div>
<div class="booking-inner-holder booking-inner-holder2">
<label>Currency:</label>
<select>
<option value="">Dollar</option>
<option value="">Euro</option>
<option value="">Armenian dram</option>
<option value="">Bahraini dinar</option>
<option value="">Pound</option>
</select>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="first-col">
<div class="booking-inner-holder">
<label>Drop-up Location</label>
<select>
<option value="">Uk</option>
<option value="">USA</option>
<option value="">UAE</option>
<option value="">Canada</option>
<option value="">Denmark</option>
<option value="">Spain</option>
</select>
</div>
<div class="booking-inner-holder">
<label>Drop-off Date </label>
<div class="booking-date">
<div class="inner">
<input type="text" placeholder="31">
<span>Day</span>
</div>
<div class="inner">
<input type="text" placeholder="10">
<span>Month</span>
</div>
<div class="inner">
<input type="text" placeholder="2016">
<span>Year</span>
</div>
<div class="inner inner2">
<span>at</span>
</div>
<div class="inner">
<select>
<option value="">20</option>
<option value="">19</option>
<option value="">18</option>
<option value="">17</option>
<option value="">16</option>
</select>
<span>Hours</span>
</div>
<div class="inner">
<select>
<option value="">10</option>
<option value="">11</option>
<option value="">12</option>
<option value="">13</option>
<option value="">14</option>
</select>
<span>Minutas</span>
</div>
<div class="inner inner2">
<i class="fa fa-calendar-check-o"></i>
</div>
</div>
</div>
<div class="booking-inner-holder booking-inner-holder2">
<label>Drivers age:</label>
<select>
<option value="">20</option>
<option value="">22</option>
<option value="">25</option>
<option value="">30</option>
<option value="">34</option>
<option value="">37</option>
</select>
</div>
</div>
<div class="second-col">
<div class="booking-check-box">
<span>Car Type</span>
<label><input type="checkbox"> Standart Cars </label>
<label><input type="checkbox"> Convertibles </label>
<label><input type="checkbox"> Luxury </label>
<label><input type="checkbox"> Cars </label>
<label><input type="checkbox"> Vans </label>
<label><input type="checkbox"> SUVs</label>
</div>
<button class="cp-btn-style1" type="submit">Search Now</button>
</div>
</div>
</div>
</form>
</div> 
</div>
</section> 
 
<section class="cp-taxi-section pd-tb80">
<div class="container">
<div class="cp-heading-style1">
<h2>Choose your <span>Taxi</span></h2>
</div>
<div class="cp-tabs-holder">
 
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#tab-01" aria-controls="tab-01" role="tab" data-toggle="tab">Town Taxi</a></li>
<li><a href="#tab-02" aria-controls="tab-02" role="tab" data-toggle="tab">Hybrid Taxi</a></li>
<li><a href="#tab-03" aria-controls="tab-03" role="tab" data-toggle="tab">Limousine Taxi</a></li>
<li><a href="#tab-04" aria-controls="tab-04" role="tab" data-toggle="tab">SUV Taxi</a></li>
</ul>
 
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="tab-01">
<div class="row">
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-01.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Cci-Fiat 500</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>130 000 km</span></li>
<li>Volume capacity: <span>1.3l</span></li>
<li>Price: <strong>$25.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-02.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Toyotie </h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>140 000 km </span></li>
<li>Volume capacity: <span>2.3l</span></li>
<li>Price: <strong>$29.895</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-03.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Fiat 800</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>155 000 km</span></li>
<li>Volume capacity: <span>1.6l</span></li>
<li>Price: <strong>$35.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab-02">
<div class="row">
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-02.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Cci-Fiat 500</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>130 000 km</span></li>
<li>Volume capacity: <span>1.3l</span></li>
<li>Price: <strong>$25.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-03.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Toyotie </h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>140 000 km </span></li>
<li>Volume capacity: <span>2.3l</span></li>
<li>Price: <strong>$29.895</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-01.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Fiat 800</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>155 000 km</span></li>
<li>Volume capacity: <span>1.6l</span></li>
<li>Price: <strong>$35.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab-03">
<div class="row">
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-03.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Cci-Fiat 500</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>130 000 km</span></li>
<li>Volume capacity: <span>1.3l</span></li>
<li>Price: <strong>$25.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-01.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Toyotie </h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>140 000 km </span></li>
<li>Volume capacity: <span>2.3l</span></li>
<li>Price: <strong>$29.895</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-02.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Fiat 800</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>155 000 km</span></li>
<li>Volume capacity: <span>1.6l</span></li>
<li>Price: <strong>$35.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab-04">
<div class="row">
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-03.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Cci-Fiat 700</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>120 000 km</span></li>
<li>Volume capacity: <span>1.3l</span></li>
<li>Price: <strong>$25.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-02.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Toyotie </h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>140 000 km </span></li>
<li>Volume capacity: <span>2.3l</span></li>
<li>Price: <strong>$29.895</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
<div class="col-md-4 col-sm-6">
 
<article class="cp-taxi-holder">
<figure class="cp-thumb">
<img src="public/images/taxi-img-01.jpg" alt="">
</figure>
<div class="cp-text">
<h3>Fiat 800</h3>
<ul class="cp-meta-listed">
<li>Mileage: <span>155 000 km</span></li>
<li>Volume capacity: <span>1.6l</span></li>
<li>Price: <strong>$35.899</strong></li>
</ul>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div>
</article> 
</div>
</div>
</div>
</div>
</div>
</div>
</section> 
 
<section class="cp-why-choose-section pd-tb80">
<div class="container">
 
<div class="cp-why-choose-text">
<a href="booking.html" class="choose-btn">Book your cab with confidence</a>
<h3>Why Choose</h3>
<h2> <span>tAXIGO</span> for taxi hire </h2>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly or randomised words which don't believable. </p>
<a href="booking.html" class="cp-btn-style1">Book Now</a>
</div> 
 
<ul class="cp-why-choose-listed">
<li>
<div class="cp-box">
<img src="public/images/why-choose-img-01.png" alt="">
<h3>Inclusive Rates</h3>
<span class="icon-cash19 icomoon"></span>
<p> We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="#" class="readmore">Read More</a>
</div>
</li>
<li>
<div class="cp-box cp-box2">
<img src="public/images/why-choose-img-03.png" alt="">
<h3>Easy Searching</h3>
<span class="icon-transport1105 icomoon"></span>
<p> We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="#" class="readmore">Read More</a>
</div>
</li>
<li>
<div class="cp-box">
<img src="public/images/why-choose-img-02.png" alt="">
<h3>Home Pickup</h3>
<span class="icon-house158 icomoon"></span>
<p> We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="#" class="readmore">Read More</a>
</div>
</li>
</ul> 
</div>
</section> 
 
<section class="cp-parallax-section">
<div id="cp-map-home"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-12 col-md-offset-2">
 
<div class="cp-parallax-box">
<h2>Not sure where the best</h2>
<h3>Place to collect your <span>CAR RENTAL</span> is?</h3>
<div class="cp-location-box">
<h3>Try Our location finder</h3>
<ul class="cp-location-listed">
<li>Find rental loaction on map</li>
<li>Check ‘One way rental’ Fees</li>
<li>Plan a route <a href="#" class="cp-btn-style1">Try It Now</a></li>
</ul>
</div>
</div> 
</div>
</div>
</div>
<div class="animate-bus">
<img src="public/images/animate-bus2.png" alt="">
</div>
</section> 
 
<section class="cp-driver-section pd-tb80">
<div class="container">
<div class="cp-heading-style1">
<h2>Drivers <span>For Hire</span></h2>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
 
<figure class="cp-driver-box">
<img src="public/images/driver-img-01.jpg" alt="">
<figcaption class="cp-caption">
<h4><a href="booking.html">Anita Doe</a></h4>
<ul class="cp-meta-listed">
<li>Cab: <span>Driver</span></li>
<li>Age: <span>27</span></li>
</ul>
</figcaption>
</figure>
 
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 
<figure class="cp-driver-box">
<img src="public/images/driver-img-02.jpg" alt="">
<figcaption class="cp-caption">
<h4><a href="booking.html">Adam Eli</a></h4>
<ul class="cp-meta-listed">
<li>Part time: <span>Driver</span></li>
<li>Age: <span>25</span></li>
</ul>
</figcaption>
</figure>
 
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 
<figure class="cp-driver-box">
<img src="public/images/driver-img-03.jpg" alt="">
<figcaption class="cp-caption">
<h4><a href="booking.html">Johni Yoe</a></h4>
<ul class="cp-meta-listed">
<li>Full time: <span>Driver</span></li>
<li>Age: <span>29</span></li>
</ul>
</figcaption>
</figure>
 
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 
<figure class="cp-driver-box">
<img src="public/images/driver-img-04.jpg" alt="">
<figcaption class="cp-caption">
<h4><a href="booking.html">Anita Doe</a></h4>
<ul class="cp-meta-listed">
<li>Cab: <span>Driver</span></li>
<li>Age: <span>21</span></li>
</ul>
</figcaption>
</figure>
 
</div>
</div>
</div>
</section> 
 
<section class="cp-testimonial-section pd-tb80">
<div class="container">
<div class="cp-heading-style2">
<h2>Latest <span>Reviews</span></h2>
</div>
<div class="owl-carousel" id="cp-testimonial-slider">
<div class="item">
<div class="cp-testimonial-inner">
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="cp-text">
<strong>Highly recommended by our customers</strong>
<blockquote class="cp-blockquote">
Sabemos que el diferencial está en los detalles, y es por ello que nuestros se
vicios en alquiler de vehículos, tanto en el sector turístico como en el empr
sarial, se destacan por su calidad y buen gusto para brindarte una experien
cia única, segura y agradable.
</blockquote>
<span>ALBERT EISHAL, ART DIRECTOR</span>
</div>
</div>
<div class="col-md-4 col-sm-4">
<span class="cp-icon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
</div>
</div>
<div class="item">
<div class="cp-testimonial-inner">
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="cp-text">
<strong>Highly recommended by our clients</strong>
<blockquote class="cp-blockquote">
Tanto en el sector turístico como en el empr
sarial, se destacan por su calidad y buen gusto para brindarte una experien
cia única, segura y agradable Sabemos que el diferencial está en los detalles, y es por ello que nuestros se
vicios en alquiler de vehículos, .
</blockquote>
<span>Niky John, ART DIRECTOR</span>
</div>
</div>
<div class="col-md-4 col-sm-4">
<span class="cp-icon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
</div>
</div>
<div class="item">
<div class="cp-testimonial-inner">
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="cp-text">
<strong>Highly recommended by our customers</strong>
<blockquote class="cp-blockquote">
Sabemos que el diferencial está en los detalles, y es por ello que nuestros se
vicios en alquiler de vehículos, tanto en el sector turístico como en el empr
sarial, se destacan por su calidad y buen gusto para brindarte una experien
cia única, segura y agradable.
</blockquote>
<span>William Bard, ART DIRECTOR</span>
</div>
</div>
<div class="col-md-4 col-sm-4">
<span class="cp-icon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section> 
 
<section class="cp-mobile-app-section pd-tb80">
<div class="container">
<div class="cp-heading-style1">
<h2>TaxiGo <span>Mobile App</span></h2>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="cp-app-thumb">
<img class="app-img1" src="public/images/mobile-img-02.png" alt="">
<img class="app-img2" src="public/images/mobile-img-01.png" alt="">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="cp-app-text">
<h4>Downlaod the TaxiGo voucher app free! <br> Say Goodbye to paper vouchers</h4>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
<p>But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
<strong>Searcg TaxiGo on iphone & Android market places</strong>
<ul class="cp-app-btn">
<li><a href="#"><img src="public/images/g-play-img.png" alt=""></a></li>
<li><a href="#"><img src="public/images/app-img.png" alt=""></a></li>
</ul>
</div>
</div>
</div>
</div>
</section> 
 
<section class="cp-faq-section pd-tb80">
<div class="container">
<div class="cp-heading-style1">
<h2>Our News & <span>Faqs</span></h2>
</div>
<div class="row">
<div class="col-md-6">
 
<div class="cp-testimonial-outer">
<div class="owl-carousel" id="cp-test-slider2">
<div class="item">
 
<div class="cp-testimonial-box">
<span class="date">Feb 12, 2016</span>
<h4>Here is the best way to collect your taxi</h4>
<p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations urna nibh ut, etiam libero nisl, in magna fusce in feugia.... <a href="blog-detail.html">{+}</a></p>
<div class="test-bottom">
<div class="thumb">
<img class="img-circle" src="public/images/test-sm-thumb.jpg" alt="">
</div>
<p>By Jennifer Freemean</p>
</div>
</div> 
</div>
<div class="item">
 
<div class="cp-testimonial-box">
<span class="date">Feb 20, 2016</span>
<h4>Here is the best way to collect your taxi</h4>
<p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations urna nibh ut, etiam libero nisl, in magna fusce in feugia.... <a href="blog-detail.html">{+}</a></p>
<div class="test-bottom">
<div class="thumb">
<img class="img-circle" src="public/images/test-sm-thumb.jpg" alt="">
</div>
<p>By Niky Bard</p>
</div>
</div> 
</div>
<div class="item">
 
<div class="cp-testimonial-box">
<span class="date">June 2, 2016</span>
<h4>Here is the best way to collect your taxi</h4>
<p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations urna nibh ut, etiam libero nisl, in magna fusce in feugia.... <a href="blog-detail.html">{+}</a></p>
<div class="test-bottom">
<div class="thumb">
<img class="img-circle" src="public/images/test-sm-thumb.jpg" alt="">
</div>
<p>By allie johnfar</p>
</div>
</div> 
</div>
</div>
<a href="blog-detail.html" class="cp-read-more">More Blog Posts</a>
</div> 
</div>
<div class="col-md-6">
 
<div class="cp-accordian-item">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="cp-tab-One">
<div class="panel-title">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#cp-tab-collapse1" aria-expanded="true" aria-controls="cp-tab-collapse1">
What do your rates include?
</a>
</div>
</div>
<div id="cp-tab-collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="cp-tab-One">
<div class="panel-body">
<div class="cp-thumb"><img src="public/images/car-sm-01.jpg" alt=""></div>
<div class="cp-text">
<p>Speeding and minor offences are fine and will not incur any additional fee's. Any other offences should be checked with our reservations....</p>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="cp-tab-Two">
<div class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cp-tab-collapse2" aria-expanded="false" aria-controls="cp-tab-collapse2">
Can I drive the vehicle out of State?
</a>
</div>
</div>
<div id="cp-tab-collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cp-tab-Two">
<div class="panel-body">
<div class="cp-thumb"><img src="public/images/car-sm-01.jpg" alt=""></div>
<div class="cp-text">
<p>Speeding and minor offences are fine and will not incur any additional fee's. Any other offences should be checked with our reservations....</p>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="cp-tab-Three">
<div class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cp-tab-collapse3" aria-expanded="false" aria-controls="cp-tab-collapse3">
Are there any hidden charges?
</a>
</div>
</div>
<div id="cp-tab-collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cp-tab-Three">
<div class="panel-body">
<div class="cp-thumb"><img src="public/images/car-sm-01.jpg" alt=""></div>
<div class="cp-text">
<p>Speeding and minor offences are fine and will not incur any additional fee's. Any other offences should be checked with our reservations....</p>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="cp-tab-Four">
<div class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cp-tab-collapse4" aria-expanded="false" aria-controls="cp-tab-collapse4">
One Way Rental and how much they cost?
</a>
</div>
</div>
<div id="cp-tab-collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cp-tab-Four">
<div class="panel-body">
<div class="cp-thumb"><img src="public/images/car-sm-01.jpg" alt=""></div>
<div class="cp-text">
<p>Speeding and minor offences are fine and will not incur any additional fee's. Any other offences should be checked with our reservations....</p>
</div>
</div>
</div>
</div>
</div>
<a href="faq.html" class="cp-read-more">More FAQs</a>
</div> 
</div>
</div>
</div>
</section> 
 
<section class="cp-advertising-section pd-tb80">
<div class="container">
<div class="cp-heading-style2">
<h2>Taxi <span>Advertising</span></h2>
</div>
<div class="row">
<div class="col-md-4 col-sm-12">
 
<div class="cp-advertising-box">
<figure class="thumb">
<img src="public/images/advertising-sm-thumb-01.png" alt="">
<span class="num">1</span>
</figure>
<div class="cp-text">
<h4>Choose a taxi model</h4>
<p>Speeding and minor offences are fine and will not incur any additional...{+}</p>
</div>
</div> 
</div>
<div class="col-md-4 col-sm-12">
 
<div class="cp-advertising-box">
<figure class="thumb">
<img src="public/images/advertising-sm-thumb-02.png" alt="">
<span class="num">2</span>
</figure>
<div class="cp-text">
<h4>Advertising position</h4>
<p>Speeding and minor offences are fine and will not incur any additional...{+}</p>
</div>
</div> 
</div>
<div class="col-md-4 col-sm-12">
 
<div class="cp-advertising-box">
<figure class="thumb">
<img src="public/images/advertising-sm-thumb-03.png" alt="">
<span class="num">3</span>
</figure>
<div class="cp-text">
<h4>Select time period</h4>
<p>Speeding and minor offences are fine and will not incur any additional...{+}</p>
</div>
</div> 
</div>
<div class="col-md-12 cp-btn-holder">
<a href="#" class="cp-btn-style1">Pricing Plans</a>
</div>
</div>
</div>
</section> 
</div> 
 
<footer class="cp_footer">
 
<section class="cp-ft-top-section pd-t80">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="footer-about-box">
<strong class="logo">
<a href="index-2.html"><img src="public/images/cp-logo2.png" alt=""></a>
</strong>
<p>The Company downminor offences are fine and will not incur any additional fee's. Any other offences should be checked with our reservations urna nibh ut, our reservations alias consequatur aut perferendis doloribus asurna etiam libero nisl, in magna feugia.</p>
<ul class="cp-social-links">
<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-heart-o"></i></a></li>
<li><a href="#"><i class="fa fa-rss"></i></a></li>
<li><a href="#"><i class="fa  fa-envelope"></i></a></li>
</ul>
<ul class="cp-logo-listed">
<li><a href="#"><img src="public/images/company-logo1.jpg" alt=""></a></li>
<li><a href="#"><img src="public/images/company-logo2.jpg" alt=""></a></li>
<li><a href="#"><img src="public/images/company-logo3.jpg" alt=""></a></li>
<li><a href="#"><img src="public/images/company-logo4.jpg" alt=""></a></li>
</ul>
</div>
</div>
</div>
</div>
</section> 
 
<section class="cp-ft-bottom-section">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-12">
 
<div class="cp-ft-form-box">
<h4>Already Regiterd? <a href="#">Sign in Now</a></h4>
<form action="http://html.crunchpress.com/taxigo/form.php" method="post">
<div class="inner-holder">
<input type="text" placeholder="Name" required pattern="[a-zA-Z ]+">
</div>
<div class="inner-holder">
<input type="text" placeholder="Email" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
</div>
<div class="inner-holder inner-holder2">
<button type="submit" class="btn-submit" value="Submit">Search Now</button>
</div>
<label> <input type="checkbox"> Remember me </label>
<label><a href="#" class="remember-pw">Forgot the password</a></label>
</form>
</div> 
</div>
<div class="col-md-7 col-sm-12">
 
<nav class="cp-footer-nav">
<ul>
<li><a href="index-2.html">Home</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="offers.html">Online Offers</a></li>
<li><a href="faq.html">FAQs</a></li>
<li><a href="booking.html">View a booking</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="contact-us.html">Contact Us</a></li>
</ul>
</nav> 
<p> All Rights Reserved 2016 </p>
</div>
</div>
</div>
</section> 
</footer> 
</div> 
 
<script type="text/javascript" src="public/js/jquery-1.11.3.min.js"></script>
 
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
 
<script src="public/js/html5shiv.js" type="text/javascript"></script>
 
<script type="text/javascript" src="public/js/migrate.js"></script>
 
<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/map.js"></script>
 
<script type="text/javascript" src="public/js/custom-script.js"></script>
</body>

<!-- Mirrored from html.crunchpress.com/taxigo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2016 07:21:29 GMT -->
</html>