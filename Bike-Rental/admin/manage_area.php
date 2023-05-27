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
                <h4 class="header-line">MANAGE AREA</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Manage Area
                        </div>
                        <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Area ID</th>
                    <th>City ID</th>                   
                    <th>Area Name</th>                   
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    
                    <td>Win 95+</td>
                    <td class="center">4</td>
                    <td class="center">X</td>
                    <td class="center">X</td>
                    <td class="center">X</td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>

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
 