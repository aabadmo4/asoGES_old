@extends("layouts.plantilla")
@section("cabecera")
<!--<div class="titulos"><h1>SOCIOS</h1></div>-->
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CONSULTAR SOCIOS {{$_SESSION["token"]}}</h4></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo Doc.</th>
                <th scope="col">Documento</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Provincia</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arreglo as $post) 
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['name']}}</td>
                <td>{{$post['surname']}}</td>
                <td>{{$post['doc_type_name']}}</td>
                <td>{{$post['document']}}</td>
                <td>{{$post['address']}}</td>
                <td>{{$post['city']}}</td>
                <td>{{$post['state']}}</td>
                <td>{{$post['birth_date']}}</td>
                <td><a href="http://nubezar.corp:8000/partners/info_socio?id={{$post['id']}}" class="btn btn-success">Ver</a></td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section("pie")
@endsection
