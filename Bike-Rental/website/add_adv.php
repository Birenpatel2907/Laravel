

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bike On Rent</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />



 
<?php
include_once('topbar.php');
include_once('navbar.php');
include_once('searchbar.php');




?>
</head>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD USER</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add User
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>User ID</label>
								<input class="form-control" type="text" name="uid"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="user_name" disabled/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Category</label>
								<input class="form-control" type="text" name="cate_id"/>
							</div>
                            <div class="form-group">
								<label>Bike Title</label>
								<input class="form-control" type="text" name="bike_title"/>
							</div>
                            <div class="form-group">
								<label>Driver Type</label>
								<input class="form-control" type="text" name="driver_type"/>
							</div>
                            <div class="form-group">
								<label>Adhar Number</label>
								<input class="form-control" type="number" name="bike_no"/>
							</div>
                            <div class="form-group">
								<label>RC Book Number</label>
								<input class="form-control" type="number" name="rc_book"/>
							</div>
                            <div class="form-group">
								<label>Fuel Type</label>
								<input class="form-control" type="text" name="fuel_type"/>
							</div>
                            <div class="form-group">
								<label>Rent Type</label>
								<input type="text" class="form-control" name="rent_type"/>
							</div>
                            <div class="form-group">
								<label>Price</label>
								<input class="form-control" type="number" name="price"/>
							</div>
                            <div class="form-group">
								<label>Rent Description</label>
								<input class="form-control" type="text" name="rent_des"/>
							</div>
                            <div class="form-group">
								<label>Rent Description</label>
								<input class="form-control" type="text" name="rent_des"/>
							</div>
                            <div class="form-group">
								<label>Bike Image</label>
								<input class="form-control" type="file" name="image"/>
							</div>
                            <div class="form-group">
								<label>Terms and Conditions</label>
								<input class="form-control" type="text" name="t_and_c"/>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime-local" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime-local" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
								 <input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 