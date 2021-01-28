@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>USUARIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CREAR USUARIOS</h4></div>
    @if($data!="0")
    <div class="alert alert-success" role="alert">
        <strong>Acción registrada!</strong> Se ha creado un nuevo usuario correctamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="http://nubezar.corp:8000/users/createuser" method="get">
        <table>
            <tr>
                <td><label>Usuario:</label></td>
                <td><input type="text" name="txtusername"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="text" name="txtpassword"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Crear usuario"></td>
            </tr>
        </table>
    </form>
</div>
@endsection

@section("pie")
@endsection
