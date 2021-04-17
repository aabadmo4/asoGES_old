@extends("layouts.plantilla")
@section("cabecera")
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CONSULTAR SOCIO</h4></div>
    <table class="tablafoto">
        <tr>
            <td><img src="http://nubezar.corp/APIRest/img/avatar.png" alt="" width="200px" height="200px" /></td>
        </tr>
    </table>
    <form >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$data['name']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Apellidos</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{$data['surname']}}" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$data['email']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Teléfono</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{$data['phone']}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Dirección</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{$data['address']}}" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Municipio</label>
                <input type="text" class="form-control" id="inputCity" value="{{$data['city']}}" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" class="form-control" readonly>
                    <option selected>{{$data["state"]}}</option>
                    <option>A Coruña</option>
                    <option>Álava</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">CP</label>
                <input type="text" class="form-control" id="inputZip" value="{{$data["name"]}}"readonly>
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
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <hr style="border:15px; border-color:grey;">
    <div class="">
        <div class="subtitulos"><h5>CONFIGURACIÓN DEL USUARIO</h5></div>
        <div class="form-row">
            <form>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Usuario</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$data['user_id']}}" readonly>
                </div>
                <div><p>Restablecer Contraseña</p></div>
                <button type="submit" class="btn btn-primary">Restablecer</button>
            </form>
        </div>
        <hr style="border:15px; border-color:grey;">
        <div class="user_stadistics">
            <div class="subtitulos"><h5>PARTNER STADISTICS</h5></div>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">KPI</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Documentos:</th>
                        <td>[Sin información]</td>
                    </tr>
                    <tr>
                        <th scope="row">Notificaciones:</th>
                        <td>[Sin información]</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection

    @section("pie")
    @endsection

