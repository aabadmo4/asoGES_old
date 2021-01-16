@extends("layouts.plantilla")

@section("cabecera")
<div class="titulos"><h1>SOCIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="subtitulos"><h4>INFORMACION DE LOS SOCIOS</h4></div>

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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="{{env('NAVBAR_LINK_SOCIOS')}}/info_socio?id=1" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a href="http://nubezar.corp:8000/socios/info_socio?id=2" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a href="http://nubezar.corp:8000/socios/info_socio?id=3" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">10</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">11</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">13</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">14</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a href="#" class="btn btn-success">Ver</a>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    </tbody>
</table>



@endsection

@section("pie")
@endsection
