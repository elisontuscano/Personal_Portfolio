<?php session_start(); ?>
<html>
<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/portfolio.js"></script>
  <title>Homepage </title>
</head>
<body>
<div id="wrapper">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center>
    <p>Elison M Tuscano</p>
    <li><a href="Home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="Skills.php">Skills</a></li>
    <li><a href="Resume.php">Resume</a></li>
    <li><a href="references.php">References</a></li>
    <li><a href="Portfolio.php">Portfolio</a></li>
    <li><a href="Blog.php">Blog</a></li>
    <li><a href="Hireme.php">Hire me</a></li>
    <?php if (empty($_SESSION['login'])) { ?>
    <li><a href="login.php">login</a></li>
    <li><a class="active" href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a href="logout.php">logout</a></li>
    <?php } ?>  
    <div class="footer"><p>&copy;Apps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul></div>

<div id="wrap" style="background: url('15.jpg')">
  <center><div class="signup">
        <form action="sign.php" method="POST" align="left">
            <p align="left">Check in</p>
            <hr>
            <b style="color: red;"><?php /*$error = isset($_GET['error']) ? $_GET['error'] : '';
            	echo $error;	*/
            	if(empty($_GET['error'])){  echo '';}
				else { $error= $_GET['error']; echo $error;}
            ?></b><br>
            <b>Name:</b><br>
            <input type="text" name="name" id="name" size="80" required><br><br>
            <b>Last Name:</b><br>
            <input type="text" name="lname" id="lname" size="80" required><br><br>
            <b>Email:</b><br>
            <input type="Email" name="email" id="email" size="80" required><br><br>
            <b>User:</b><br>
            <input type="text" name="user" id="user" size="80" required><br><br>
            <b>Password:</b><br>
            <input type="password" name="password" id="password" size="80" required><br><br>
            <b>Repeat password:</b><br>
            <input type="password" name="repassword" id="repassword" size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="sign()">Get In</button>
                <button type="button" class="close" style="float:right;">Close</button>
               
            
        </form>
    </div></center>
  </div>
</div>

</body>
</html>
