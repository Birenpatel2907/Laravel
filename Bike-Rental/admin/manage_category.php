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
                <h4 class="header-line">MANAGE CATEGORY</h4>
                
                            </div>

        </div>
        <form action="" enctype="multipart/form-data" name="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Category Id</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (!empty($cate_arr)){
                                        foreach($cate_arr as $data){
                                    ?>
                                    <tr class="odd gradeX">
                                            <td><?php echo $data->cate_id ?></td>
                                            <td><?php echo $data->cate_name ?></td>
                                            <td><img src="../website/images/upload/customer/<?php echo $data->cate_img?>" width="50px" height="50px"></td>
                                            <td><a href="edit_category?cate_editbtn=<?php echo $data->cate_id ?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="del_category?cate_delbtn=<?php echo $data->cate_id ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                    }
                                    ?>
                                        
                                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
        </form>   
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    