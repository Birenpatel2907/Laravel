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
                       <h1>Login here</h1>
                    </div>
    
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">

                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    
                    <div class="form-group">    
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Subject</option>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="creative">Creative Design</option>
                            <option value="uiux">UI / UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send</button>
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
