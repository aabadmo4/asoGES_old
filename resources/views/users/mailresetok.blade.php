@extends("layouts.plantilla_non_session")
@section("cabecera")
<div class="titulos"><h1>AsoGES - Sistema de Gestión de Asociaciones</h1></div>
@endsection

@section("infoGeneral")
<div class="subtitulos"><h4>RESTABLCER CONTRASEÑA</h4></div>
Hemos enviado un enlace al correo asociado a la cuenta @ {{$_GET["txtusername"]}}, desde el cual podrá configurar su nueva contraseña . 
@endsection

@section("pie")
@endsection
