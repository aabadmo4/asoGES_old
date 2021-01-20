@extends("layouts.plantilla")
<?php
$json = file_get_contents("http://nubezar.corp/APIRest/_Partners/?opcion=getPartners");
$arreglo = json_decode($json, "false");
?>
@section("cabecera")
<div class="titulos"><h1>SOCIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CONSULTAR SOCIOS</h4></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arreglo as $post) 
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['name']}}</td>
                <td>{{$post['surname']}}</td>
                <td>{{$post['email']}}</td>
                <td><a href="http://nubezar.corp:8000/socios/info_socio?id={{$post['id']}}" class="btn btn-success">Ver</a>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <a href="#" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section("pie")
@endsection
