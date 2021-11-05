<!DOCTYPE html>
<html lang="en">


<?php
include("connect.php");
ob_start();
//error_reporting(1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Tech Culture</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<style>
right loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}


</style>
<body>

    <div class="main">

        <div class="container">
		
            <div class="signup-content">
			
                <div class="signup-img">
				
                    <img src="images/form-img.jpg" alt="">
					
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>World Of Education !</p>
                    </div>
					
                </div>
				
                <div class="signup-form">
				
                    <form method="post" class="register-form" id="register-form" action=""
					onSubmit="return validate()">
                        <div class="form-row">
                            <div class="form-group">
							
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                               
								
								
										<div class="form-input">
								<label for="password" class="required">Password</label>
								<input type="password" name="pass" placeholder="Password" maxlength="15"/>
								</div>
								<div class="form-input">
								<label for="password" class="required">Confirm Password</label>
								<input type="password" name="cpass" placeholder="Confirm Password" maxlength="15" />
								</div>
									
									
								
								
                            </div>
                            <div class="form-group">
                                
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Current Stream</label>
                                        <a href="#" class="form-link">select one</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" value="BCA">
                                            <label for="cash">BCA</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque" value="MCA">
                                            <label for="cheque">MCA</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand" value="BSC_IT">
                                            <label for="demand">BSC_IT</label>
                                            <span class="check"></span>
                                        </div>
										 <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand1" value="MSC_IT">
                                            <label for="demand1">MSC_IT</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">subscribe our news letter?</label>
                                     <div class="form-radio-item">
                                            <input type="radio" name="yeah" id="yes1" value="yes">
                                            <label for="yes1">YES</label>
                                            <span class="check"></span>
                                        </div>
										 <div class="form-radio-item">
                                            <input type="radio" name="yeah" id="no1" value="no">
                                            <label for="no1">NO</label>
                                            <span class="check"></span>
                                        </div>
                                </div>
								
								 <div class="label-flex">
                                        <label for="payment">Choose Gender</label>
                                        <a href="#" class="form-link"></a>
                                    </div>
									
									
									 <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="m1" value="male">
                                            <label for="m1">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="f1" value="female">
                                            <label for="f1">Female</label>
                                            <span class="check"></span>
                                        </div>
										</div>
										<br>
										 <div class="form-input">
                                    <label for="phone_number" >Phone number</label>
                                    <input type="number" name="phone_number" id="phone_number" pattern="[0-9]{10}"maxlength="10"/>
                                </div>
								
								
                               
								
                            </div>
                        </div>
                      
						
						
						<p style="color:black">already have a account?<a href="login1.php">click here</a></p>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
					
                </div>
            </div>
        </div>

    </div>
	
	
	

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main1.js"></script>
</body>
<?php

if(isset($_POST["submit"]))
	{
		
		$name=$_POST["first_name"];
		$lname=$_POST["last_name"];
		$e_mail=$_POST["email"];
		$password=$_POST["pass"];
		$c_password=$_POST["cpass"];
		$stream=$_POST["payment"];
		$subscribe=$_POST["yeah"];
		$gender=$_POST["gender"];
		$phone=$_POST["phone_number"];
		
		//echo "hello";
		
		
		if($password==$c_password)
		{
			$query= "select * from register1 WHERE email=('$e_mail')";
			$query_run= mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				echo'<script type="text/javascript"> alert("user already exits...try another email id")</script>';
				//<a href="index.php">
			}
			else
			{
				$query="insert into register1 values('$name','$name','$lname','$e_mail','$password'
			,'$stream','$subscribe','$gender','$phone')";
				$query_run=mysqli_query($con,$query);
				//var_dump($query_run); die;
				
				if($query_run)
				{
				//	 echo "success";
					header("Location:login1.php");
					
				}
				
				else
				{
					echo'<script type="text/javascript"> alert("Error")</script>';
				}
			}
			//<a href="index.php"></a>
		}
		else
		{
		
		echo'<script type="text/javascript"> alert("password and confirm password does not match")</script>';
	    }
	}
	
		
ob_flush();		
?>
</html>