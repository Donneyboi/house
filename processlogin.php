<?php session_start();
include "db.php";
if (1==1) {
	$email=$_POST['email'];
   $pass=$_POST['password'];

   if ($email=="") {
   	echo "input email";
   }

   else if ($pass=="") {
   	echo "input email";
   }
   else{
   	$tselect=mysqli_query($conn,"select * from teacher where email='$email' and password='$pass'");
   	// 
   	 $nums=mysqli_num_rows($tselect);
   	 if ($nums<1) {
   	 	$select=mysqli_query($conn,"select * from student where email='$email' and password='$pass'");
      $num=mysqli_num_rows($select);
      if ($num<1) {
       echo 1;
      }
      else{
       $_SESSION['student']=$email ;
      }
      //echo "user not found";
   	 }
   	 else{
   	 	$_SESSION['teacher']=$email;
   	 	//echo "<script>window.location.href='index.html'</script>";
   	 	}
   	 /*
   	 	if () {
   	 	echo "<script>alert('".$_SESSION['student']."');window.location.href='index.html'</script>";
   	 	}
   */
      if (isset($_SESSION['student']) or isset($_SESSION['teacher'])) {
   echo "<script>window.location.href='index.html'</script>";
      }

   	 }


}


  ?>