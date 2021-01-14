@extends("layouts.plantilla")

@section("cabecera")
<div class="titulos"><h1>BUSCAR</h1></div>
@endsection

@section("infoGeneral")
@if(isset($_GET["termino"])&!empty($_GET["termino"]))
Término a buscar: "{{$_GET["termino"]}}".
@else
No se ha introducido ningún teérmino a buscar.
@endif
@endsection

@section("pie")
@endsection