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
                <h4 class="header-line">MANAGE EMPLOYEE</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Manage Employee
                        </div>
                        <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if (!empty($emp_arr)) {
                        foreach ($emp_arr as $data) {
                            ?>
                    <tr class="odd gradeX">
                    <td class="center"><?php echo $data->emp_id ?></td>
                    <td><?php echo $data->emp_name ?></td>                   
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->pass ?></td>
                    <td class="center">X</td>
                    <td class="center">X</td>
                    <td><a href="edit_employee?employee_editbtn=<?php echo $data->emp_id ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="del_employee?employee_delbtn=<?php echo $data->emp_id ?>" class="btn btn-danger">Delete</a></td>
                    <?php
                        }
                    }
                    ?>
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
 