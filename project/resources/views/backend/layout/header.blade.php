
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Footwear Admin Panel</title>
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
                        <a href="{{url('index')}}"><img class="logo_icon img-responsive" src="backend/assets/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{url('backend/assets/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{session('aname')}}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Tables & Dashboard</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="{{url('dashboard')}}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>

                  
                     <li class="">
                        <a href="#products" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Products</span></a>
                        <ul class="collapse list-unstyled" id="products">
                           <li>
                              <a href="{{url('/add_products')}}">> <span>Add Products</span></a>
                           </li>
                           <li>
                              <a href="{{url('manage_products')}}">> <span>Manage Products</span></a>
                           </li>
                           
                        </ul>
                     </li>                    
                     <li class="">
                        <a href="#types" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Types</span></a>
                        <ul class="collapse list-unstyled" id="types">
                           <li>
                              <a href="{{url('/add_types')}}">> <span>Add Types</span></a>
                           </li>
                           <li>
                              <a href="{{url('/manage_types')}}">> <span>Manage Types</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li class="">
                        <a href="#brands" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Brands</span></a>
                        <ul class="collapse list-unstyled" id="brands">
                           <li>
                              <a href="{{url('/add_brands')}}">> <span>Add Brands</span></a>
                           </li>
                           <li>
                              <a href="{{url('manage_brands')}}">> <span>Manage Brands</span></a>
                           </li>  
                        </ul>
                     </li>
                     <li class="">
                        <a href="#sizes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Size</span></a>
                        <ul class="collapse list-unstyled" id="sizes">
                           <li>
                              <a href="{{url('/add_sizes')}}">> <span>Add Sizes</span></a>
                           </li>
                           <li>
                              <a href="{{url('manage_sizes')}}">> <span>Manage Sizes</span></a>
                           </li>  
                        </ul>
                     </li>
                     <li class="">
                        <a href="#colors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Colors</span></a>
                        <ul class="collapse list-unstyled" id="colors">
                           <li>
                              <a href="{{url('/add_colors')}}">> <span>Add Colors</span></a>
                           </li>
                           <li>
                              <a href="{{url('/manage_colors')}}">> <span>Manage Colors</span></a>
                           </li>  
                        </ul>
                     </li>
                     <li class="">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Users</span></a>
                        <ul class="collapse list-unstyled" id="users">
                           <li>
                              <a href="{{url('manage_users')}}">> <span>Manage Users</span></a>
                           </li>
                        </ul>
                     </li>
                     <li class="">
                        <a href="#feedbacks" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>feedbacks</span></a>
                        <ul class="collapse list-unstyled" id="feedbacks">
                           <li>
                              <a href="{{url('manage_feedbacks')}}">> <span>Manage Feedbacks</span></a>
                           </li>
                        </ul>
                     </li>
                     <li class="">
                        <a href="#orders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Orders</span></a>
                        <ul class="collapse list-unstyled" id="orders">
                           <li>
                              <a href="{{url('manage_orders')}}">> <span>view Orders</span></a>
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
                           <a href="{{url('index')}}" class="top" style="color: white; font-weight: bold; font-size:25px;"><img class="img-responsive" src="backend/assets/images/logo/logo.png" alt="#" />ADMIN PANEL</a>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="backend/assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">{{session('aname')}}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile">My Profile</a>
                                       <a class="dropdown-item" href="settings">Settings</a>
                                       <a class="dropdown-item" href="help">Help</a>

                                       <a class="dropdown-item" href="logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>

                                    
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->

  <!-- jQuery -->
      <script src="{{url('backend/assets/js/jquery.min.js')}}"></script>
      <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
      <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{url('backend/assets/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{url('backend/assets/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{url('backend/assets/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{url('backend/assets/js/Chart.min.js')}}"></script>
      <script src="{{url('backend/assets/js/Chart.bundle.min.js')}}"></script>
      <script src="{{url('backend/assets/js/utils.js')}}"></script>
      <script src="{{url('backend/assets/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{url('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{url('backend/assets/js/chart_custom_style1.js')}}"></script>
      <script src="{{url('backend/assets/js/custom.js')}}"></script>



   


   </body>
</html> 