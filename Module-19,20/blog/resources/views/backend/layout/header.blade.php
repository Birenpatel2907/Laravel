
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{url('backend/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('backend/assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('backend/assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
@include('sweetalert::alert')
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_index">Admin Panel</a> 
            </div>
            
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <div class="btn-group">
                    <a style="color:white; width:200px;" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{session('aname')}}
                    </a>
                    <div class="dropdown-menu">
                        <a style="color: red; padding: 10px 10px 5px 10px; font-size: 14px;" class="dropdown-item" href="admin_logout">Logout</a>
                    </div>
                </div>
    </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{url('backend/assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="{{url('admin_index')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="{{url('add_blog')}}"><i class="fa fa-fa-3x"></i>Add Blog</a>
                    </li>
                    <li>
                        <a  href="{{url('manage_blog')}}"><i class="fa fa-fa-3x"></i>Manage Blog</a>
                    </li>
                   		
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
 <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{url('backend/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('backend/assets/js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{url('backend/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{url('backend/assets/js/morris/morris.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{url('backend/assets/js/custom.js')}}"></script>
	  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

      <!-- DATA TABLE SCRIPTS -->
    <script src="{{url('backend/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('backend/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="{{url('backend/assets/js/custom.js')}}"></script>