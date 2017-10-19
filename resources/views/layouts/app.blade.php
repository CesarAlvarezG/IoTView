<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Aplición Web para el Internet de las Cosas IoT - @yield('title')</title>
  <meta name="description" content="IoTView">
  <meta name="Ing. César Augusto Álvarez Gaspar" content="AppIoT">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    @yield('headspace')
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->


</head>

<body>
    @section('headerspace')
        <header>
            Este es el titulo de la pagina
        </header>

    @show
    @section('navibar')
        <nav>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            Esta es la barra de navegación
        </nav>
    @show
    @section('sidebar')
        <aside>
            esta es la barra lateral
        </aside>
    @show


    <div class="container">
        @yield('content')
    </div>
    @section('footerspace')
        <footer>
            Este es el footer
        </footer>
    @show

</body>
</html>
