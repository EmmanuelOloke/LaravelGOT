<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <img class="navbar-brand" src="{{asset('assets/img/shiffilogotr.png')}}" style="width: 140px; height: 60px; margin-top: -5px;">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/slider') }}">Slider</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="body">
        @yield('content')

        </div>
        <div class="footer">
            <nav class="navbar navbar-inverse footer">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/about') }}">About</a></li>
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                  <li><a href="{{ url('/services') }}">Services</a></li>
                  <li><a href="{{ url('/slider') }}">Slider</a></li>
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}"><button class="btn btn-default btn-sm navbar-btn"> Login</button></a>
                    @else
                        <a href="{{ url('/logout') }}"><button class="btn btn-default btn-sm navbar-btn"> Logout</button></a>
                    @endif
                </ul>
              </div>
            </nav>
        </div>
    </div>

    @yield('footer')

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>
