@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>MI PERFIL</h1></div>

@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>MIS DATOS PERSONALES</h4></div>
    <table class="tablafoto">
        <tr>
            <td><img src="http://nubezar.corp/APIRest/img/avatar.png" alt="" width="30%" height="30%" /></td>
        </tr>
    </table>
    <form >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="inputEmail" id="inputName" placeholder="Email" value="{{$data['nombre']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSurname">Apellidos</label>
                <input type="text" class="form-control" id="inputSurname" name ="inputSurname" placeholder="Password" value="{{$data['apellidos']}}" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail"  name="inputEmail" placeholder="Email" value="{{$data['email']}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputUser">Usuario</label>
                <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Password" value="{{$data['email']}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Apartment, studio, or floor" value="{{$data['direccion']}}" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Municipio</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" name="inputState" class="form-control" readonly>
                    <option selected>Elegir...</option>
                    <option>A Coruña</option>
                    <option>Álava</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">CP</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip" value="{{$data["cp"]}}"readonly>
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
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <hr style="border:15px; border-color:grey;">
    <div class="user_stadistics">
        <div class="subtitulos"><h5>ESTADÍSTICAS DE USUARIOS</h5></div>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">KPI</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Total de órdenes:</th>
                    <td>[Sin información]</td>
                </tr>
                <tr>
                    <th scope="row">Órdenes abiertas:</th>
                    <td>[Sin información]</td>
                </tr>
                <tr>
                    <th scope="row">Documentos:</th>
                    <td>[Sin información]</td>
                </tr>
            </tbody>
        </table>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    <form method="POST" action="{{route('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="archivo"><b>Archivo: </b></label><br>
        <input type="file" name="archivo" required>
        <input class="btn btn-success" type="submit" value="Enviar" >
    </form>
    <div class="subtitulos"><h4>MIS DOCUMENTOS</h4></div>
    <embed src="/storage/docs/{{$_SESSION["logged_user"]}}/contrato_alta_socio.pdf" type="application/pdf" width="100%" height="600px" />
</div>
@endsection

@section("pie")
@endsection

