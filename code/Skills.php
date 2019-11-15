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
  <title>skills </title>
}
</head>
<body>
<div id="wrapper" style="margin-top: -20px;">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center>
    <p>Elison M Tuscano</p>
    <li><a href="Home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a class="active" href="Skills.php">Skills</a></li>
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
    <li><a href="logout.php">logout</a></li>
    <?php } ?>  
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
</ul></div>

<div id="wrap">
  <div class ="topbar" >
    <span >
      SKILLS
    </span>
  </div>

  <div class="two-grid">
    <div class="grid-item">
      <h2>MARKETABLE SKILLS</h2>
      <div class="scontainer">
        <div class="skills sm_one">
          
          <i class="fa fa-laptop" style="border:none;"></i>
          Web Technology
        </div>
        <div class="spercentage">75%</div>

      </div>
      <div class="scontainer">
        <div class="skills sm_second">
          
          <i class="fa fa-mobile" style="border:none;"></i>
          Mobile Technology
        </div>
        <div class="spercentage">75%</div>

      </div>
      <div class="scontainer">
        <div class="skills sm_third">
          
          <i class="fa fa-camera" style="border:none;"></i>
          Photography
        </div>
        <div class="spercentage">60%</div>

      </div>
      <div class="scontainer">
        <div class="skills sm_forth">
          
          <i class="fa fa-server" style="border:none;"></i>
          Server Administration
        </div>
        <div class="spercentage">85%</div>

      </div>



    </div>
    <div class="grid-item">
      <h2>TRANSFERABLE SKILLS</h2>
      <div class="scontainer">
        <div class="skills st_one">
          <i class="fa fa-comments" style="border:none;"></i>
          Communication
        </div>
        <div class="spercentage">75%</div>


      </div>

      <div class="scontainer">
        <div class="skills st_second">
          <i class="fa fa-group" style="border:none;"></i>
          Team Work
        </div>
        <div class="spercentage">80%</div>


      </div>

      <div class="scontainer">
        <div class="skills st_third">
          <i class="fa fa-trophy" style="border:none;"></i>
          Leadership
        </div>
        <div class="spercentage">90%</div>


      </div>

      <div class="scontainer">
        <div class="skills st_forth">
          <i class="fa fa-clock-o" style="border:none;"></i>
          Time Management
        </div>
        <div class="spercentage">70%</div>


      </div>


    </div>
    
  </div>

  <div class="grid-item" style="padding-top: 0px; margin-top: -130px;"> <center><h2>Lanuguage skills & Knowledge</h2></center></div>

   
  <div class="four-grid">
        <div class="grid-item">

                <div class="c100 p95 green">
                    <span>95%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <center><h2>Spanish</h2></center>
        </div>
        <div class="grid-item">

                <div class="c100 p85 green">
                    <span>85%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <center><h2>English</h2></center>
        </div>
        <div class="grid-item">

                <div class="c100 p75 green">
                    <span>75%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <center><h2>Italian</h2></center>
        </div>
        <div class="grid-item">

                <div class="c100 p65 green">
                    <span>65%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <center><h2>Japanese</h2></center>

        </div>

  </div>

            

  
</div>
</div>
</body>
</html>
