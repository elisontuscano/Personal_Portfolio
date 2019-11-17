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
  <script type="text/javascript" src="js/portfolio.js"></script>
  <title>Admin page </title>
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
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a class="active" href="adminpage.php">Admin Page</a></li>
    <li><a href="logout.php">logout</a></li>
    <?php } ?> 
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul></div>

<div id="wrap">
  <div class ="topbar" >
    <span >
      Admin Page
    </span>
  </div>
  <br><br>

<b style="color: red;"><?php 
              if(empty($_GET['error'])){  echo '';}
        else { $error= $_GET['error']; echo $error;}
            ?></b> <br><br>




    <div >
        <form action="addlogin.php" method="POST" align="left">
            <p align="left">Login ADD</p>
            <hr>
            <b>First Name :</b><br>
            <input type="text" name="name" id='name' size="80" ><br><br>
            <b>Last Name</b><br>
            <input type="text" name="lname" id='lname' size="80" ><br><br>
            <b>Username</b><br>
            <input type="text" name="user" id='user' size="80" ><br><br>
            <b>Email</b><br>
            <input type="text" name="email" id='email' size="80" ><br><br>
            <b>Password</b><br>
            <input type="text" name="password" id='password' size="80" ><br><br>

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">ADD</button>            
        </form>
    </div>

    <br><br>
        
    
    <div >
        <form action="addreference.php" method="POST" align="left">
            <p align="left">Reference ADD</p>
            <hr>
            <b>Image Name :</b><br>
            <input type="text" name="imagename" id='imagename' size="80" ><br><br>
            <b>Name :</b><br>
            <input type="text" name="name" id='name' size="80" ><br><br>
            <b>Position :</b><br>
            <input type="text" name="position" id='position' size="80" ><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">ADD</button>            
        </form>
    </div>

    <br><br>


    <div >
        <form action="addhire.php" method="POST" align="left">
            <p align="left">Hire ADD</p>
            <hr>
            <b>Image Name :</b><br>
            <input type="text" name="imagename" id='imagename' size="80" ><br><br>
            <b>Price</b><br>
            <input type="text" name="price" id='price' size="80" ><br><br>
            <b>Skill 1</b><br>
            <input type="text" name="skillone" id='skillone' size="80" ><br><br>
            <b>Skill 2</b><br>
            <input type="text" name="skilltwo" id='skilltwo' size="80" ><br><br>
            <b>Skill 3</b><br>
            <input type="text" name="skillthree" id='skillthree' size="80" ><br><br>
            <b>Skill 4</b><br>
            <input type="text" name="skillfour" id='skillfour' size="80" ><br><br>
            <b>Skill 5</b><br>
            <input type="text" name="skillfive" id='skillfive' size="80" ><br><br>

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">ADD</button>            
        </form>
    </div>

    <br><br>


    <div >
        <form action="addresume.php" method="POST" align="left">
            <p align="left">Resume ADD</p>
            <hr>
            <b>Company Name :</b><br>
            <input type="text" name="cname" id='cname' size="80" ><br><br>
            <b>Position</b><br>
            <input type="text" name="position" id='position' size="80" ><br><br>
            <b>Start Date </b><br>
            <input type="text" name="startdate" id='startdate' size="80" ><br><br>
            <b>End Date</b><br>
            <input type="text" name="enddate" id='enddate' size="80" ><br><br>

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">ADD</button>            
        </form>
    </div>

    <br><br>



</div>
</div>
</body>
</html>
