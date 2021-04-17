@extends("layouts.plantilla")
@section("cabecera")

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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arreglo as $post) 
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['username']}}</td>
                <td>{{$post['type_name']}}</td>
                
                @if($post['status_name']=="Habilitado")
                <td><a href="{{env('ASOGES_URL')}}/users/edit/{{$post['id']}}/status_to/2" class="btn btn-success">Habilitado</a></td>
                @else
                <td><a href="{{env('ASOGES_URL')}}/users/edit/{{$post['id']}}/status_to/1" class="btn btn-danger active">Deshabilitado</a></td>  
                @endif
                
                <td><a href="{{env('ASOGES_URL')}}/partners/view/{{$post['partner_id']}}" class="btn btn-info">Ver socio</a></td>
                <td>{{$post['created_at']}}</td>
                <td><a href="{{env('ASOGES_URL')}}/users/view/{{$post['id']}}"><img src="http://nubezar.corp/APIRest/img/ver.png" alt="" width="50px" height="50px"/></a>
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
