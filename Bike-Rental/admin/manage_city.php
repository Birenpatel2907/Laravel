<?php
include_once('header.php');
if (empty($_SESSION['admin_id'])) {
    include_once('dashboard.php');
}
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE CITY</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage City
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>City ID</th>
                                            <th>City Name</th>                                        
											<th>State Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($city_arr)) {
                                            foreach ($city_arr as $data) {
                                                ?>
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $data->city_id ?></td>
                                            <td><?php echo $data->city ?></td>
                                            <td><?php echo $data->state ?></td>
                                            <td><a href="edit_city?city_editbtn=<?php echo $data->city_id ?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="del_city?city_delbtn=<?php echo $data->city_id ?>" class="btn btn-danger">Delete</a></td>
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
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    