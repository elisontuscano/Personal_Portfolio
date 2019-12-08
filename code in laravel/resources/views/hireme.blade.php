@extends('navbar')

@section('content')
<div id="wrap">
    <div class ="topbar" >
    <span >
      HIRE ME
    </span>
  </div>
<br>
<div class="grid-container">

@foreach($data as $data)

  <div class="grid-item">
    <div class="center">
      
    <img src="Images/{{$data->imagename}}" width="80%"  >
    <h2>{{$data->price}}</h2>
    <p>{{$data->skillone}}<br>{{$data->skilltwo}}<br>{{$data->skillthree}}<br>{{$data->skillfour}}<br>{{$data->skillfive}}</p>
    <a href="/contactme" class="btn" style="text-decoration: none">Contact US</a>

    </div>

  </div>


@endforeach
</div>
</div>
@endsection
