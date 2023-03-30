@extends('frontend.layout.main')

@section('main_container')

</div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Login Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Login Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Your Details For Login Us</span></h2>
        </div>
        
		<div class="site-section">
      <div class="container">
        <div class="row">
         
          <div class="col-md-12">
            <form action="{{url('/logincheck')}}" id="form1" method="post">
				@csrf
              <div class="p-3 p-lg-5 border">
                
				
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" data-bvalidator="required,email">
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="pass" name="pass" data-bvalidator="required,minlength[4],maxlength[8]">
                  </div>
                </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                  </div>
				   
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

           
    </div>
    <!-- Contact End -->


  @endsection