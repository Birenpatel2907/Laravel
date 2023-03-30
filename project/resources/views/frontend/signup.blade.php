@extends('frontend.layout.main')

@section('main_container')
</div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Sign Up</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Sign Up</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Your Details For Sign Up</span></h2>
        </div>
        
		<div class="site-section">
      <div class="container">
        <div class="row">
         
          <div class="col-md-12">
            <form action="" id="form1" method="post" enctype="multipart/form-data" action="{{url('/signup')}}">
				@csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" data-bvalidator="required,alpha">
                  </div>   
                </div>
				
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
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male" 
					  data-bvalidator="required" data-bvalidator-msg="Select one radio button" >Male
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
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="Hindi"
						data-bvalidator="min[1],required" data-bvalidator-msg="Select at least one checkboxes">Hindi
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
					<label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="cid" name="cid"  data-bvalidator="required">
						<option>----Select Country----</option>
						@foreach($data as $d)
							<option value="{{$d->id}}">{{$d->cnm}}</option>
						@endforeach
					</select>
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
    </div>

           
    </div>
    <!-- Contact End -->


  @endsection