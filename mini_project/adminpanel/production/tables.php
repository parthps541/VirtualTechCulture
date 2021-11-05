<!DOCTYPE html>
<?php
include("connect.php"); 
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

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()"placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Table </small></h2>
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
				  <form  method="POST">
					
					Enter Email:<input type="email" name="email1"></br></br>
					<input type="submit" value="delete" name="deletebtn">

					</form>
					
					<?php
					if(isset($_POST["email1"]))
	{
		
		$ename=$_POST["email1"];
		
		if(isset($_POST["deletebtn"]))
		{	
			$quary="delete from register1 where email='$ename'";
			$rev=mysqli_query($con,$quary);
		}
	}
	?>
	
					
                  <div class="x_content">
                  
					
					
                    <table id="myTable" id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                         
							 
						 
                          <th>name</th>
							<th>last</th>
							<th>email</th>
							<th>password</th>
							
							<th>current</th>
							<th>subscribe</th>
							<th>gender</th>
							<th>phone</th>
                        </tr>
                      </thead>
					  <tbody>
					  <?php
				include("connect.php"); 
				$q="select * from register1";
				$res=mysqli_query($con,$q);
				while($row=mysqli_fetch_assoc($res)){
									echo '<tr>';
									echo '<td>'.$row['first_name'].'</td>';
									echo '<td>'.$row['last_name'].'</td>';
									echo '<td>'.$row['email'].'</td>';
									echo '<td>'.$row['password1'].'</td>';
									echo '<td>'.$row['current_stream'].'</td>';
									echo '<td>'.$row['subscribe1'].'</td>';
									echo '<td>'.$row['gender'].'</td>';
									echo '<td>'.$row['phone'].'</td>';
							echo '</tr>';
}
?>
			  </tbody>
					  </table>
                         </div>
                </div>
              </div>
			  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Suscribed Users </small></h2>
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
				   <form class="form-horizontal form-label-left input_mask" method="post" enctype="multipart/form-data">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="name"  placeholder="First Name">
                        <span class="fa fa-user form-control-feedback left" ></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control"  name="subject" placeholder="Subject">
                        <span class="fa fa-user form-control-feedback right" ></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="email" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" ></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="msg" placeholder="Message">
                        <span class="fa fa-phone form-control-feedback right" ></span>
                      </div>
					  
					 
					  
					   <button type="submit" class="btn btn-round btn-success" name="send_message_btn">Send</button>
					  </form>
					  
					  <?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
 
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail($email, $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>
				 
                  <div class="x_content">
				  
                   
					
					<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
					
                      <thead>
                        <tr>
                         
							 
						 
                        <th>name</th>
						<th>subscribe</th>
						<th>email</th>
						
							
                        </tr>
                      </thead>
					  <tbody>
					  
					   <?php
				
				$q="select * from register1 where subscribe1='yes' ";
				$res=mysqli_query($con,$q);
				while($row=mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<td>'.$row['first_name'].'</td>';
	echo '<td>'.$row['subscribe1'].'</td>';
	echo '<td>'.$row['email'].'</td>';
echo '</tr>';
}
?>
					  
					  </tbody>
					</table>
			  
			  
			  
			  
			  </div>
            </div>
          </div>
        

             
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Designed by Technocrates
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>