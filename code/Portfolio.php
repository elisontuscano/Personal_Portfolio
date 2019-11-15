<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <li><a class="active" href="Portfolio.php">Portfolio</a></li>
    <li><a href="Blog.php">Blog</a></li>
    <li><a href="Hireme.php">Hire me</a></li>
    <?php if (empty($_SESSION['login'])) { ?>
    <li><a href="login.php">login</a></li>
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a href="logout.php">logout</a></li>
    <?php } ?>  
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul></div>

<div id="wrap">
  <div class ="topbar" >
    <span >
      Portfolio
    </span>
  </div>

<br>
<center><p><a href="#">ALL</a> &nbsp&nbsp <a href="#">Website</a> &nbsp&nbsp <a href="#">Apps</a> &nbsp&nbsp <a href="#">photography</a></p></center>

<center>
  <table width="80%">
    <tr>
      <td><img src="Images/asgardia.png" width="100%"</td>
      <td rowspan="2"><img src="Images/dise11.jpg" width="100%" height="15%"></td>
      <td rowspan="3"><img src="Images/16.jpg" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="Images/1.jpg" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/app9.png" width="80%" ></center></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/app8.png" width="90%"></center></td>
      <td><center><img src="Images/dise4.png" width="70%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/app7.png" width="100%"></center></td>
      <td rowspan="2"><center><img src="Images/9.jpg" width="80%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/app5.png" width="90%"></center></td>
    </tr>
    <tr>
      <td rowspan="1"><center><img src="Images/dise5.png" width="100%"></center></td>
    </tr>
    <tr>
      <td><center><img src="Images/player.png" width="100%"></center></td>
    </tr>
  </table>

</center>



</div>
</div>
</body>
</html>
