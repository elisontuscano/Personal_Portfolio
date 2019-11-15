<?php
	include ('connect.php');
	
	
	$first_name=$_POST['name']; 
	$last_name=$_POST['lname']; 
	$username=$_POST['user'];
	$email=$_POST['email']; 
	$password=$_POST['password'];

	
	
	$result = mysqli_query($conn,"select * from login where email = '$email' ");

	if (mysqli_num_rows($result)>0)
		{	
	$e="Alreay a member exists with this email";
	header('location: add.php?error='.$e.'') ;
	exit; }

	$text=mysqli_query($conn,"insert into login (name,lname,user,email,password) values ('$first_name','$last_name','$username','$email','$password')");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	$message="Entry Added";
	header('location: add.php?error='.$message.'') ;
	//header('location: Signup.php?error='.	$username.'') ;
?>