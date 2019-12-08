
<!DOCTYPE html>
<html>
<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="js/portfolio.js"></script>

  <title>Portfolio </title>
</head>
<body>

<div id="wrapper">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center>
    <p>Elison M Tuscano</p>
    <li><a href="/home">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/skills">Skills</a></li>
    <li><a href="/resume">Resume</a></li>
    <li><a href="/reference">References</a></li>
    <li><a href="/portfolio">Portfolio</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/hireme">Hire me</a></li>
    
     @if (Route::has('login'))
                
                    @auth
                        
                        <li>
                          
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>

</ul></div>



  @yield('content')
</div>
</body>
</html>
