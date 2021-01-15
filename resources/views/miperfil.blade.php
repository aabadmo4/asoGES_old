<!-- 
consumiendo webservive apirest nubezar http://nubezar.corp/APIRest/index1?opcion=
-->
@extends("layouts.plantilla")

<?php
$data = json_decode(file_get_contents('http://nubezar.corp/APIRest/index2.php?opcion=info_socio&id=' . $_SESSION["logged_user_id"]), true);
if (empty($data['id'])) {
    echo "El id solicitado no corresponde a ningun usuario";
    exit();
}
?>

@section("cabecera")
<div class="titulos"><h1>INFO DEL SOCIO</h1></div>
@endsection

@section("infoGeneral")
<table>
    <tr>
        <td><b>Id: </b></td>
        <td>{{$data['id']}}</td> 
    </tr>
    <tr>
        <td><b>Nombre: </b></td>
        <td>{{$data['nombre']}}</td> 
    </tr>
    <tr>
        <td><b>Apellidos: </b></td>
        <td>{{$data['apellidos']}}</td> 
    </tr>
</table>
@endsection

@section("pie")
@endsection

