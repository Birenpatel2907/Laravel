<?php
include_once('header.php');
?>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Admin Login</h4>
                
            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
              
			   <div class="form-group">
					<label>Enter Emai</label>
					<input class="form-control" type="anm" />
					<p class="help-block">Help text here.</p>
				</div>
				 <div class="form-group">
					<label>Enter Password</label>
					<input class="form-control" type="apass" />
					<p class="help-block">Help text here.</p>
				</div>
				<div class="form-group">
							
					<input type="submit" class="btn btn-primary" name="submit" value="Login"/>
					
				</div>
            </div>

        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->

<?php
include_once('footer.php');
?>