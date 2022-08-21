<?php session_start();
include "db.php";
 $email=$_SESSION['teacher'];
if (1==1) {
	$file=basename($_FILES['tpic']['name']);
	$folder="profile/";
	$ran=mt_rand().mt_rand();
    $files2=$folder.$ran.$file;
    $files3=$ran.$file;
    $move=move_uploaded_file($_FILES['tpic']['tmp_name'], $files2);

    if ($move) {
    	$update=mysqli_query($conn," update teacher set profile='$files3' where email='$email'");
    	// code...
    }
    
}



 ?>