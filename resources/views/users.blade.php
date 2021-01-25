@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>USUARIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CONSULTAR USUARIOS</h4></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Pass</th>
                <th scope="col">Rol</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post) 
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['username']}}</td>
                <td>{{$post['password']}}</td>
                <td>{{$post['rol_id']}}</td>
                <td><a href="http://nubezar.corp:8000/users/{{$post['id']}}" class="btn btn-success">X</a>
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
