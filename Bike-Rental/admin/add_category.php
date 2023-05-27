<?php
include_once('header.php');
if (empty($_SESSION['admin_id'])) {
?>
echo"
<script>
    window.location='admin';
    </script>";
<?php
}
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD CATEGORY</h4>
                
                            </div>

        </div>




      <form name="cate_form" action="" enctype="multipart/form-data" id="form1" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Category</label>
								<input class="form-control" type="text" name="cate_name" data-bvalidator="required"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Category Image</label>
								<input class="form-control" type="file" name="cate_img" data-bvalidator="required"/>
								<p class="help-block">Help text here.</p>
							</div>
							
        
								 <div class="form-group">
									
								 <input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </form>
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
	
        $('#cate_form').bValidator();
    });
</script> 
