@extends("layouts.plantilla_non_session")
@section("cabecera")
<div class="titulos"><h1>AsoGES - Sistema de Gestión de Asociaciones</h1></div>
@endsection

@section("infoGeneral")
<div class="subtitulos"><h4>ERROR</h4></div>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error:</strong> {{$data["error"]}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection

@section("pie")
@endsection
