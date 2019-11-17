<?php 
session_start();

if(empty($_GET['user']))
  {  $user='';}
else 
  { $user= $_GET['user'];}
//echo $_SESSION['login'];

?>

<!DOCTYPE html>
<html>
<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <title>Homepage </title>
</head>
<body>

<div id="wrapper">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center>
    <p>Elison M Tuscano</p>
    <li><a class="active" href="Home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="Skills.php">Skills</a></li>
    <li><a href="Resume.php">Resume</a></li>
    <li><a href="references.php">References</a></li>
    <li><a href="Portfolio.php">Portfolio</a></li>
    <li><a href="Blog.php">Blog</a></li>
    <li><a href="Hireme.php">Hire me</a></li>

    <?php #admin option
    if (!empty($_SESSION['login'])) {
      
     if($_SESSION['login'] == 'elison'){?>   
    <li><a href="adminpage.php">Admin</a></li>
    <?php } } ?> 

    <?php #no user option
    if (empty($_SESSION['login'])) { ?>
    <li><a href="login.php">login</a></li>
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {#logout option
        ?>
    <li><a href="logout.php">logout</a></li>
    <?php }  ?>
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul>
</div>

<div id="wrapperhome" style="background: url('15.jpg')" >
  <h2>Hello I'M</h2>
  <h1>Elison Marshal Tuscano</h1>
  <h3>Mobile Developer</h3>
  <?php if (empty($_SESSION['login'])) { ?>
  <button class="btn" type="button" ><a href="loginfirst.php" style="text-decoration: none;color: #222222">Download My Cv <i class="fa fa-download" style="color: white; border:none"></i></a></button>
  <?php }  else {?>
  <button class="btn" type="button" ><a href="CV_Elisontuscano.pdf" style="text-decoration: none;color: #222222" download>Download My Cv <i class="fa fa-download" style="color: white; border:none"></i></a></button>
  <?php } ?> 
  
</div>
</div>
</body>
</html>
