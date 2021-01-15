@extends("layouts.plantilla")

@section("cabecera")
<h1>Contacta</h1>
@endsection

@section("infoGeneral")
<p>Lorem ipsum contenido general<p>
<form action="http://nubezar.corp:8000/info" method="post">
    <input type="text" name="nombre">
    <input type="submit">
</form>
@endsection

@section("pie")
@endsection