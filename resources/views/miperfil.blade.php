<!-- 
consumiendo webservive apirest nubezar http://nubezar.corp/APIRest/index1?opcion=
-->
@extends("layouts.plantilla")
<?php
$url = 'http://nubezar.corp/APIRest/?opcion=getPartner&id=' . $_SESSION["logged_user_id"];
$data = json_decode(file_get_contents($url), true);
if (empty($data['id'])) {
    echo "El id solicitado no corresponde a ningun socio";
    exit();
}
?>
@section("cabecera")
<div class="titulos"><h1>MI PERFIL</h1></div>

@endsection

@section("infoGeneral")
<div class="contenido">
    
    <table class="tablafoto">
        <tr>
            <td><img src="http://nubezar.corp/APIRest/img/avatar.png" alt="" width="30%" height="30%" /></td>
        </tr>
    </table>
    <form >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$data['nombre']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Apellidos</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{$data['apellidos']}}" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$data['email']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Usuario</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{$data['email']}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Dirección</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{$data['direccion']}}" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Municipio</label>
                <input type="text" class="form-control" id="inputCity" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" class="form-control" readonly>
                    <option selected>Elegir...</option>
                    <option>A Coruña</option>
                    <option>Álava</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">CP</label>
                <input type="text" class="form-control" id="inputZip" value="{{$data["cp"]}}"readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
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

