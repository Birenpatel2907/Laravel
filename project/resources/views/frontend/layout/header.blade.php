<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{url('frontend/assets/css/icomoon.css')}}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{url('frontend/assets/css/ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/css/owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{url('frontend/assets/fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">

	</head>	

	<body>
@include('sweetalert::alert')
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class=""><a href="index">Home</a></li>
	
								<li class="has-dropdown">
									<a  href="{{url('men')}}">Men</a>
									<ul class="dropdown">
										<li><a href="product_detail">Product Detail</a></li>
										<li><a href="cart">Shopping Cart</a></li>
										<li><a href="checkout">Checkout</a></li>
										<li><a href="order_complete">Order Complete</a></li>
										<li><a href="add_to_wishlist">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="{{url('women')}}">Women</a></li>
								<li><a href="{{url('about')}}">About</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
								@if(session()->has('uid'))
									<li class="cart"><a href="{{url('user_logout')}}">Logout</a></li>
									<li class="cart"><a href="{{url('cart')}}"><i class="icon-shopping-cart"></i> Cart [0]</a></li>									
									<li class="cart"><a href="{{url('user_profile')}}">Profile</a></li>
								@else									
									<li class="cart"><a href="{{url('user_login')}}">Login/Signup</a></li>
								@endif
								
							</ul>
						</div>
					</div>
				</div>
			</div>