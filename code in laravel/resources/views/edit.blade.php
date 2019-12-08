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

    <div >
        <form action="editentry.php?table=<?php echo 'resume'; ?>" method="POST" align="left">
            <p align="left">Resume Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="cname">Company Name</option>
                <option value="position">Position</option>
                <option value="startdate">Start Date</option>
                <option value="enddate">End Date</option>
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
        <form action="editentry.php?table=<?php echo 'aboutme'; ?>" method="POST" align="left">
            <p align="left">Aboutme Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="imagename">Image Name</option>
                <option value="skillname">Skill Name</option>
                <option value="name">Name</option>
                <option value="phone">Phone</option>
                <option value="dob">Date of birth</option>
                <option value="address">Address</option>
                <option value="email">Email</option>
                <option value="nationality">Nationality</option>
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
        <form action="editentry.php?table=<?php echo 'portfolio'; ?>" method="POST" align="left">
            <p align="left">Portfolio Edit</p>
            <hr>
            Field :
            <select name="field"> Field :
                <option value="">Select...</option>
                <option value="imagename">Image Name</option>
                <option value="domain">Domain</option>  
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
        
    




</div>
@endsection
