<?php
	include ('connect.php');
	
	
	$first_name=$_POST['name']; 
	$last_name=$_POST['lname']; 
	$username=$_POST['user'];
	$email=$_POST['email']; 
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];

	if(empty($username)){
		$message="username empty";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	if(empty($password)){
		$message="password empty";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	if(strlen($username) <3){
		$message="username is short";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	if(strlen($password) <6){
		$message="password is short";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	if($password !== $repassword){
		$message="password do not match";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	$message="Enter Proper Email";
		header('location: Signup.php?error='.$message.'') ;
		exit;
	}

	
	
	$result = mysqli_query($conn,"select * from login where email = '$email' ");

	if (mysqli_num_rows($result)>0)
		{	
	$e="Alreay a member exists with this username or email";
	header('location: Signup.php?error='.$e.'') ;
	exit; }

	$text=mysqli_query($conn,"insert into login (name,lname,user,email,password) values ('$first_name','$last_name','$username','$email','$password')");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	session_start();
	$message="User Created Please Login";
	header('location: login.php?error='.$message.'') ;
	//header('location: Signup.php?error='.	$username.'') ;
?>

<h1> welcome to this page</h1>
