@extends("layouts.plantilla")

@section("cabecera")
<div class="titulos"><h1>SOCIOS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>ALTA NUEVO SOCIO</h4></div>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputSurname">Apellidos</label>
                <input type="text" class="form-control" id="inputSurname" placeholder="Apellidos">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Usuario*</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Dirección</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Municipio</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Municipio">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" class="form-control">
                    <option selected>Elegir...</option>
                    <option>A Coruña</option>
                    <option>Álava</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">CP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Aceptación RGPD. (Anexar doc.)
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>

@endsection

@section("pie")
@endsection