<?php
session_start();
include("connect.php");
?>
<html lang="en">
<head>
	<title>Virtual Tech Culture</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="signup2.php"> create account</a>
							</label>
							

						</div>

						
					</div>
						<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					
					
					
					 
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	
<?php
	if(isset($_POST['email']))
	{
		
		//echo'<script type="text/javascript"> alert("signup button clicked")</script>';
		$username=$_POST['email'];
		$password=$_POST['pass'];
		
		
		$query= "select * from register1 WHERE email='$username' AND password1='$password'";
		echo $query;
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
				{
					$_SESSION['email']=$username;
					header('location:welcome1.php');
					
					
				}
			else
				{
					echo'<script type="text/javascript"> alert("Invalid")</script>';
				}
	}	
	$username="";
$password="";
if(isset($_POST["a"]))
{
	unset($_SESSION["email"]);
	unset($_SESSION["pass"]);
	session_destroy();
}
    ?>
</body>
</html>