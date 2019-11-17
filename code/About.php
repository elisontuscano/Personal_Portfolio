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

  <title>About Me </title>
</head>
<body>

<div id="wrapper">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center>
    <p>Elison M Tuscano</p>
    <li><a href="Home.php">Home</a></li>
    <li><a class="active" href="About.php">About</a></li>
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
      ABOUT ME
    </span>
  </div>

<?php
  include('connect.php');  
  
$sql = "SELECT * FROM aboutme";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

  <div class="aboutleft">

    <img src="Images/<?php echo $row['imagename'] ; ?>"  width="250" height="325">

    <h2 style="margin-top: 10px;margin-left: 25%;"><?php echo $row['skillname'] ; ?></h2>
    
  </div>

  <div class="aboutright">
    <table>
      <tr>
        <td rowspan="2"><img src="Images/amname.png"></td>
        <td class="shift">Name</td>
        <td rowspan="2"><img src="Images/amemail.png"></td>
        <td >Email</td>
      </tr>
      <tr>
        <td class="shift" style="padding-right: 100px;"><?php echo $row['name'] ; ?></td>
        <td><?php echo $row['email'] ; ?></td>
      </tr>
      <tr style="margin-top: 20px;">
        <td rowspan="2"><img src="Images/amphone.png"></td>
        <td class="shift">Phone</td>
        <td rowspan="2"><img src="Images/amdob.png"></td>
        <td >Date Of Birth</td>
      </tr>
      <tr>
        <td class="shift" style="padding-right: 100px; padding-left: 10px;">01234567890</td>
        <td><?php echo $row['dob'] ; ?></td>
      </tr>
      <tr style="margin-top: 20px;">
        <td rowspan="2"><img src="Images/amlocation.png"></td>
        <td class="shift">Address</td>
        <td rowspan="2"><img src="Images/amnationality.png"></td>
        <td >Nationality</td>
      </tr>
      <tr>
        <td class="shift" style="padding-right: 100px;"><?php echo $row['address'] ; ?></td>
        <td><?php echo $row['nationality'] ; ?></td>
      </tr>

    </table>

  <?php 
  }

} else {
    echo "0 results";
}
  ?>

    <p>Social Profiles:
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-pinterest"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-snapchat-ghost"></a></p>



    <p>I have more than <strong>10 years of experience</strong> in the field of <strong>graphic design, web desig, webd evelopmet</strong> and <strong>Mobile application</strong>. Specialized in adobe web and graphic design toolsand also in other tools. Professional in corporate branding, Graphic designing, Web designing, visualization 3D Design, graphics & animations for e-learning, illustrations, web icons, flash web banner, flash intro animations, logod, brochures, posters, etc.</p>

<p>Also in systems programming in web environment managing languages such as HTML, Css, JavaScript and Framework like Bootstrap, Codeigniter and Laravel.</p>

<p><strong>My objectives</strong> are increasing my knowledge in computer science fields and new technologies especially, wen developement and web design field. Always looking forward to learn new technologies and be a part of a huge change in the world.</p>
<br>
<p>Yours Sincerely,</p>
<img src="Images/twke3.png" style="width: 250px">





    
  </div>
</div>
</div>
</body>
</html>
