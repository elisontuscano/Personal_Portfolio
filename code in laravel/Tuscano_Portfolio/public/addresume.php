<?php
	include ('connect.php');
	
	
	$name=$_POST['cname']; 
	$position=$_POST['position'];
	$startdate=$_POST['startdate']; 
	$enddate=$_POST['enddate']; 
	

	$text=mysqli_query($conn,"insert into resumes (cname,position,startdate,enddate) values ('$name','$position','$startdate','$enddate')");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	//header('location: Signup.php?error='.	$username.'') ;
	
?>

<a href='/admin'>go back</a>