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
            <tr>
                <td>{{$user_data['user_id']}}</td>
                <td>{{$user_data['username']}}</td>
                <td>{{$user_data['username']}}</td>

                @if($user_data['status_name']=="Habilitado")
                <td><a href="{{env('ASOGES_URL')}}/users/edit/{{$user_data['user_id']}}/status_to/2" class="btn btn-success">Habilitado</a></td>
                @else
                <td><a href="{{env('ASOGES_URL')}}/users/edit/{{$user_data['user_id']}}/status_to/1" class="btn btn-danger active">Deshabilitado</a></td>  
                @endif

                <td><a href="{{env('ASOGES_URL')}}/partners/view/{{$user_data['user_id']}}" class="btn btn-info">Ver socio</a></td>
                <td>{{$user_data['user_id']}}</td>
                <td><a href="{{env('ASOGES_URL')}}/users/view/{{$user_data['user_id']}}"><img src="http://nubezar.corp/APIRest/img/ver.png" alt="" width="50px" height="50px"/></a>
                    <a href="{{env('ASOGES_URL')}}/users/edit/{{$user_data['user_id']}}" class="btn btn-warning">X</a>
                    <a href="{{env('ASOGES_URL')}}/users/delete/{{$user_data['user_id']}}" class="btn btn-danger">X</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="subtitulos"><h4>CONSULTAR SESIONES</h4></div>
    <div class="sessions_table">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ip</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>00-00-0000 00:00</td>
                    <td>Inactivo</td>
                    <td>127.0.0.01</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>00-00-0000 00:00</td>
                    <td>Inactivo</td>
                    <td>127.0.0.01</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>00-00-0000 00:00</td>
                    <td>Activo</td>
                    <td>127.0.0.01</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection

@section("pie")
@endsection
