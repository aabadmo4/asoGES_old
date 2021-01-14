@extends("layouts.plantilla")

@section("cabecera")
<div class="titulos"><h1>ACTAS</h1></div>
@endsection

@section("infoGeneral")
<div class="subtitulos"><h4>INFORMACIÓN SOBRE ACTAS</h4></div>


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
    <?php $longitud = count($actas); ?>
    @for($i=0; $i<$longitud; $i++){
    <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$actas[$i]}}</td>
        <td>.</td>
        <td>.</td>
    </tr>
    @endfor
    }
  </tbody>
</table>

@endsection

@section("pie")
@endsection