<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>asoGES</title>
        <style>
            .contenedor{
                background-color: #F00;
                text-align: center;
            }
            .infoGeneral{
                background-color: blue;
                margin:200px 0;
                color: #FFF;
            }
            .pie{
                background-color: #FF0;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
            @yield("cabecera")
        </div>
        <div class="infoGeneral">
            @yield("infoGeneral")
        </div>
        <div class="pie">
            @yield("pie")
            asoGES - Sistema de gestion de asociaciones - Soluciones Informáticas Nubezar
        </div>
    </body>
</html>
