<?php
	include ('connect.php');
	
	
	$name=$_POST['name']; 
	$imagename=$_POST['imagename']; 
	$position=$_POST['position'];
	

	$text=mysqli_query($conn,"insert into references (imagename,name,position) values ('$imagename','$name','$position')");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	// $message="Entry Added";
	// header('location: add.php?error='.$message.'') ;
	//header('location: Signup.php?error='.	$username.'') ;
		return view('/admin');

?>

<a href='/admin'>go back</a>