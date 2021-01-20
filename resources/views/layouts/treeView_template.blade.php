<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet"/>
        <title>asoGES</title>
        <style>
            body{
                background-image: url("/storage/background.png");
                color: #636b6f;
            }
            .titulos{
                text-align:center;
                -webkit-text-stroke: 2px black;
                color: transparent;
                height: 40px;
            }
            .subtitulos{
                text-align:center;
                -webkit-text-stroke: 0.5px black;

            }
            .centro_pagina{
                background-color: white;
                opacity: .8;
            }
            .tablafoto{
                float: right;
            }
            .contenido{
                width: 900px;
                margin: 0.8rem;
                padding: 1rem;
                border: 2px solid #ccc;
                text-align: center;
            }
            .footer{
                opacity: .88;
            }
            h5{
                -webkit-text-stroke: 0.35px black;
            }
        </style>
    </style>
</head>
<body>
    @include("layouts.navbar")
    @yield("cabecera")
    <div class="centro_pagina">
        @yield("infoGeneral")
    </div>
    @yield("pie")
    <div class="footer" style="text-align: center; background-color: grey; color:white"><strong>asoGES - Sistema de gestion de asociaciones - {{env('ORGANIZACION_CLIENTE')}} - Soluciones Informáticas Nubezar</strong></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
