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
        <form action="editentry.php?table=<?php echo 'login'; ?>" method="POST" align="left">
            <p align="left">Login Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="name">First Name</option>
                <option value="lname">Last Name</option>
                <option value="user">User Name</option>
                <option value="email">email</option>
                <option value="password">Password</option>
            </select>
            <br><br>

            <b>Updated Value :</b><br>
            <input type="text" name="edit" id='edit' size="80" ><br><br>
            <b>ID of element to update:</b><br>
            <input type="text" name="id" id='id' size="80" ><br><br>
        

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Edit</button>            
        </form>
    </div>

    <br><br>


    <div >
        <form action="editentry.php?table=<?php echo 'reference'; ?>" method="POST" align="left">
            <p align="left">Reference Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="imagename">Image Name</option>
                <option value="name">Name</option>
                <option value="position">Position</option>
                
            </select>
            <br><br>

            <b>Updated Value :</b><br>
            <input type="text" name="edit" id='edit' size="80" ><br><br>
            <b>ID of element to update:</b><br>
            <input type="text" name="id" id='id' size="80" ><br><br>
        

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Edit</button>            
        </form>
    </div>

    <br><br>


    <div >
        <form action="editentry.php?table=<?php echo 'hire'; ?>" method="POST" align="left">
            <p align="left">Hire Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="imagename">Image Name</option>
                <option value="price">Price</option>
                <option value="skillone">skill 1</option>
                <option value="skilltwo">skill 2</option>
                <option value="skillthree">skill 3</option>
                <option value="skillfour">skill 4</option>
                <option value="skillfive">skill 5</option>
            </select>
            <br><br>

            <b>Updated Value :</b><br>
            <input type="text" name="edit" id='edit' size="80" ><br><br>
            <b>ID of element to update:</b><br>
            <input type="text" name="id" id='id' size="80" ><br><br>
        

            <hr>
            
                 <button type="submit" class="submit" style="float:right;" onclick="#">Edit</button>            
        </form>
    </div>

    <br><br>
        
    




</div>
</div>
</body>
</html>
