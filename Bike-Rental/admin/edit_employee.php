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
                <h4 class="header-line">EDIT EMPLOYEE</h4>
                
                            </div>

        </div>
        <form id="form" action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Edit Employee
                        </div>
                        
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Employee ID</label>
								<input class="form-control" type="text" name="emp_id" value="<?php echo $fetch->emp_id ?>" disabled/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="emp_name" data-bvalidator="required,alpha" value="<?php echo $fetch->emp_name ?>"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" data-bvalidator="required,email" value="<?php echo $fetch->email ?>"/>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
                                 <input type="submit" class="btn btn-primary" name="submit" Value="Edit"/>
									
								</div>
                            </div>
                        </div>
                   </div>
</form>
        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 
 <script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form').bValidator();
    });
	</script> 