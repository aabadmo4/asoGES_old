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
                <th scope="col">Tipo Socio</th>
                <th scope="col">Usuario</th>
                <th scope="col">Opciones</th>
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
                <td>{{$post['partner_type_name']}}</td>
                <td><a href="{{env('ASOGES_URL')}}/users/view/{{$post['id']}}" class="btn btn-success">Ver</a></td>
                <td><a href="{{env('ASOGES_URL')}}/partners/view/{{$post['id']}}" class="btn btn-success">X</a>
                    <a href="{{env('ASOGES_URL')}}/users/edit/{{$post['id']}}" class="btn btn-warning">X</a>
                    <a href="{{env('ASOGES_URL')}}/users/delete/{{$post['id']}}" class="btn btn-danger">X</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section("pie")
@endsection
