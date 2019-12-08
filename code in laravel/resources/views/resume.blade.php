<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Resume </title>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: white;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
  background-color: #cccccc;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;  
  border: medium solid #e6e6ff;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #3333ff;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid #3333ff;
  border-width: 10px 10px 10px 0;
  border-color: transparent #3333ff transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 10px 15px;
  background-color: #e6e6ff;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid #e6e6ff;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
@extends('navbar')

@section('content')
	
	<div id="wrap">
	  <div class ="topbar" >
	    <span >
	      RESUME
	    </span>


	  </div>

	<br><br><br>

	     
	<div class="timeline">

<?php $i=0;?>	

	 @foreach($data as $data) 

	 	@if ($i%2==0)

	  <div class="container left">
	    <div class="content">
	      <h2 style="background-color: #3333ff; margin: -10px ;padding: 10px;margin-left: -15px;margin-right: -15px;">{{$data->cname}}</h2>
	      <p>{{$data->position}} ( {{$data->startdate}} - {{$data->enddate}} )</p>
	    </div>
	  </div>

	@else

	  <div class="container right">
	    <div class="content">
	      <h2 style="background-color: #3333ff; margin: -10px ;padding: 10px;margin-left: -15px;margin-right: -15px;">{{$data->cname}}</h2>
	      <p>{{$data->position}} ( {{$data->startdate}} - {{$data->enddate}} )</p>
	    </div>
	  </div> 

	@endif

	<?php $i=$i+1;?>
	@endforeach



	  
	</div>  





  
  
</div>
@endsection