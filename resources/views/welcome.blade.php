<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IoTView</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
            .text {
                text-align: justify;
                padding: 0 300px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Panel de control</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    IoTView
                </div>
                <div class="text">
                    <p>
                        Plataforma de Internet de las Cosas (IoT) para realizar control automático en sistemas dinámicos, redes de sensores, SmartMetering y SmartGrid. Esta plataforma se ha desarrollado como resultado de la tesis de Maestría en Ingeniería de César Augusto Álvarez Gaspar, en la universidad Autónoma de Manizales. Los desarrollos originales son para los System on Chip (SoC) ESP32 y ESP8266. En próximas entregas se espera ampliarla para otros dispositivos del IoT. Esta aplicación web esta creada para un solo proyecto compuesto por múltiplex sistemas, cada uno representado por un solo SoC. La gestión de la plataforma recae en el administrador quien crea, actualiza, destruye los sistemas y sensores asociados al proyecto.</p>
                </div>
                <div class="links">
                    <a href="{{url('/view')}}">Zona publica</a>
                    <a href="{{url('/viewsistemas')}}">Zona privada</a>
                    <a href="#">Documentación</a>
                    <a href="https://github.com/CesarAlvarezG/IoTView.git">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
