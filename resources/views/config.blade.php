@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>CONFIGURACIÓN</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>PERSONALIZACIÓN</h4></div>
    @if($_SESSION["logged_user_rol_id"]=="2")
    <div class="subtitulos"><h4>Herramientas del admin</h4></div>
    <a href="http://nubezar.corp:8000/users">Usuarios</a>
    <a href="http://nubezar.corp:8000/users/create">Crear usuario</a>
    @endif
</div>
@endsection

@section("pie")
@endsection
