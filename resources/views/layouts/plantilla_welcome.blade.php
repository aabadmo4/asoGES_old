
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio - asoGES</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
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
            .titulos{
                text-align: center;
            }
            table {
                width: 70%;
                border: 1px solid #000;
            }
            th, td {
                width: 25%;
                text-align: left;
                vertical-align: top;
                border: 1px solid #000;
            }
            .error{
                text-align: center;
                color: black;
                text-decoration: underline overline;
            }
        </style>
    </head>
    @yield("cabecera")
    <body>
        @if(isset($err))
            @if($err="002")
                <div class="error">
                    <img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />
                    Es necesario iniciar sesión para acceder al contenido solicitado 
                    ¿Quieres iniciar sesión? Haz click <a href="{{env('NAVBAR_LINK_LOGIN')}}">aquí</a>.
                    <img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />
                </div>
            @endif
        @endif
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    asoGES
                </div>

                <div class="links">
                    <a href="{{env('ASOGES_URL')}}">Inicio</a>
                    <a href="{{env('NAVBAR_LINK_PARTNERS')}}">Socios</a>
                    <a href="{{env('NAVBAR_LINK_ACTAS')}}">Actas</a>
                    <a href="{{env('NAVBAR_LINK_NOTICIAS')}}">Noticias</a>
                    <a href="{{env('NAVBAR_LINK_CONTACTO')}}">Contacto</a>
                    @if(isset($_SESSION["logged_user"]))
                        <a href="{{env('NAVBAR_LINK_LOGIN')}}">Iniciar sesión</a>
                    @elseif(!isset($_SESSION["logged_user"]))
                        <a href="{{env('NAVBAR_LINK_LOGOUT')}}">Cerrar sesión</a>
                    @endif
                </div>
            </div>
        </div>
        @yield("infoGeneral")
        @yield("pie")
        <div div class="piedepagina"><a>Sistema de gestión de asociaciones - asoGES - Soluciones Informáticas NUBEZAR</a></div>
    </body>
</html>
