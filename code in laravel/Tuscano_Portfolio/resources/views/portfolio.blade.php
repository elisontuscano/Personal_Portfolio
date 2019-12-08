@extends('navbar')

@section('content')
<div id="wrap">
  <div class ="topbar" >
    <span >
      Portfolio
    </span>
  </div>

<br>
<center><p><a href="#">ALL</a> &nbsp&nbsp <a href="#">Website</a> &nbsp&nbsp <a href="#">Apps</a> &nbsp&nbsp <a href="#">photography</a></p></center>

<?php 
	$photo=array();
	$i=0;
?>
@foreach($data as $data)
	<?php
	
	        array_splice( $photo, $i, 0, $data->imagename );
	        $i++;

	?>

@endforeach

<center>
  <table width="80%">
    <tr>
      <td><img src="Images/<?php echo $photo[0] ; ?>" width="100%"</td>
      <td rowspan="2"><img src="Images/<?php echo $photo[1] ; ?>" width="100%" height="15%"></td>
      <td rowspan="3"><img src="Images/<?php echo $photo[2] ; ?>" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="Images/<?php echo $photo[3] ; ?>" height="50%"></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[4] ; ?>" width="80%" ></center></td>
    </tr>
    <tr>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[5] ; ?>" width="90%"></center></td>
      <td><center><img src="Images/<?php echo $photo[6] ; ?>" width="70%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/<?php echo $photo[7] ; ?>" width="100%"></center></td>
      <td rowspan="2"><center><img src="Images/<?php echo $photo[8] ; ?>" width="80%"></center></td>
    </tr>
    <tr>
      <td rowspan="3"><center><img src="Images/<?php echo $photo[9] ; ?>" width="90%"></center></td>
    </tr>
    <tr>
      <td rowspan="1"><center><img src="Images/<?php echo $photo[10] ; ?>" width="100%"></center></td>
    </tr>
    <tr>
      <td><center><img src="Images/<?php echo $photo[11] ; ?>" width="100%"></center></td>
    </tr>
  </table>

</center>






</div>
@endsection
