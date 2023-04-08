@extends('frontend.layout.main')

@section('main_container') 

<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Sign Up!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>
			
               <div class="col-md-offset-2 col-md-8 col-sm-12">
                 
                    <form action="" id="form1" method="post" enctype="multipart/form-data" action="{{url('/signup')}}">
						@csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" >
                  </div>   
                </div>
				
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
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male">Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Language <span class="text-danger">*</span></label>
                    <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="Hindi">Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="English" >English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="Gujarati" >Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				 
				 
				  <div class="col-md-12">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="file" name="file" 
					data-bvalidator="extension[jpg:png],required" data-bvalidator-msg="Please select file of type .jpg, .png">
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="signup">
                  </div>
				   
                </div>
              </div>
                    </form>
               </div>

          </div>
     </div>
</section>
@endsection
