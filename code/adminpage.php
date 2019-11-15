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

  <title>Admin page </title>
</head>
<style>
table, th, td {
    /*border: 1px solid black;*/
}
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 

}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */

h1{
  color:#E25D33;
  padding:10px;
}

td a{
  color:white;
  background-color: red;
  display: block;
  margin-left:40px;
}
  
}
</style>
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

<!-- *****************************user*************************-->  
  <div class="table">
    <h1>login</h1>
  
<?php
  include('connect.php');  
  
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>User Name</th><th>Email</th><th>Password</th><th>ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["lname"]. " </td><td>" . $row["user"]. "</td><td>" . $row["email"]. "</td><td>" . $row["password"]. "</td><td>" . $row["lid"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>

<!-- *****************************reference*************************-->  

<div class="table">
    <h1>Reference</h1>
  
<?php
  include('connect.php');  
  
$sql = "SELECT * FROM reference";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>Image Name</th><th>Name</th><th>Position</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rid"]. "</td><td>" . $row["imagename"]. " </td><td>" . $row["name"]. "</td><td>" . $row["position"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>



<!-- *****************************hire*************************-->  
  <div class="table">
    <h1>Hire</h1>
  
<?php
  include('connect.php');  
  
$sql = "SELECT * FROM hire";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Image Name</th><th>Price</th><th>Skill 1</th><th>Skill 2</th><th>Skill 3</th><th>Skill 4</th><th>Skill 5</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["hid"]. "</td><td>" . $row["imagename"]. " </td><td>" . $row["price"]. "</td><td>" . $row["skillone"]. "</td><td>" . $row["skilltwo"]. "</td><td>" . $row["skillthree"]. "</td><td>" . $row["skillfour"]. "</td><td>" . $row["skillfive"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>


<!-- *****************************resume*************************-->  

<div class="table">
    <h1>Resume</h1>
  
<?php
  include('connect.php');  
  
$sql = "SELECT * FROM resume";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>Company Name</th><th>Position</th><th>Start Date</th><th>End Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rid"]. "</td><td>" . $row["cname"]. " </td><td>" . $row["position"]. "</td><td>" . $row["startdate"]. "</td><td>" . $row["enddate"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>

<!-- *****************************other*************************-->
<br><br><br>
<center>
<a href="add.php" class="btn" style="text-decoration: none">ADD</a> <br><br>
<a href="edit.php" class="btn" style="text-decoration: none">EDIT</a><br><br>
<a href="delete.php" class="btn" style="text-decoration: none">DELETE</a>
</center>

</div>
</div>
</body>
</html>
