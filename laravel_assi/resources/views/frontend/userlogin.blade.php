<!DOCTYPE html>
<html lang="en">


@extends('frontend.layout.main')

    @section('main_container')

<body>
    <!-- Page Loader -->
    
  
   @include('sweetalert::alert')
   
    <div class="container-fluid tm-mt-60">
    
        <div class="row tm-mb-50">
            <div class="col-lg-12 col-4 mb-5">
            <div class="text-center  tm-text-primary mb-5">
                       <h1>Login here</h1>
                    </div>
    
                <form id="contact-form" action="" method="POST" enctype="multipart/form-data" class="tm-contact-form mx-auto">

                @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-0" placeholder="password" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-0" placeholder="confirmpassword" required />
                    </div>
                    
                 
            
                    
                    <div class="text-center">
                        <button type="submit" value-="submit" class="btn btn-primary">Send</button>
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

@endsection