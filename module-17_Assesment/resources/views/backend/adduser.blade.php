@extends('backend.layout.main')

@section('main_container') 
  <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>PASSPORT DETAILS</h2>
                           </div>
                        </div>
                     </div>
					  <div class="login_form">
               <form method="post" action="{{url('/addusercheck')}}">
				@csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name" class="text-black"> Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" >
                  </div>   
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Passport Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  name="passnum" >
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="pass" name="pass" >
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  name="mobile" >
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male" checked>Male
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
					</div>	
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="ADD User">
                  </div>
				 </div>
				 
              </div>
            </form>
                  </div>
                  </div>
            
  <!-- ------------------------------------->
     
                 
                 
               
      <!-- jQuery -->
      <script src="backend/assets/js/jquery.min.js"></script>
      <script src="backend/assets/js/popper.min.js"></script>
      <script src="backend/assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="backend/assets/js/animate.js"></script>
      <!-- select country -->
      <script src="backend/assets/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="backend/assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="backend/assets/js/custom.js"></script>

@endsection