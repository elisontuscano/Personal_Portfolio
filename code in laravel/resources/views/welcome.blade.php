<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/portfolio.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div id="wrapper">

    <div id="navbar">
      <ul>
        <center><img src="Images/logo.png" width="57%"  ></center>
        <p>Elison M Tuscano</p>
        <li><a class="active" href="/home">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/skills">Skills</a></li>
        <li><a href="/resume">Resume</a></li>
        <li><a href="/reference">References</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/hireme">Hire me</a></li>

        @if (Route::has('login'))
                   
                       @auth
                             
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <li><a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a></li>

                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                   </div>

                           </li>

                       @else
                          <li><a href="{{ route('login') }}">Login</a></li>

                           @if (Route::has('register'))
                               <li><a href="{{ route('register') }}">Register</a></li>
                           @endif
                       @endauth
                 
               @endif

        
        <div class="footer" style="margin-top: -20px"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
    </ul>
    </div>

    <div id="wrapperhome" style="background: url('15.jpg')" >
      <h2>Hello I'M</h2>
      <h1>Elison Marshal Tuscano</h1>
      <h3>Mobile Developer</h3>
      
      <button class="btn" type="button" ><a href="CV_Elisontuscano.pdf" style="text-decoration: none;color: #222222" download>Download My Cv <i class="fa fa-download" style="color: white; border:none"></i></a></button>
      
      
    </div>
    </div>
    </body>
</html>
