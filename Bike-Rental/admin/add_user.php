<?php
include_once('header.php');
if (empty($_SESSION['admin_id'])) {
    include_once('index.php');
}
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD USER</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add User
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>User ID</label>
								<input class="form-control" type="text" name="user_id"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="user_name"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email"/>
							</div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="pass"/>
							</div>
                            <div class="form-group">
								<label>Mobile Number</label>
								<input class="form-control" type="text" name="mob_no"/>
							</div>
                            <div class="form-group">
								<label>Adhar Number</label>
								<input class="form-control" type="text" name="adhar_no"/>
							</div>
                            <div class="form-group">
								<label>Driving Licence Number</label>
								<input class="form-control" type="text" name="dl_no"/>
							</div>
                            <div class="form-group">
								<label>Address</label>
								<input class="form-control" type="text" name="address"/>
							</div>
                            <div class="form-group">
								<label>Pincode</label>
								<input class="form-control" type="text" name="pincode"/>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
								 <input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 
 <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
 
 <script src="jquery.bvalidator.js" type="text/javascript"></script>
 <link href="bvalidator.css" type="text/css" rel="stylesheet" />
 
  
 
 <!-- add script & call FORM id -->

 
 <script type="text/javascript"> 
     $(document).ready(function () {
     
         $('#form').bValidator();
     });
    
     </script> 
 <script>