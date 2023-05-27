

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

<?php
include_once('topbar.php');
include_once('navbar.php');



?>
</head>





<body>
    <form id="form" enctype="multipart/form-data" method="post">
    <div class="section-heading p-5 text-center">
    <h2 class="display-4 text-center mb-5">Login</h2>
              
            </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
           
    
              <div class="p-3 p-lg-5 border">
              
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="signup" name="unm" data-bvalidator="required,email">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger" >*</span></label>
                    <input type="password" class="form-control" id="" name="pass" data-bvalidator="required">
                  </div>
                </div>
				
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit"  name="submit" class="btn btn-primary btn-lg btn-block" value="Login Here">
                  </div> 
				  <div class="col-lg-12">
                    <a href="signup" name="submit" > Not Registered then Register Here</a>
                  </div> 
                </div>
              </div>
          
          </div>
          
        </div>
      </div>
    </div>
    </form>
    
<?php
include_once('footer.php');
?>

<script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />

 

<!-- add script & call FORM id -->


<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form').bValidator();
    });
	</script> 


