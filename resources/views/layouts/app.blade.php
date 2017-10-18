<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Aplición Web para el Internet de las Cosas IoT - @yield('title')</title>
  <meta name="description" content="IoTView">
  <meta name="Ing. César Augusto Álvarez Gaspar" content="AppIoT">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
    @yield('headspace')
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->


</head>

<body>
  <script src="js/scripts.js"></script>
    @section('sidebar')
        esta es la barra lateral
    @show
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
