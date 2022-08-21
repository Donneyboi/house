<?php session_start();
include"db.php";

if (1==1) {
$firstn=$_POST['sfirstname'];
$lastn=$_POST['slastname'];
$email=$_POST['semail'];
$country=$_POST['scountry'];
$gender=$_POST['sgender'];
$pass=$_POST['spassword'];
$cpass=$_POST['sconfirmpassword'];

if ($firstn=="") {
	echo "input firstname";
}
elseif ($lastn=="") {
	echo "input lastname";
}
elseif ($email=="") {
	echo "input email";
}

elseif ($country=="") {
	echo "input country";
}

elseif ($gender=="") {
	echo "input gender";
}

elseif ($pass=="") {
	echo "input password";
}

elseif ($pass!=$cpass) {
	echo "password not match";
}
else {
	$select=mysqli_query($conn," select * from student where email='$email'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		echo "email already exit";
	}
	else{
		$insert=mysqli_query($conn,"insert into student(firstname,lastname,email,country,gender,password)values('$firstn','$lastn','$email','$country','$gender','$pass')");
		if ($insert) {
		$_SESSION['student']=$email;
			echo "<script>alert('".$_SESSION['student']."');window.location.href='index.html'</script>";
		}
		
	}
}



}
?>