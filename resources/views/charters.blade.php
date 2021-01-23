@extends("layouts.plantilla")
<?php
$url = 'http://nubezar.corp/APIRest/_Charters/?opcion=getAllCharters';
$charters = json_decode(file_get_contents($url), true);
if (empty($charters[1]['id'])) {
    echo "Err recuperar json";
    exit();
}
?>
@section("cabecera")
<div class="titulos"><h1>ACTAS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
<div class="subtitulos"><h4>INFORMACIÓN SOBRE ACTAS</h4></div>

<?php
echo $charters[1]['id'];
echo $charters[1]['organo'];
?>
<br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Organo</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
  

    <tr>
        <th scope="row">{{$charters[0]['id']}}</th>
        <td>{{$charters[0]["organo"]}}</td>
        <td>{{$charters[0]["organo"]}}</td>
        <td>{{$charters[0]["fecha"]}}</td>
        <td>.</td>
    </tr>
    <tr>
        <th scope="row">{{$charters[1]['id']}}</th>
        <td>{{$charters[1]["organo"]}}</td>
        <td>{{$charters[1]["organo"]}}</td>
        <td>{{$charters[1]["fecha"]}}</td>
        <td>.</td>
    </tr>
  </tbody>
</table>
</div>
@endsection

@section("pie")
@endsection