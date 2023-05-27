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
                <h4 class="header-line">MANAGE FEEDBACK</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Manage Feedback
                        </div>
                        <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Feedback ID</th>
                    <th>User ID</th>
                    <th>Feedback Description</th>
                    <th>Reply</th>
                    <th>Delete</th>
                   
                </tr>
            </thead>
            <tbody>
                    <?php
                    if (!empty($feed_arr)) {
                        foreach ($feed_arr as $data) {
                            ?>
                    <tr class="odd gradeX">
                 
                    <td><?php echo $data->feed_id ?></td>                   
                    <td><?php echo $data->uid ?></td>
                    <td><?php echo $data->feed_des ?></td>
                    <td><a href="case?btn=<?php ?>" class="btn btn-primary">Reply</a></td>
                    <td><a href="del_feedback?feedback_delbtn=<?php echo $data->feed_id ?>" class="btn btn-danger">Delete</a></td>
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
 