<?php session_start();
include "db.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$message=$_POST['postmessage'];
	$time=time();
	$email=$_SESSION['teacher'];

	if ($message=="" and $_FILES['myfile']=="") {
		
	}
	else {
		$insertpost=mysqli_query($conn," insert into post(email,message,time)values('$email','$message','$time')");
		$lastid=mysqli_insert_id($conn);
		if ($lastid>0) {
		 if ($_FILES['myfile']=="") {
		 	
		 }
		 else{


		 	foreach ($_FILES['myfile']['name'] as $value => $key) {
		 	$rand=mt_rand().mt_rand();
		 	$filename=mt_rand().$_FILES['myfile']['name'][$value];
		 	$folder="postimage/";
		 	$mainfile=$folder.$rand.$filename;
		 	$mainfile2=$rand.$filename;
		 	$filename2=$_FILES['myfile']['tmp_name'][$value];
             
             if (move_uploaded_file($filename2, $mainfile)) {
             	$insertpic=mysqli_query($conn,"insert into postimage(	imagename,postid,time)values('$mainfile2','$lastid','$time')");
             	
             }

		 	}
		 }
		}
	}
}


 ?>