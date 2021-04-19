@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>MI PERFIL</h1></div>

@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>CAMBIAR CONTRASEÑA <a href="http://nubezar.corp/asogesAPI/pdfGenerate/?partner_id={{$_SESSION["logged_user_id"]}}">Print</a></h4></div>
    <form action="" method="get">
        <table>
            <tr>
                <td><label>Contraseña Actual*</label></td>
                <td><input type="password" name="txtnewpassword" required></td>
            </tr>
            <tr>
                <td><label>Nueva Contraseña*</label></td>
                <td><input type="password" name="txtnewpassword1" required></td>
            </tr>
            <tr>
                <td><label>Repite Nueva Contraseña*</label></td>
                <td><input type="password" name="txtnewpassword2" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" ></td>
            </tr>
        </table>

        <input type="text" name="user_id" value="" readonly hidden>
        <input type="text" name="pwd_token" value="" readonly hidden>
        
    </form>
</div>
@endsection

@section("pie")
@endsection

