<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
        switch($url)
        {
            case '/admin':
                if(isset($_REQUEST['submit'])){
                    $anm=$_REQUEST['anm'];
                    $apass=$_REQUEST['apass'];
                    $where=array("anm"=>$anm,"apass"=>$apass);
                    $run = $this->select_where('admin_tbl',$where);
                    $chk = $run->num_rows;
                    if ($chk == 1) {
                        $fetch = $run->fetch_object();
                        $_SESSION['admin_id'] = $fetch->admin_id;
                        $_SESSION['admin_name'] = $fetch->admin_name;
                        $_SESSION['anm'] = $fetch->anm;
                        echo "<script>
                            alert('Login Success');
                            window.location='dashboard';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Login Failed');
                        </script>";
                    }

                }
                include_once('index.php');
                break;

            case '/admin_logout':
                unset( $_SESSION['admin_id']);
                unset( $_SESSION['admin_name']);
                unset( $_SESSION['anm']);
                echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
			    break;
                
            case '/dashboard':
                include_once('dashboard.php');
                break;

            case '/add_admin':
                include_once('add_admin.php');
                break;

     
            case '/add_state':
               
                if(isset($_REQUEST['submit']))
			    {	
					$state=$_REQUEST['state'];
					$cid=$_REQUEST['cid'];
					
					$data=array("state"=>$state,"cid"=>$cid);
					
					$res=$this->insert('state_tbl',$data);	
					if($res)
					{
						echo "<script>
						alert('State Added');
						window.location='manage_state';
						</script>";
					}
					else
					{
						echo "State has not been added";
					}	
					
				}
				$country=$this->select('country_tbl');
                include_once('add_state.php');
                break;
            case '/manage_state':
                $state_arr = $this->select_join2('state_tbl','country_tbl','state_tbl.cid=country_tbl.cid');
                    include_once('manage_state.php');
                    break;
            case '/edit_state':
                $country=$this->select('country_tbl');
                if(isset($_REQUEST['state_editbtn'])){
                    $state_id=$_REQUEST['state_editbtn'];
                    $where = array("state_id"=>$state_id);
                    $run = $this->select_where('state_tbl',$where);
                    //print_r($run);
                   $fetch = $run->fetch_object();

                    if (isset($_REQUEST['submit'])) {
                        $state = $_REQUEST['state'];
                        $cid = $_REQUEST['cid'];

                        $data = array("state" => $state, "cid" => $cid);
                        $res = $this->update('state_tbl', $data, $where);
                        if ($res) {
                            echo "<script>
                                alert('Update Success');
                                window.location='manage_state';
                                </script>";
                        } else {
                            echo "<script>
                                alert('Update Failed');							
                                </script>";
                        }
                    }
                    
                }
            
                include_once('edit_state.php');
                break;        
                    
            case '/del_state':
                if (isset($_REQUEST['state_delbtn'])) {

                    $state_id = $_REQUEST['state_delbtn'];
                    $where = array("state_id"=>$state_id);
                    $run=$this->delete('state_tbl',$where);
                    
                    if($run)
                    {
                        echo "<script>
                            alert('State has been deleted.');
                            window.location='manage_state';
                            </script>";
                    } 
                    else
                    {
                        echo "<script>
                            alert('State deletion failed.');
                            </script>";
                    }
                }
                    break;
            case '/add_city':
                if(isset($_REQUEST['submit']))
			    {	
					$city=$_REQUEST['city'];
					$state_id=$_REQUEST['state_id'];
					
					$data=array("city"=>$city,"state_id"=>$state_id);
					
					$res=$this->insert('city_tbl',$data);	
					if($res)
					{
						echo "<script>
						alert('City has been added');
						window.location='manage_city';
						</script>";
					}
					else
					{
						echo "City has not been added";
					}	
					
				}
				$state=$this->select('state_tbl');
                    include_once('add_city.php');
                    break;
            case '/manage_city':
                $city_arr = $this->select_join2('city_tbl','state_tbl','city_tbl.state_id=state_tbl.state_id');
                    include_once('manage_city.php');
                    break;
            case '/edit_city':
                    $state=$this->select('state_tbl');
                    if(isset($_REQUEST['city_editbtn'])){
                        $city_id=$_REQUEST['city_editbtn'];
                        $where = array("city_id"=>$city_id);
                        $run = $this->select_where('city_tbl',$where);
                        //print_r($run);
                    $fetch = $run->fetch_object();

                        if (isset($_REQUEST['submit'])) {
                            $city = $_REQUEST['city'];
                            $state_id = $_REQUEST['state_id'];
                            

                            $data = array("city" => $city, "state_id" => $state_id);
                            $res = $this->update('city_tbl', $data, $where);
                            if ($res) {
                                echo "<script>
                                    alert('Update Success');
                                    window.location='manage_city';
                                    </script>";
                            } else {
                                echo "<script>
                                    alert('Update Failed');							
                                    </script>";
                            }
                        }
                        
                    }
                
                    include_once('edit_city.php');
                    break;        
                    
             case '/del_city':
                if (isset($_REQUEST['city_delbtn'])) {

                    $city_id = $_REQUEST['city_delbtn'];
                    $where = array("city_id"=>$city_id);
                    $run=$this->delete('city_tbl',$where);
                    
                    if($run)
                    {
                        echo "<script>
                            alert('City has been deleted.');
                            window.location='manage_city';
                            </script>";
                    } 
                    else
                    {
                        echo "<script>
                            alert('City deletion failed.');
                            </script>";
                    }
                }
                    break;
          
            
            case '/add_employee':
                if(isset($_REQUEST['submit'])){
                   
                    $emp_name = $_REQUEST['emp_name'];
                    $email = $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $enc_pass=md5($pass);
                    //$created_dt = $_REQUEST['created_dt'];
                    //$updated_dt = $_REQUEST['updated_dt'];
                    $data=array("emp_name"=>$emp_name,"email"=>$email,"pass"=>$enc_pass);
                    $res = $this->insert('employee_tbl',$data);
                    if ($res)
                    {
                        echo "<script>
                        alert('Employee has been added...');
                        window.location='manage_employee';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Add Operation Failed...');
                        </script>";
                    }
                }
                include_once('add_employee.php');
                break;
            case '/edit_employee':
                if(isset($_REQUEST['employee_editbtn'])){
                    $emp_id = $_REQUEST['employee_editbtn'];
                    $where=array("emp_id"=>$emp_id);
                    $run = $this->select_where('employee_tbl',$where);
                    $fetch = $run->fetch_object();

                    if(isset($_REQUEST['submit'])){
                        $emp_name = $_REQUEST['emp_name'];
                        $email = $_REQUEST['email'];

                        $data=array("emp_name"=>$emp_name,"email"=>$email);
                        $res = $this->update('employee_tbl',$data,$where);
                        if($res){
                            echo "<script>
                            alert('Employee details has been edited...');
                            window.location='manage_employee';
                            </script>";

                        }
                        else{
                            echo "<script>
                            alert('Update Operation Failed...');
                            </script>";
                        }
                        
                    }
                }
                include_once('edit_employee.php');
                break;
            case '/del_employee':
                if(isset($_REQUEST['employee_delbtn'])){
                    $emp_id = $_REQUEST['employee_delbtn'];
                    $where=array("emp_id"=>$emp_id);
                    $res = $this->delete('employee_tbl',$where);
                    if ($res)
                    {
                        echo "<script>
                        alert('Employee has been removed...');
                        window.location='manage_employee';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Employee has not been removed...');
                        </script>";
                    }

                }
                break;

                
            case '/manage_employee':
                $emp_arr = $this->select('employee_tbl');
                include_once('manage_employee.php');
                break;

            case '/add_user':
                include_once('add_user.php');
                break;
            case '/manage_admin':
                $admin_arr=$this->select('admin_tbl');
                include_once('manage_admin.php');
                break;

            case '/manage_category':
                $cate_arr=$this->select('categories');
                include_once('manage_category.php');
                break;
            case '/add_category':
                include_once('add_category.php');
                if(isset($_REQUEST['submit'])){
                    $cate_name=$_REQUEST['cate_name'];

                        $cate_img=$_FILES['cate_img']['name'];
                        $path='../website/images/upload/customer/'.$cate_img;
						$tmp_file=$_FILES['cate_img']['tmp_name'];
                        move_uploaded_file($tmp_file,$path);

                    $data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
                    $res=$this->insert('categories',$data);
                    if($res){
                        echo "'<script>
                                alert('Category Added');
                                window.location='manage_category';
                            </script>'";
                    }
                    else {
                        "'<script>
                                alert('Category Adding Failed');
                        </script>'";
                    }
                }
                break;
            case '/edit_category':
                
                if(isset($_REQUEST['cate_editbtn'])) {
             
                    $cate_id =$_REQUEST['cate_editbtn'];
                    
                    $where=array("cate_id"=>$cate_id);
                    $run=$this->select_where('categories',$where);
                    $fetch=$run->fetch_object();
                   
                  if(isset($_REQUEST['submit'])){
                    $cate_name = $_REQUEST['cate_name'];
                    if($_FILES['cate_img']['size']>0){
                        $cate_img = $_FILES['cate_img']['name'];
                        $path = "../website/images/upload/customer/".$cate_img;
                        $tmp_file=$_FILES['cate_img']['tmp_name'];
                        move_uploaded_file($tmp_file,$path);
                        $data = array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
                        $old_cate_img = $fetch->cate_img;
                        $res = $this->update('categories', $data, $where);
                        if ($res){
                            $old_cate_img = $fetch->cate_img;
                            unlink("../website/images/upload/customer/".$old_cate_img);
                                echo "<script>
                                alert('category Updated');
                                window.location='manage_category';
                                </script>";
                            }
                        else{
                                echo "<script>
                                alert('Update Failed');							
                                </script>";
                        }
                    } 
                    else {
                        $data = array("cate_name"=>$cate_name);
                       // $old_cate_img = $fetch->cate_img;
                        $res = $this->update('categories', $data, $where);
                        if ($res) {
                                echo "<script>
                                alert('category Updated');
                                window.location='manage_category';
                                </script>";
                            }
                        else{
                                echo "<script>
                                alert('Update Failed');							
                                </script>";
                        }

                    }
                  }


                }
                include_once('edit_category.php');
                break;
            
            case '/del_category':       
                if(isset($_REQUEST['cate_delbtn']))
			    {
                
				$cate_id=$_REQUEST['cate_delbtn'];
				echo $where=array("cate_id"=>$cate_id);
				
				// img del
				$res=$this->select_where('categories',$where);
				$fetch=$res->fetch_object();
				$old_cate_img=$fetch->cate_img;
				
				$run=$this->delete('categories',$where);
                        if($run)
                        {
                            unlink('../website/images/upload/customer/'.$old_cate_img);	
                            echo "<script>
                                alert('Category has been removed.');
                                window.location='manage_category';
                                </script>";
                        } 
                        else
                        {
                            echo "<script>
                                alert('Category deletion failed.');
                                </script>";
                        }
                }
                else
                        {
                            echo "<script>
                                alert('Error in isset cate_delbtn');
                                </script>";
                        }

                break;
            
           
            case '/manage_user':
                //$user_arr = $this->select('user');
               $user_arr = $this->select_join2('user','country_tbl','user.cid=country_tbl.cid');
                
                include_once('manage_user.php');
                break;
            case '/del_user':
                if(isset($_REQUEST['del_uidbtn']))
			    {
				$uid=$_REQUEST['del_uidbtn'];
				$where=array("uid"=>$uid);
				
				// img del
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();
				$old_file=$fetch->file;
				
				$run=$this->delete('user',$where);
                        if($run)
                        {
                            unlink('../website/images/upload/customer/'.$old_file);	
                            echo "<script>
                                alert('User has been deleted.');
                                window.location='manage_user';
                                </script>";
                        } 
                        else
                        {
                            echo "<script>
                                alert('User deletion failed.');
                                </script>";
                        }
                }
                break;
            case '/status':
                if(isset($_REQUEST['statusidbtn'])){
                    $uid=$_REQUEST['statusidbtn'];
                    $where = array("uid"=>$uid);
                    $run = $this->select_where('user',$where);
                    $fetch = $run->fetch_object();
                    $status = $fetch->status;
                    if ($status == "Blocked") {
                        $data = array("status" => "Unblocked");
                        $res = $this->update('user',$data,$where);
                        if($res){
                            echo "<script>
							alert('The user has been Unblocked Successfully');
							window.location='manage_user';
							</script>";

                        }
                    }
                    else
                    {
                        $data = array("status" => "Blocked");
                        $res = $this->update('user',$data,$where);
                        if($res){
                            unset($_SESSION['unm']);
                            unset($_SESSION['uid']);
                            unset($_SESSION['name']);
                        
                            echo "<script>
							alert('The user has been Blocked Successfully');
							window.location='manage_user';
							</script>";

                        }
                    }

                }
                else
                    {
                        echo "<script>
                            alert('Error in isset statusidbtn');
                            </script>";
                    }
                break;
            
            case '/index':
                include_once('index.php');
                break;
        
            case '/manage_feedback':
                $feed_arr= $this->select('feedback_tbl');
                include_once('manage_feedback.php');
                break; 
            case '/del_feedback':
               if(isset($_REQUEST['feedback_delbtn'])){
                    $feed_id = $_REQUEST['feedback_delbtn'];
                    $where=array("feed_id"=>$feed_id);
                    $res = $this->delete('feedback_tbl',$where);
                    if($res){
                        echo "<script>
							alert('Feedback has been removed...');
							window.location='manage_feedback';
							</script>";
                    }
                    else{
                        echo "<script>
							alert('Feedback has not been removed...');
							</script>";
                    }

               }
            }
    }

}
$obj = new control;
?>