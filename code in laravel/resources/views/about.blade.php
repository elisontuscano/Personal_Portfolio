@extends('navbar')
@section('content')

<div id="wrap">
<div class ="topbar" >
    <span >
      ABOUT ME
    </span>

  <div class="aboutleft">

    <img src="Images/{{$data->imagename}}"  width="250" height="325">

    <h2 style="margin-top: 10px;margin-left: 25%;">{{$data->skillname}}</h2>
    
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
        <td class="shift" style="padding-right: 100px;">{{$data->name}}</td>
        <td>{{$data->email}}</td>
      </tr>
      <tr style="margin-top: 20px;">
        <td rowspan="2"><img src="Images/amphone.png"></td>
        <td class="shift">Phone</td>
        <td rowspan="2"><img src="Images/amdob.png"></td>
        <td >Date Of Birth</td>
      </tr>
      <tr>
        <td class="shift" style="padding-right: 100px; padding-left: 10px;">01234567890</td>
        <td>{{$data->dob}}</td>
      </tr>
      <tr style="margin-top: 20px;">
        <td rowspan="2"><img src="Images/amlocation.png"></td>
        <td class="shift">Address</td>
        <td rowspan="2"><img src="Images/amnationality.png"></td>
        <td >Nationality</td>
      </tr>
      <tr>
        <td class="shift" style="padding-right: 100px;">{{$data->address}}</td>
        <td>{{$data->nationality}}</td>
      </tr>

    </table>

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
@endsection
