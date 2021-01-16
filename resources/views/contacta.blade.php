@extends("layouts.plantilla")
@section("cabecera")
@endsection

@section("infoGeneral")
<div class="contenido">
    <h1>Contacta</h1>
<p>Lorem ipsum contenido general<p>
<form action="http://nubezar.corp:8000/info" method="post">
    <input type="text" name="nombre">
    <input type="submit">
</form>
</div>
@endsection

@section("pie")
@endsection