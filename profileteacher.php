<?php session_start(); 
include "db.php";
$email=$_SESSION['teacher'];
$selectp=mysqli_query($conn,"select * from teacher where email='$email'");
$row=mysqli_fetch_array($selectp);
$file=$row['profile'];

echo $file;
	
 ?>