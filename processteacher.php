 <?php session_start();
include"db.php";
if (1==1){
	$firstn=$_POST['tfirstname'];
	$lastn=$_POST['tlastname'];
	$email=$_POST['temail'];
	$country=$_POST['tcountry'];
	$work=$_POST['work'];
	$taspert=nl2br($_POST['taspert']);
	$bio=$_POST['bio'];
	$tpassword=$_POST['tpassword'];
	$tconfirmpassword=$_POST['tconfirmpassword'];

	if ($firstn=="") {
         echo "input firstname";
	}
	else if ($lastn=="") {
		echo "input lastname";
	}
    
    else if ($email=="") {
		echo "input email";
	}

	  else if ($country=="") {
		echo "input country";
	}
	  else if ($work=="") {
		echo "input work";
	}
	  else if ($taspert=="") {
		echo "input aspect";
	}
	  else if ($bio=="") {
		echo "input bio";
	}


		  else if ($tpassword=="") {
		echo "password is empty";
	}
		  else if ($tpassword!=$tconfirmpassword) {
		echo "password not match";
	}
	else{
		$select=mysqli_query($conn, "select * from teacher where email='$email'");
		$num=mysqli_num_rows($select);
		if ($num>0) {
			echo "email already exit";
		}
		else {
			$insert=mysqli_query($conn,"insert into teacher(firstname,lastname,email,country,work,aspect,bio,password)values('$firstn','$lastn','$email','$country','$work','$taspert','$bio','$tpassword')");
			if ($insert) {
			$_SESSION['teacher']=$email;
			echo "<script>window.location.href='index.html'</script>";
			}
			
		}
	}



}




 ?>