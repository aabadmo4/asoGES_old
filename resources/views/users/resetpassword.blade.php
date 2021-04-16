@extends("layouts.plantilla_non_session")
@section("cabecera")
<div class="titulos"><h1>ESTABLECER NUEVA CONTRASEÑA</h1></div>
@endsection

@section("infoGeneral")

<div class="contenido">
    <div class="subtitulos"><h4>RESET PWD</h4></div>
    <form action="/resetpassword/setNewPassword/conf/" method="get">
        <label>Nueva Contraseña*</label>
        <input type="password" name="txtnewpassword1" required>
        <label>Repite Nueva Contraseña*</label>
        <input type="password" name="txtnewpassword2" required>
        <input type="text" name="user_id" value="{{$data["user_id"]}}" readonly hidden>
        <input type="text" name="pwd_token" value="{{$data["pwd_token"]}}" readonly hidden>
        <input type="submit" >
    </form>
</div>


@endsection

@section("pie")
@endsection
