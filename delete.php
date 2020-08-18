<?php

include('conn.php');
$id = $_GET['id'];
$sql = "DELETE FROM `contact` WHERE id='$id'";
$run = mysqli_query($conn, $sql);

if($run){
    echo "<script>alert('record deleted successfully') </script>";
    echo "<script>window.open('fetch_data.php','_self') </script>";
}
else{
    echo "<script>alert('error') </script>";
    echo "<script>window.open('fetch_data.php','_self') </script>";
}



?>
