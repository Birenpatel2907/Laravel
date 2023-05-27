@extends('frontend.layout.main')
@section('main_container')

			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index">Home</a></span> / <span>Login</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
			<center><h1><label style="font-weight:bold;">User Login</label></h1></center>
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							
							<form action="#" class="contact-form" method="post" enctype="multipart/form-data">
								@csrf
								<div class="row">
									
								
									<div class="col-md-6">
										<div class="form-group">
											<label for="unm" style="font-weight:bold;">User Name:</label>
											<input type="email" id="unm" name="unm" class="form-control" placeholder="Your Username">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="pass" style="font-weight:bold;">Password:</label>
											<input type="password" id="pass"  name="pass" class="form-control" placeholder="Your Password">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
											<label for="pass" style="font-weight:bold;"><a href="signup_user">Click here to register...</a></label>
											
										</div>
									</div>	
								</div>
								<center>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" name="submit" value="Login" class="btn btn-primary">
										</div>
									</div>
								</center>
							</form>		
						</div>
					</div>
					
				</div>
			</div>
		</div>
@endsection