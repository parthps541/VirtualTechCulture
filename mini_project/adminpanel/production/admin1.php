<!DOCTYPE html>
<html lang="en">
<head>
	<title>admin panel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
						<input   type="text" name="txtName" class="input100" placeholder="User name" required>
						<span class="focus-input100"></span>
					</div >
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
						<input  type="password" class="input100" name="txtPass" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/a6.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	
	
<!--==============
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main3.js"></script>

</body>
<?php 
define("USERID","admin");
define("PWD","admin");
session_start();

if( isset($_POST["txtName"]))
{
	if($_POST["txtName"]==USERID && $_POST["txtPass"]==PWD)
	{
		$_SESSION["uid"]=USERID;
		header("Location:home.php");
		
	}
	else
	{
		echo "Invalid user id / password";
	}
}

//destroying session	
	
$uid="";
$pwd="";
if(isset($_GET["a"]))
{
	unset($_SESSION["uid"]);
	//echo "asdfs";
	session_destroy();
}



?>
</html>