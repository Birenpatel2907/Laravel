<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,700')}}"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{('backend/css/fontawesome.min.css')}}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{('backend/css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{('backend/css/templatemo-style.css')}}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
 
  <body>
    @include('sweetalert::alert')
    <div>

    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Login</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="{{url('/adminlogincheck')}}" method="post" class="tm-login-form" enctype="multipart/formdata">
				@csrf
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input
                      type="text"
                      class="form-control validate"
                      id="username"
                      name="email"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="pass"
                      type="password"
                      name="pass"
                      class="form-control validate"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      name="submit"
                  
                      class="btn btn-primary btn-block text-uppercase"
                    >
                  
                      Login
                    </button>
                  </div>
                  <button class="mt-5 btn btn-primary btn-block text-uppercase">
                    Forgot your password?
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>


