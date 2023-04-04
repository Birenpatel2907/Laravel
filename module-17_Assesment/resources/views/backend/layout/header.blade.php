<?php
if(session()->has('id'))
{
	
}
else
{
	echo "<script>
		window.location='/admin';
	</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{url('backend/assets/images/fevicon.png')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{url('backend/assets/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{url('backend/assets/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{url('backend/assets/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{url('backend/assets/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{url('backend/assets/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
   @include('sweetalert::alert')
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index"><img class="logo_icon img-responsive" src="{{url('backend/assets/images/logo/logo_icon.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{url('backend/assets/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{session('name')}}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Tables & Dashboard</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
				
                     <li class="">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Passport</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="{{url('/adduser')}}">> <span>Add User Passport</span></a>
                           </li>
                           <li>
                              <a href="{{url('/manageuser')}}">> <span>Manage User Passport</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     
					 
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index" class="top" style="color: white; font-weight: bold; font-size:25px;"><img class="img-responsive" src="{{url('backend/assets/images/logo/logo.png')}}" alt="#" />ADMIN PANEL</a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{url('backend/assets/images/layout_img/user_img.jpg')}}" alt="#" /><span class="name_user">{{session('name')}}</span></a>
                                    <div class="dropdown-menu">
                                       
                                       <a class="dropdown-item" href="{{url('/adminlogout')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->