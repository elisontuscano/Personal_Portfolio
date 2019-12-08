@extends('navbar')

@section('content')
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
@endsection
