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
      <title>Footwear Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="backend/assets/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="backend/assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="backend/assets/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="backend/assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="backend/assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="backend/assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="backend/assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="backend/assets/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="backend/assets/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      @include('sweetalert::alert')
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="backend/assets/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="{{url('/admin_index')}}" method="post">
                        @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="anm" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="apass" placeholder="Password" />
                           </div>
                          
                           <div class="field margin_0">
          
                              <input type="submit" name="submit" value="login" class="main_bt">
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="backend/assets/js/jquery.min.js"></script>
      <script src="backend/assets/js/popper.min.js"></script>
      <script src="backend/assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="backend/assets/js/animate.js"></script>
      <!-- select country -->
      <script src="backend/assets/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="backend/assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="backend/assets/js/custom.js"></script>
   </body>
</html>