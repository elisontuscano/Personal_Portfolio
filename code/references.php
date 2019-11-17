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
  <title>References </title>
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
    <li><a class="active"href="references.php">References</a></li>
    <li><a href="Portfolio.php">Portfolio</a></li>
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
  </ul>
</div>

<div id="wrap">
    <div class ="topbar" >
    <span >
      REFERENCES
    </span>
  </div>
<br>
<div class="grid-container" style="padding-left: 0px;">


<?php
  include('connect.php');  
  
$sql = "SELECT * FROM reference";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

      <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/<?php echo $row['imagename'] ; ?>" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong><?php echo $row['name'] ; ?></strong><br>
        <?php echo $row['position'] ; ?><br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>


  <?php 
  }

} else {
    echo "0 results";
}
  ?>



      <!--  ************************** static reference  ************************** 


  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/joe.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>JOE RODRIGUEZ</strong><br>
        Developer/Musician<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>

  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/rosy.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>ROSY CORONADO</strong><br>
        PSYCHOLOGIST<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>

  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/yury.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>YURY JAJITZKY</strong><br>
        CEO/Developer<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>

  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/kyss.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>KYSS CHIRINOS</strong><br>
        Marketing/Designer<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>

  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/carhil.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>CARHIL MATOS</strong><br>
        CEO/Developer<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>

  <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/leo.jpg" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>MARK ZUCKERBERG</strong><br>
        Marketing/Designer/Musician<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>        

            ----------------------->
  

 
</div>


  
</div>
</div>
</body>
</html>
