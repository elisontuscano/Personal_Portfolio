<?php 
session_start();

?>
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
    <li><a href="Portfolio.php">Portfolio</a></li>
    <li><a href="Blog.php">Blog</a></li>
    <li><a class="active"href="Hireme.php">Hire me</a></li>
    <?php if (empty($_SESSION['login'])) { ?>
    <li><a href="login.php">login</a></li>
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a href="logout.php">logout</a></li>
    <?php } ?> 
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
  </ul>
</div>

<div id="wrap">
    <div class ="topbar" >
    <span >
      HIRE ME
    </span>
  </div>
<br>
<div class="grid-container">
  <?php
  include('connect.php');  
  
$sql = "SELECT * FROM hire";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

  <div class="grid-item">
    <div class="center">
      
    <img src="Images/<?php echo $row['imagename'];?>" width="80%"  >
    <h2><?php echo $row['price'] ; ?></h2>
    <p><?php echo $row['skillone'] ; ?><br><?php echo $row['skilltwo'] ; ?><br><?php echo $row['skillthree'] ; ?><br><?php echo $row['skillfour'] ; ?><br><?php echo $row['skillfive'] ; ?></p>
    <a href="contactme.php" class="btn" style="text-decoration: none">Contact US</a>

    </div>

  </div>


  <?php 
  }

} else {
    echo "0 results";
}
  ?>



<!--***********************hire static********************* 
  <div class="grid-item">
    <div class="center">

    <img src="Images/car4.png" width="80%"  >
    <h2>$300</h2>
    <p>Design for Natural People<br>Logo<br>Advrestising Image to print<br>Photo Editing</p>
    <a href="contactme.php" class="btn" style="text-decoration: none">Contact US</a>

    </div>

  </div>
  <div class="grid-item">
    <div class="center">
      
    <img src="Images/car5.png" width="80%"  >
    <h2>$650</h2>
    <p>Information Web Design<br>Logo<br>Photo Editing<br>Site Construction<br>Maintenance for 6 months</p>
    <a href="contactme.php" class="btn" style="text-decoration: none">Contact US</a>

    </div>

  </div>

  <div class="grid-item">
    <div class="center">
      
    <img src="Images/car6.png" width="80%"  >
    <h2>$1450</h2>
    <p>3D Character Design<br>Character Sketch<br>Digitiaztion and Development<br>Animation<br>Video Demo</p>
    <a href="contactme.php" class="btn" style="text-decoration: none">Contact US</a>

    </div>

  </div>


----->


</div>


  
</div>
</div>
</body>
</html>
