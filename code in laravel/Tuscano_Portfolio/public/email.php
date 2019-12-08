<?php

	include ('connect.php');

	if(empty($_POST['name'])){
		$message="Email Send !!!";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}

	if(empty($_POST['email'])){
		$message="Email Send !!!";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}

	if(empty($_POST['phone'])){
		$message="Email Send !!!";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}
	
	if(empty($_POST['message'])){
		$message="Email Send !!!";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	  	$message="Enter Proper Email";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}

	if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $_POST['phone'])) {
		$message="Enter Proper phone number";
		header('location: contactme.php?error='.$message.'') ;
		exit;
	}


	
	if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['message'])) {
		$Name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$M = $_POST['message'];

		$to = 'elituscano@gmail.com';
		$subject = 'Contact Me Form Submission';
        $Message = "Name : ".$Name."\n"."Phone : ".$phone."\n"."Email : ".$email."\n". "Wrote this message : "."\n\n".$M;
            
        mail($to, $subject, $Message);
	}

	$message="Email Send !!!";
	header('location: contactme.php?error='.$message.'') ;

?>

<h1>email send !!!!</h1>