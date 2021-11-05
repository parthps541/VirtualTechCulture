
<!DOCTYPE html>
<html>
<?php
include("connect.php");
?>
<form  method="POST">

Enter Your email:<input type="email" name="email1" required></br></br>
<input type="submit" value="Delete" name="deletebtn">

</form> 


	<?php
					if(isset($_POST["email1"]))
	{
		
		$ename=$_POST["email1"];
		
		if(isset($_POST["deletebtn"]))
		{	
			$quary= "select * from register1 WHERE email=('$ename')";
			$quary_run= mysqli_query($con,$quary);
			
			if(mysqli_num_rows($quary_run)>0)
			{
			$quary="delete from register1 where email='$ename'";
			$rev=mysqli_query($con,$quary);
			
			
				if($quary_run)
				{
					header("Location:login1.php");
					
				}
				
				
			}
			else
				{
					echo'<script type="text/javascript"> alert("Invalid Id")</script>';
				}
		}
	}
	?>
	
	</html>