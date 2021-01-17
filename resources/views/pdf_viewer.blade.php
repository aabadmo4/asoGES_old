<!-- 
consumiendo webservive apirest nubezar http://nubezar.corp/APIRest/index1?opcion=
-->
@extends("layouts.plantilla")
<?php
$url = 'http://nubezar.corp/APIRest/?opcion=getDocument&id=2';
$data = json_decode(file_get_contents($url), true);
if (empty($data['docname'])) {
    echo "No se ha podido cargar el doc";
    exit();
}
?>
@section("cabecera")
<div class="titulos"><h1>DOCUMENTOS</h1></div>

@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>VISOR PDF</h4></div>

    <div class="documentto">
        <table>
            <tr>
                <td>
                    <h5>DATOS DEL DOCUMENTO</h5>
                    <table>
                        <tr>
                            <td><b>Nombre: </b></td>
                            <td>{{$data["name"]}}</td>
                        </tr>
                        <tr>
                            <td><b>Fecha subida: </b></td>
                            <td>{{$data["upload_date"]}}</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <h5>DATOS DEL PROPIETARIO</h5> 
                    <table>
                        <tr>
                            <td><b>Nombre: </b></td>
                            <td>{{$data["owner_surname"]}}</td>
                        </tr>
                        <tr>
                            <td><b>Apellidos: </b></td>
                            <td>{{$data["owner_surname"]}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>


    <embed src="/storage/docs/{{$_SESSION["logged_user"]}}/{{$data["docname"]}}" type="application/pdf" width="100%" height="600px" />
</div>
@endsection

@section("pie")
@endsection

