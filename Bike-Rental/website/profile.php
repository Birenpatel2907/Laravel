

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



?>
</head>

<body>
    <form action="#" enctype="multipart/form-data" method="post">
<div class="container">
        <div class="row">   
            <div class="col-md-4">
               <div class="p-3 py-5 align-items-center text-center">
                <img class="rounded-circle mt-5"src="images/upload/customer/<?php echo $fetch->file?>" width="200px" height="200px">
                <div class="font-weight-bold">Priyanka Solanki</div><div class="text-black-50">abc@gmail.com</div>
               </div>
         
            </div>
            <div class="col-md-3">
                <div class="mt-5 h4">Edit Profile</div>
                
                             <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->uid?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->name?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->unm?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->mobile?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->gen?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->lang?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->country?></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="col">
                                <a style="" href="edituser?btnedit=<?php echo $fetch->uid?>" class="btn btn-primary">Edit Profile</a>
                                                                  
                            </div>
                
                </div>
                

      
</div>
            <div class="row">

                
            </div>
   </div>
   </form>  
</body> 
</html>

    
    <?php
    include_once('footer.php');
    ?>