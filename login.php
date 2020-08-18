<?php 
session_start();
include('conn.php');

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
	$run = mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount>0)
	{
		$_SESSION['username'] = $username;
		header("location:fetch_data.php"); 
    die;
	}
	else{
   echo  "<script>alert('username and password does not match')</script>";
   echo "<script>window.open('index.html', '_self')</script>";
  } 
}


?>