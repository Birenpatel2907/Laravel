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
                <h4 class="header-line">MANAGE ADMIN</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Manage Admin
                        </div>
						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Password</th>
											<th>Created Date</th>
                                            <th>Updated Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <?php
                                            if (!empty($admin_arr)) {
                                            foreach($admin_arr as $data){
                                        
                                            ?>
                                            <td><?php echo $data->admin_id ?></td>
                                            <td><?php echo $data->admin_name ?></td>
                                            <td><?php echo $data->email ?></td>
											<td><?php echo $data->pass ?></td>
                                            <td><?php echo $data->created_dt ?></td>
                                            <td><?php echo $data->updated_dt ?></td>
                                            <td class="center"><a href="#" class="btn btn-primary">Edit</a></td>
                                            <td class="center"><a href="#" class="btn btn-danger">Delete</a></td>

                                        <?php
                                        }
                                            } ?>
										</tr>
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