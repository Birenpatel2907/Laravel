<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Videos</title>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>

<body>
    <!-- Page Loader -->
    
   

   
    <div class="container-fluid tm-mt-60">
    
        <div class="row tm-mb-50">
            <div class="col-lg-12 col-4 mb-5">
            <div class="text-center  tm-text-primary mb-5">
                       <h1>Register here</h1>
                    </div>
    
                <form id="contact-form" action="{{url('registration')}}" method="POST" enctype="multipart/formdata" class="tm-contact-form mx-auto">
                        @csrf
                    <div class="form-group">
                        <input type="text" name="name" value="" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="number" name="phoneno" value="" class="form-control rounded-0" placeholder="phoneno" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="" class="form-control rounded-0" placeholder="Password" required />
                    </div>
                    
                    <!--<div class="form-group">
                        <input type="number" name="mobile" value="" class="form-control rounded-0" placeholder="Mobile" required />
                    </div>-->
                  

                    
                    <div class="text-center">
                    <input class="btn btn-primary w-100 py-3" type="submit" name="submit" value="Signup">
                    </div>
                </form>                
            </div>
         

    
    
    <script src="{{url('frontend/js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
