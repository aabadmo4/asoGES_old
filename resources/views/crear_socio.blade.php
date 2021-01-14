@extends("layouts.plantilla")

@section("cabecera")
<h1>Crear socio</h1>
@endsection

@section("infoGeneral")
<div>
    <table>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type="text"></input></td>
        </tr>
        <tr>
            <td><label>Apellidos: </label></td>
            <td><input type="text"></input></td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="text"></input></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></input></td>
        </tr>
    </table>
</div>
@endsection

@section("pie")
@endsection