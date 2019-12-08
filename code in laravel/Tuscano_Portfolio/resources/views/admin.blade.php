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
@extends('navbar')

@section('content')
<div id="wrap">
  <div class ="topbar" >
    <span >
      Admin Page
    </span>
  </div>

<!-- --------------hire ------------------- -->

<div class="table">
    <h1>Hire Me</h1>

<table>
    <thead>
        <tr>
            <th> Id</th>
            <th> Imagename</th>
            <th> skillone </th>
            <th> skilltwo</th>
            <th> skillthree</th>
            <th> skillfour</th>
            <th> skillfive</th>
        </tr>
    </thead>
    <tbody>
         @foreach($hire as $user)
          <tr>
              <td> {{$user->hid}} </td>
              <td> {{$user->imagename}} </td>
              <td> {{$user->skillone}} </td>
              <td> {{$user->skilltwo}} </td>
              <td> {{$user->skillthree}} </td>
              <td> {{$user->skillfour}} </td>
              <td> {{$user->skillfive}} </td>
              <td><form method="post" action="/admin" >{{csrf_field()}}<input type="hidden" name="reference" value="{{$user->hid}}"><button class="btn btn-danger">DELETE</button>

              </form></td>  
          </tr>
         @endforeach
   </tbody>
</table>

</div>

<!-- --------------about ------------------- -->

<div class="table">
    <h1>About Me</h1>

<table>
    <thead>
        <tr>
            <th> Id</th>
            <th> Imagename</th>
            <th> Name </th>
            <th> Phone</th>
            <th> Dob</th>
            <th> Address</th>
            <th> Email</th>
            <th> Nationality</th>
        </tr>
    </thead>
    <tbody>
          @foreach($about as $user)
           <tr>
               <td> {{$user->aid}} </td>
               <td> {{$user->imagename}} </td>
               <td> {{$user->name}} </td>
               <td> {{$user->phone}} </td>
               <td> {{$user->dob}} </td>
               <td> {{$user->address}} </td>
               <td> {{$user->email}} </td>
               <td> {{$user->nationality}} </td>
               <td><form method="post" action="/admin" >{{csrf_field()}}<input type="hidden" name="reference" value="{{$user->aid}}"><button class="btn btn-danger">DELETE</button>

               </form></td>  

           </tr>
          @endforeach
   </tbody>
</table>

</div>

<!-- --------------reference ------------------- -->

<div class="table">
    <h1>Reference</h1>

<table>
    <thead>
        <tr>
            <th> Id</th>
            <th> Imagename</th>
            <th> Name </th>
            <th> Position</th>
        </tr>
    </thead>
    <tbody>
         @foreach($reference as $user)
          <tr>
              <td> {{$user->rid}} </td>
              <td> {{$user->imagename}} </td>
              <td> {{$user->name}} </td>
              <td> {{$user->position}} </td> 
              <td><form method="post" action="/admin" >{{csrf_field()}}<input type="hidden" name="reference" value="{{$user->rid}}"><button class="btn  btn-danger">DELETE</button>

              </form></td>             
          </tr>
         @endforeach
   </tbody>
</table>

</div>

<!-- --------------resume ------------------- -->

<div class="table">
    <h1>Resume</h1>

<table>
    <thead>
        <tr>
            <th> Id</th>
            <th> Company Name</th>
            <th> Position </th>
            <th> startdate</th>
            <th> enddate</th>
        </tr>
    </thead>
    <tbody>
         @foreach($resume as $user)
          <tr>
              <td> {{$user->rid}} </td>
              <td> {{$user->cname}} </td>
              <td> {{$user->position}} </td>
              <td> {{$user->startdate}} </td>
              <td> {{$user->enddate}} </td>
              <td><form method="post" action="/admin" >{{csrf_field()}}<input type="hidden" name="reference" value="{{$user->rid}}"><button class=" btn btn-danger">DELETE</button>

              </form></td>                
          </tr>
         @endforeach
   </tbody>
</table>

</div>


<!-- --------------portfolio ------------------- -->

<div class="table">
    <h1>Portfolio</h1>

<table>
    <thead>
        <tr>
            <th> Id</th>
            <th> Imagename</th>
            <th> Domain </th>
        </tr>
    </thead>
    <tbody>
         @foreach($portfolio as $user)
          <tr>
              <td> {{$user->pid}} </td>
              <td> {{$user->imagename}} </td>
              <td> {{$user->domain}} </td>
              <td><form method="post" action="/admin" >{{csrf_field()}}<input type="hidden" name="reference" value="{{$user->rid}}"><button class="btn  btn-danger">DELETE</button>

              </form></td> 
          </tr>
         @endforeach
   </tbody>
</table>

</div>


<!-- 88888888888888end================ -->
<br><br><br>
<center>
<a href="/add" class="btn" style="text-decoration: none">ADD</a> <br><br>
<a href="/edit" class="btn" style="text-decoration: none">EDIT</a><br><br>
</center>
@endsection
