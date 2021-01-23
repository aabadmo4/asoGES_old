@extends("layouts.plantilla")
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
                <th scope="col">CP</th>
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
                <td>{{$post['cp']}}</td>
                <td><a href="http://nubezar.corp:8000/partners/info_socio?id={{$post['id']}}" class="btn btn-success">X</a>
                    <a href="#" class="btn btn-warning">X</a>
                    <a href="#" class="btn btn-danger">X</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section("pie")
@endsection
