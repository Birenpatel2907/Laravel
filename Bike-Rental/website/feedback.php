


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

if (empty($_SESSION['uid'])) {
  include_once('index.php');
}

?>
</head>


<body>
    <form action="#" id="form" enctype="multipart/form-data" method="post">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
        <h2 class="display-4 text-center mb-5">Feedback</h2>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form>
                      
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Your Feedback"  name="feed_des" data-bvalidator="required,alpha" ></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" name="submit" type="submit" >Send Feedback</button>
                            </div>
                        </form>
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



<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form').bValidator();
    });
	</script> 



