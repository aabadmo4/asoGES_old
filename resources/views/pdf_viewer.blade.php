<!-- 
consumiendo webservive apirest nubezar http://nubezar.corp/APIRest/index1?opcion=
-->
@extends("layouts.plantilla")

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
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Fecha subida: </b></td>
                            <td></td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Apellidos: </b></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>


    <embed src="http://nubezar.corp/asogesAPI/pdfGenerate/?partner_id=1" type="application/pdf" width="100%" height="600px" />
</div>
@endsection

@section("pie")
@endsection

