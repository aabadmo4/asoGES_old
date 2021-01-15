<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio - asoGES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #aaa;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 99vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
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
                font-size: 140px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .piedepagina{
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;

            }
        </style>
    </head>
    <body>
        @if(isset($err))
        Ha ocurrido un error* al procesar su solicitud. <br> *Es necesario estár logado para cerrar sesión
        @endif
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    asoGES
                </div>

                <div class="links">
                    <a href="{{env('ASOGES_URL')}}">Inicio</a>
                    <a href="{{env('NAVBAR_LINK_SOCIOS')}}">Socios</a>
                    <a href="{{env('NAVBAR_LINK_ACTAS')}}">Actas</a>
                    <a href="{{env('ASOGES_URL')}}">Noticias</a>
                    <a href="{{env('NAVBAR_LINK_CONTACTO')}}">Contacto</a>
                    <a href="{{env('NAVBAR_LINK_LOGIN')}}">Iniciar sesión</a>
                </div>
            </div>
        </div>
        <div>
            
        </div>
        <div div class="piedepagina"><a>Sistema de gestión de asociaciones - asoGES - Soluciones Informáticas NUBEZAR</a></div>
    </body>
</html>
