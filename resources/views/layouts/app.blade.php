<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Aplicación Web para el Internet de las Cosas - @yield('title')</title>
  <meta name="description" content="IoTView">
  <meta name="Ing. César Augusto Álvarez Gaspar" content="AppIoT">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('headspace')
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->


</head>

<body>

    <header align="center">

        <h1>
            <strong>IoTView</strong>
        </h1>
        <h2>
            Aplicación Web para el Internet de las Cosas
        </h2>
        @yield('headerspace')
    </header>

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
    @yield('navibar')
    </nav>
    <aside>
        @yield('sidebar')

    </aside>

    <div class="container">
        <!-- Espacio para los mensajes flash enviados entre solicitudes -->
    @if(Session::has('flash_message'))
        <article class="alert alert-success">
            {{ Session::get('flash_message') }}
        </article>
    @endif
        <section>
            @yield('content')
        </section>

    </div>

    <footer align="center">
        @yield('footerspace')
        <h1>
            Desarrollado por: <strong>César Augusto Álvarez Gaspar</strong>
        </h1>

        <a mailto="ing.cesaralvarezg@gmail.com">ing.cesaralvarezg@gmail.com</a>
            <div><img src="{!! url('imagenes/CAAG.png') !!}" width="200"  height="100" alt="CAAG" /></div>
    </footer>

</body>
</html>
