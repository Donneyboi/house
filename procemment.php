<?php session_start();
include "db.php";
$postid=mysqli_real_escape_string($conn, $_GET['postid']);
$message=mysqli_real_escape_string($conn, $_GET['message']);
  $email=$_SESSION['teacher'];
  $time=time();

if ($message!="") {
$insertcomment=mysqli_query($conn,"insert into comment(email,postid,message,time)values('$email','$postid','$message','$time')");
if ($insertcomment) {
echo"goog";
}
else{
	echo mysqli_error($conn);
}
}

  ?>