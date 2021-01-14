@extends("layouts.plantilla")

@section("cabecera")
<h1>Actas</h1>
@endsection

@section("infoGeneral")

INFORMACIÓN SOBRE ACTAS
<table border="1">
    <tr>
        <td>#</td>
        <td>Tipo</td>
        <td>Órgano</td>
        <td>Fecha
        <td>Ruta</td>
    </tr>
    <?php $longitud = count($actas); ?>
    @for($i=0; $i<$longitud; $i++){
    <tr>
        
        <td>{{$i}}</td>
        <td>{{$actas[$i]}}</td>
        <td>.</td>
        <td>.</td>
        <td>.</td>
    </tr>
    @endfor
    }
</table>
@endsection

@section("pie")
@endsection