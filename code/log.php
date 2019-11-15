<?php
	include ('connect.php');
	
	 
	$username=$_POST['user'];
	$password=$_POST['password'];

	if(empty($username)){
		$message="username empty";
		header('location: login.php?error='.$message.'') ;
		exit;
	}

	if(empty($password)){
		$message="password empty";
		header('location: login.php?error='.$message.'') ;
		exit;
	}

	if(strlen($username) <3){
		$message="username is short";
		header('location: login.php?error='.$message.'') ;
		exit;
	}

	if(strlen($password) <6){
		$message="password is short";
		header('location: login.php?error='.$message.'') ;
		exit;
	}






	$result = mysqli_query($conn,"select * from login where user = '$username' and password = '$password'");


	if (mysqli_num_rows($result)<1)
		{	
			$message="Invalid username or password";
	header('location: login.php?error='.$message.'') ;
	exit;
		}

	else{

		if ($username == "elison")
		{
			$message="welcome admin";
			session_start();
			$_SESSION['login']=$username;
			header('location: adminpage.php?user='.$message.'') ;
			//header('location: admin.php?username='.$username.'') ;
			exit;
		}
		else{
			$message="welcome user";
			session_start();
			$_SESSION['login']=$username;
			header('location: Home.php?user='.$username.'') ;
			//header('location: admin.php?username='.$username.'') ;
			exit;
		
		}
			
		
	}



?>
<h1>welcome</h1>