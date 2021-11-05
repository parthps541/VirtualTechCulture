<?php
$servername="localhost";
$username="root";
$password="";
$dbname="connect";

$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{
	echo"Database Connected";
}
else
{
	echo"Database Not Connected..";
}
?>