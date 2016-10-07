<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
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
<header class="cp_header" id="cp-inner-header">
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
<li><a href="login.html">Log in</a></li>
<li><a href="register">Register</a></li>
<li><a href="driver_register">Become A Driver</a></li>
<span class="tp-num">Call Us. +91 84 60 8860 13</span>
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
 
<div class="cp_inner-banner">
<img src="public/images/banner/inner-banner-img-03.jpg" alt="">
 
<div class="cp-inner-banner-holder">
<div class="container">
<h2>Please Login</h2>
 
<ul class="breadcrumb">
<li><a href="index-2.html">Home</a></li>
<li class="active">Login</li>
</ul> 
</div>
</div> 
<div class="animate-bus">
<img src="public/images/animate-bus2.png" alt="">
</div>
</div>
 
 
<div id="cp-main-content">
 
<section class="cp-reservation-section pd-tb80">
<div class="container">
<div class="cp-heading-style1">
<h2>Driver<span>Login</span></h2>
</div>


<!--rigistration form-->
<div class="cp-reservation-box cp-login-box">
<h3>Please enter to Login</h3>

{!! Form::open(array('url' => 'login-driver')) !!}
    <div class="inner-holder">
      <label>Enter Your Username</label>
      <input type="text" name="email" placeholder="Email Address">
    </div>

    <div class="inner-holder">
      <label>Enter The Password</label>
      <input type="password" name="password" placeholder="Enter Password">
    </div>

    <div>
      <input type="submit" name="login" class="submit" value="Login">
    </div>
{!! Form::close() !!}

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
 
<script src="public/js/html5shiv.js" type="public/text/javascript"></script>
 
<script type="text/javascript" src="public/js/migrate.js"></script>
 
<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
 
<script type="text/javascript" src="public/js/custom-script.js"></script>

<script type="text/javascript" src="public/js/custom.js"></script>



</body>

</html>