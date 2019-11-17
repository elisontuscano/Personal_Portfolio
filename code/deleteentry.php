<?php 
include ('connect.php');
session_start();

if(empty($_GET['table']))
  {  $table='';}
else 
  { $table= $_GET['table'];}

if(empty($_GET['idname']))
  {  $idname='';}
else 
  { $idname= $_GET['idname'];}


if(empty($id=$_POST['id'])){
	$message="Field Cannot be empty";
	header('location: delete.php?error='.$message.'') ;
	exit;
}

else{
	$result = mysqli_query($conn,"delete from $table where $idname = '$id'");
	header('location: adminpage.php?error='.$message.'') ;
}



?>