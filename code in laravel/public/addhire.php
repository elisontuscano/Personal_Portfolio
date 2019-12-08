<?php
	include ('connect.php');
	
	
	$price=$_POST['price']; 
	$imagename=$_POST['imagename']; 
	$skillone=$_POST['skillone'];
	$skilltwo=$_POST['skilltwo'];
	$skillthree=$_POST['skillthree'];
	$skillfour=$_POST['skillfour'];
	$skillfive=$_POST['skillfive'];
	

	$text=mysqli_query($conn,"insert into hireme (imagename,price,skillone,skilltwo,skillthree,skillfour,skillfive) values ('$imagename','$price','$skillone','$skilltwo','$skillthree','$skillfour','$skillfive	')");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	$message="Entry Added";
	header('location: add.php?error='.$message.'') ;
	//header('location: Signup.php?error='.	$username.'') ;
?>