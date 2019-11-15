<?php
	include ('connect.php');
	
	
	$id=$_POST['id']; 
	$field=$_POST['field']; 
	$edit=$_POST['edit'];
	$table=$_GET['table'];
	$tid="";

	if (empty($id)) {
		$message="Id is empty";
	header('location: edit.php?error='.$message.'') ;
	exit;
		
	}

	if (empty($field)) {
		$message="Select a Field";
	header('location: edit.php?error='.$message.'') ;
	exit;
		
	}

	if (empty($edit)) {
		$message="Enter what to edit";
	header('location: edit.php?error='.$message.'') ;
	exit;
		
	}


if ($table=='login') {
	$tid='lid';
}

elseif ($table=='reference') {
	$tid ='rid';
}

elseif ($table=='hire') {
	$tid='hid';
}


echo $id;
echo $field;
echo $edit;
echo $table;
echo $tid;



	$text=mysqli_query($conn,"update $table SET $field='$edit' where $tid=$id");	
	if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
			
	
	
	$message="Entry updated";
	header('location: edit.php?error='.$message.'') ;
	//header('location: Signup.php?error='.	$username.'') ;
?>