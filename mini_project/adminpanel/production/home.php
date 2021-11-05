<!DOCTYPE html>
<?php
	ob_start();
	ob_flush();
if (!isset($_SESSION))

{
session_start();
}
if(isset($_SESSION["uid"]))
{
	$uname=$_SESSION["uid"];
	echo "Welcome ".$uname;
echo "<a href='admin1.php?a=lo'>Logout </a>";
}
else
{
	header("location:admin1.php");
}


 ?>
 
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin Panel </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  
  
 
  
  
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span>VTC!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
		
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="home.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form1.php">General Form</a></li>
                      
                    </ul>
                  </li>
                 
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="feedback.php">Tables</a></li>
                      <li><a href="tables.php">Table Dynamic</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
           
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
                        <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="admin1.php?a=lo"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

     
        <!-- /page content -->

        <!-- footer content -->
       
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </div>
	
		
		<div class="col-sm-12">
		<div class="row">
		
		<div class="col-sm-3">
                <div >
                  <div >
                    
					  </div>
					  </div>
					  </div>
					  
		
		
		
	  <div class="col-sm-3">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/parth.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Parth Soni</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> karelibaug, Baroda, India
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Website Designer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.facebook.com</a>
                        </li>
                      </ul>
					  
                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Software Development</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                      </ul>
					  </div>
					  </div>
					  </div>
					  </div>
					  
					  
					  
					  
					  
					  <div class="col-sm-3">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/vinod.jpg" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Vinod Talpada</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Badu Talavdi,Changa,India
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Software Developer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.Facebook.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Software Development</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                          </div>
                        </li>
                      </ul>
					  </div>
					  </div>
					  </div>
					  </div>
					  
					  
					  
					  
					  
					  
					  		  
					  <div class="col-sm-3">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/milan.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Milan Sarvaiya</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Alindra,India
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Software Tester
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.Facebook.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Software Development</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
					  </div>
					  </div>
					  </div>
					  </div>
					  </div>
					  </div>
					  
					   <footer>
          <div class="pull-right">
           Designed by technocrates 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
	  
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

					  
					  
					  


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
	
	
 </body>
</html>
