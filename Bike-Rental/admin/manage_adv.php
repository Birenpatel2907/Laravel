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
                <h4 class="header-  line">MANAGE USER</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12 ">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Manage User
                        </div>
                        <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Image/file</th>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Cid</th>
                    <th>Country</th>                    
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($user_arr)) {
                    foreach ($user_arr as $data)
                    {
                ?>
                
                <tr class="odd gradeX">
                <td><img src="../website/images/upload/customer/<?php echo $data->file?>" width="50px" height="50px"></td>
                    <td class="center"><?php echo $data->uid?></td>
                    <td><?php echo $data->name?></td>
                    <td><?php echo $data->mobile?></td>
                    <td><?php echo $data->unm?></td>
                    <td><?php echo $data->pass?></td>
                    <td><?php echo $data->gen?></td>
                    <td><?php echo $data->lang?></td>
                    <td><?php echo $data->cid?></td>
                    <td class="center"><?php echo $data->country ?></td>
                   
                    <td><a href="del_user?del_uidbtn=<?php echo $data->uid ?>" class="btn btn-danger">Delete</a></td>

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
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 
 