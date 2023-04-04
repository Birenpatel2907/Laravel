@extends('backend.layout.main')

@section('main_container') 
   <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>EDIT USER PASSPORT DETAILS</h2>
                           </div>
                        </div>
                     </div>
					<form method="post" action="{{url('/update/'.$data->id)}}">
					@csrf
  <div class="mb-3">


    <label for="exampleInputName" class="form-label">Full Name</label>


    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->name}}" name="name">


  </div>
  
  <div class="mb-3">


    <label for="exampleInputEmail1" class="form-label">Passport NO</label>


    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->passnum}}"  name="passnum">


  </div>

  <div class="mb-3">


    <label for="exampleInputEmail1" class="form-label">Email address</label>


    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$data->email}}" name="email">


  </div>


  <div class="mb-3">


    <label for="exampleInputPassword1" class="form-label">Password</label>


    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="{{$data->pass}}">


  </div>
  
  <div class="mb-3">


    <label for="exampleInputPassword1" class="form-label">Mobile</label>


    <input type="Number" class="form-control" id="exampleInputPassword1" name="mobile" value="{{$data->mobile}}">


  </div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="exampleInputPassword1" class="form-label">Gender</label>
				<div class="form-check">
					 <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male" 
					 <?php
									$gen=$data->gen;
									if($gen=="Male")
									{
										echo "checked";
									}										
									?>>Male
				</div>
				<div class="form-check">
					 <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female"
					  <?php
									$gen=$data->gen;
									if($gen=="Female")
									{
										echo "checked";
									}										
									?>>Female
				</div>
		</div>
		<div class="col-md-6">
			<label for="exampleInputPassword1" class="form-label">Language</label>
				<div class="form-check">
					 <input type="checkbox" class="form-check-input" id="exampleCheck1" name="lag[]" value="Hindi" 
					<?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('Hindi',$lag_arr))
									{
										echo "checked";
									}										
									?>>Hindi
				</div>
				<div class="form-check">
					 <input type="checkbox" class="form-check-input" id="exampleCheck1" name="lag[]" value="English"
					  <?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('English',$lag_arr))
									{
										echo "checked";
									}										
									?>>English
				</div>
				<div class="form-check">
					 <input type="checkbox" class="form-check-input" id="exampleCheck1" name="lag[]" value="Gujarati" 
					 <?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('Gujarati',$lag_arr))
									{
										echo "checked";
									}										
									?>>Gujarati
				</div>
		</div>

  </div>

 

	<div class="col-lg-12">
         <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
     </div>





</form>
</div>
</div>
  <!-- ------------------------------------->
     
                 
                 
               
      <!-- jQuery -->
      <script src="{{url('backend/assets/js/jquery.min.js')}}"></script>
      <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
      <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{url('backend/assets/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{url('backend/assets/js/bootstrap-select.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{url('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{url('backend/assets/js/custom.js')}}"></script>
@endsection