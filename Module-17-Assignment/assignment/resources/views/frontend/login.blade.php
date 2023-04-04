@extends('frontend.layout.main')

@section('main_container') 


<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Login Us!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>
			
               <div class="col-md-offset-2 col-md-8 col-sm-12">
                 
                    <form action="" id="form1" method="post" enctype="multipart/form-data" action="{{url('/login')}}">
						@csrf
              <div class="p-3 p-lg-5 border">
               
				
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" >
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="pass" name="pass">
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
</section>
@endsection
