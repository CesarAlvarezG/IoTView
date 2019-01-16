<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
  <meta charset="utf-8">
  <title>Aplicación Web para el Internet de las Cosas - @yield('title')</title>
  <meta name="description" content="IoTView">
  <meta name="Ing. César Augusto Álvarez Gaspar" content="AppIoT">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
      @yield('headspace')
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <h1>
                <a href="{{url('/') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><strong>IoTView</strong ></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><strong>IoTView</strong ></span>
                </a>
            </h1>
            @yield('headerspace')
        </header>
        @section('navibar')
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                 <span class="sr-only">Toggle navigation</span>
            </a>
           <div class="navbar-custom-menu">        
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                        <li class="dropdown messages-menu">
                            <a href="{{ route('login') }}" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">login</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">Registro</span>
                            </a>
                        </li>
                    @else
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/home') }}" class="dropdown-toggle">
                                <i class="fa fa-gears"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                            </form>
                        </li>    

                    @endguest
                </ul>    
           @yield('navibar')
        </div>    
    </nav>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="content" >
                  <ul class="sidebar-menu" data-widget="tree">
                    <li class="header"><strong><a href="{{url('home')}}">Panel de control</a></strong></li>
                    <li class="header"><strong><a href="{{url('view')}}">Zona publica</a></strong></li>
                    <li class="header"><strong><a href="{{url('viewsistemas')}}">Zona privada</a></strong></li>
                  </ul>
            @yield('sidebar')
            </div>
        </section>
    </aside>
    <div class="container">
        <!-- Espacio para los mensajes flash enviados entre solicitudes -->
        @if(Session::has('flash_message'))
            <article class="alert alert-success">
                {{ Session::get('flash_message') }}
            </article>
        @endif
        <section>
            <div class="content-wrapper">
                @yield('content')
            </div>
        </section>
    </div>
    <footer  class="main-footer">
        @yield('footerspace')
            Desarrollado por: <strong>César Augusto Álvarez Gaspar</strong>. Email: ing.cesaralvarezg@gmail.com
        <div align ="center">
            <img src="{!! url('imagenes/CAAG.png')!!}" width="100" height="50" alt ="CAAG"/>
        </div>
    </footer>
</div>
</body>
</html>
