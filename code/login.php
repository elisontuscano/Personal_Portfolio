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
  <script type="text/javascript" src="js/portfolio.js"></script>
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
    <li><a class="active" href="login.php">login</a></li>
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a href="logout.php">logout</a></li>
    <?php } ?>    
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul></div>

<div id="wrap" style="background: url('15.jpg')">
    <center><div class="login">
        <form action="log.php" method="POST" align="left">
          <b style="color: red;"><?php 
              if(empty($_GET['error'])){  echo '';}
        else { $error= $_GET['error']; echo $error;}
            ?></b>
            <p align="left">Log in</p>
            <hr>
            <b>User:</b><br>
            <input type="text" name="user" id='user' size="80" required><br><br>
            <b>Password:</b><br>
            <input type="Password" name="password" id="password" size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="validate()">Get In</button>
                <button type="button" class="close" style="float:right;">Close</button>
               
            
        </form>

        <script >
          function validate(){


              var name= document.getElementById('user').value;
  var password= document.getElementById('password').value;

  if(name=='' || password==''){
    alert('All fields required');
    return false;
  }
  else if (name.length <3){
    alert('Name should be greater than 3');
    return false;
  }
  else if (password.length <6){
    alert('Password is short');
    return false;
  }

  else{
    return true;
  }

          }
        </script>

    </div></center>
 
  
</div>
</div>
</body>
</html>
