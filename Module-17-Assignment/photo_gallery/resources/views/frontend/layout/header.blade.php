<!DOCTYPE html>
<html lang="en">
<head>

<title>Scenic</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">

<link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{url('frontend/css/tooplate-style.css')}}">

</head>
<body>
@include('sweetalert::alert')
<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="" class="navbar-brand">Scenic</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="home" class="smoothScroll">Home</a></li>
                    <li><a href="about" class="smoothScroll">About</a></li>
                    <li><a href="imagegallery" class="smoothScroll">Gallery</a></li>  
                    <li><a href="contact" class="smoothScroll">Contact Us</a></li>
					@if(session()->has('name'))
						
						<li><a href="" class="smoothScroll">Welcome {{session('name')}}</a></li>
						<li><a href="logout" class="smoothScroll">Logout</a></li>
					@else
					<li><a href="signup" class="smoothScroll">Register</a></li>
					<li><a href="login" class="smoothScroll">Login</a></li>
					@endif
               </ul>
          </div>

     </div>
</div>
