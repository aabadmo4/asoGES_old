@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>SOCIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CONSULTAR USUARIOS {{$_SESSION["token"]}}</h4></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Tipo</th>
                <th scope="col">Estado</th>
                <th scope="col">Socio</th>
                <th scope="col">Fecha alta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arreglo as $post) 
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['username']}}</td>
                <td>{{$post['type_name']}}</td>
                <td>{{$post['status_name']}}</td>
                <td><a href="http://nubezar.corp:8000/partners/info_socio?id={{$post['partner_id']}}" class="btn btn-success">Ver socio</a></td>
                <td>{{$post['created_at']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section("pie")
@endsection
