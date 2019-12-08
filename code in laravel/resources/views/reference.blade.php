@extends('navbar')

@section('content')
<div id="wrap">
    <div class ="topbar" >
    <span >
      REFERENCES
    </span>
  </div>
<br>
<div class="grid-container" style="padding-left: 0px;">


@foreach($data as $data)

      <div class="grid-item">
    <form>
      <fieldset>
        <legend align="center"><img src="Images/{{$data->imagename}}" alt="Avatar" style="width:200px;border-radius: 50%;"></legend>
        <center><strong>{{$data->name}}</strong><br>
        {{$data->position}}<br>
        <p>"As always Great Creative thinking for the best solution<br>luis miguel is by far the most professional and<br>knowledgeable provider i worked with. I will hire him<br>again :)"</p></center>
      </fieldset>
    </form>

  </div>


@endforeach
</div>
</div>
@endsection
