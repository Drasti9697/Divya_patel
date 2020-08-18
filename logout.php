<?php
session_start();  

session_destroy();
unset($_SESSION['username']);
echo "<script>alert('you are now logged out')</script>";
echo "<script>window.open('index.html', '_self')</script>";
die;
?>