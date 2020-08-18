<?php
include('conn.php');
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	date_default_timezone_set('America/Toronto');

	$samay = date('d-m-Y H:i:s');

	$add_query = mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `samay`) VALUES ('$name','$email','$phone','$message','$samay')");

	if($add_query)
	{
		echo  "<script>alert('Your message sent Successfully.')</script>";
   echo "<script>window.open('index.html', '_self')</script>";
	}
	else
	{
		echo  "<script>alert('Something wrong..Please Try again')</script>";
   echo "<script>window.open('index.html', '_self')</script>";
	}

}
?>