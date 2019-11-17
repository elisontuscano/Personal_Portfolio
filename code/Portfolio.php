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
    <?php #admin option
    if (!empty($_SESSION['login'])) {
      
     if($_SESSION['login'] == 'elison'){?>   
    <li><a href="adminpage.php">Admin</a></li>
    <?php } } ?> 
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

<?php
  include('connect.php');  
  
$sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  $photo=array();
  $i=0;
    while($row = $result->fetch_assoc()) { 
        array_splice( $photo, $i, 0, $row['imagename'] );
        $i++;

        }

} 

      ?>

<center>
  <table width="80%">
    <tr>
      <td><img src="Images/<?php echo $photo[0] ; ?>" width="100%"</td>
      <td rowspan="2"><img src="Images/<?php echo $photo[1] ; ?>" width="100%" height="15%"></td>
      <td rowspan="3"><img src="Images/<?php echo $photo[2] ; ?>" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="Images/<?php echo $photo[3] ; ?>" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[4] ; ?>" width="80%" ></center></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[5] ; ?>" width="90%"></center></td>
      <td><center><img src="Images/<?php echo $photo[6] ; ?>" width="70%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/<?php echo $photo[7] ; ?>" width="100%"></center></td>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[8] ; ?>" width="80%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/<?php echo $photo[9] ; ?>" width="90%"></center></td>
    </tr>
    <tr>
      <td rowspan="1"><center><img src="Images/<?php echo $photo[10] ; ?>" width="100%"></center></td>
    </tr>
    <tr>
      <td><center><img src="Images/<?php echo $photo[11] ; ?>" width="100%"></center></td>
    </tr>
  </table>

</center>

 <?php 
  
  ?>





</div>
</div>
</body>
</html>
