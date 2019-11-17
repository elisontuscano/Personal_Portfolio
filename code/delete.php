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

<b style="color: red;"><?php 
              if(empty($_GET['error'])){  echo '';}
        else { $error= $_GET['error']; echo $error;}
            ?></b> <br><br>

<!--
Login <input type="radio" onclick="javascript:Check();" name="table" id="login"> 
Reference <input type="radio" onclick="javascript:Check();" name="table" id="reference"><br>
Hire <input type="radio" onclick="javascript:Check();" name="table" id="hire"><br> -->


    <div id="loginchecked" >
        <form action="deleteentry.php?table=<?php echo 'login';?>&&idname=<?php echo 'lid';?>" method="POST" align="left">
            <p align="left">Login Delete</p>
            <hr>
            <b>Enter ID:</b><br>
            <input type="number" name="id" id='id' size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Delete</button>            
        </form>
    </div>

    <br><br>

    <div id="referencechecked" >
        <form action="deleteentry.php?table=<?php echo 'reference';?>&&idname=<?php echo 'rid';?>" method="POST" align="left">
            <p align="left">Reference Delete</p>
            <hr>
            <b>Enter ID:</b><br>
            <input type="number" name="id" id='id' size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Delete</button>            
        </form>
    </div>

    <br><br>
        
    <div id="hirechecked" >
        <form action="deleteentry.php?table=<?php echo 'hire';?>&&idname=<?php echo 'hid';?>" method="POST" align="left">
            <p align="left">Hire Delete</p>
            <hr>
            <b>Enter ID:</b><br>
            <input type="number" name="id" id='id' size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Delete</button>            
        </form>
    </div>

    <br><br>

    <div id="checked" >
        <form action="deleteentry.php?table=<?php echo 'resume';?>&&idname=<?php echo 'rid';?>" method="POST" align="left">
            <p align="left">Resume Delete</p>
            <hr>
            <b>Enter ID:</b><br>
            <input type="number" name="id" id='id' size="80" required><br><br>
            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Delete</button>            
        </form>
    </div>

    <br><br>



<script >
  function Check() {
    if (document.getElementById('login').checked) {
        document.getElementById('loginchecked').style.visibility = 'visible';
    }
    else document.getElementById('loginchecked').style.visibility = 'hidden';

    if (document.getElementById('reference').checked) {
        document.getElementById('referencechecked').style.visibility = 'visible';
    }
    else document.getElementById('referencechecked').style.visibility = 'hidden';

    if (document.getElementById('hire').checked) {
        document.getElementById('hirechecked').style.visibility = 'visible';
    }
    else document.getElementById('hirechecked').style.visibility = 'hidden';


}
</script>



</div>
</div>
</body>
</html>
