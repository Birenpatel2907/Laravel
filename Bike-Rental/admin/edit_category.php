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
                <h4 class="header-line">Edit CATEGORY</h4>
                
                            </div>

        </div>
        <form id="form" action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
                              
								<label>Category</label>
								<input class="form-control" type="text" name="cate_name" value=" <?php echo $fetch->cate_name ?>" >
								<p class="help-block">Help text here.</p>
							</div>
                           
							<div class="form-group">
                              
								<label>Category</label>
								
                                <input class="form-control" type="file" name="cate_img" value=" <?php echo $fetch->cate_img ?>" >
								<p class="help-block"><img src="../website/images/upload/customer/<?php echo $fetch->cate_img ?>" width="50px" height="50px"></p>
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

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form').bValidator();
    });
	</script> 