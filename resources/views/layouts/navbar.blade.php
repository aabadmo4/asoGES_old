<?php
use App\Models;
$data_charters= Models\Charters::countCharters();
$data_docs= Models\Charters::countCharters();
?>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{env('ASOGES_URL')}}">asoGES </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{env('ASOGES_URL')}}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Socios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_SOCIOS_CREATE')}}">Crear</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_PARTNERS')}}">Consultar socios<kbd id="countpartners"></kbd></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_CHARTERS')}}/create">Crear</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_ACTAS')}}">Registro<kbd>{{$data_charters["charters"]}}</kbd></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Órdenes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('ASOGES_URL')}}primaryOrders">Primary orders<kbd id="countorders"></kbd></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Docs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_CHARTERS')}}/create">Subir</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_ACTAS')}}">Registro<kbd>{{$data_docs["charters"]}}</kbd></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{env('NAVBAR_LINK_NOTICIAS')}}">Noticias</a>
                </li>
                <li class="nav-item">

                    @if (isset($_SESSION["logged_user"]) && !empty($_SESSION["logged_user"])) 
                        <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Mi Perfil
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <li><a class='dropdown-item' href='{{env('NAVBAR_LINK_MIPERFIL')}}'>Editar perfil</a></li>
                        <li><hr class='dropdown-divider'></li>
                    <li><a class='dropdown-item' href='{{env('NAVBAR_LINK_MIPERFIL_CONFIG')}}'>Configuración</a></li>
                        <li><hr class='dropdown-divider'></li>
                        <li><a class='dropdown-item' href='http://nubezar.corp:8000/logout/'>Cerrar sesión</a></li>
                    </ul>
                </li>
                    @else 
                        <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Mi Perfil</a>
                    @endif        
                </li>
            </ul>
            <label><b>{{env('ORGANIZACION_CLIENTE')}}</b></label>
            <button type="button" class="btn btn-primary">
                @ {{$_SESSION["logged_user"]}} <a href="#" onclick="javascript:recargar();"><span class="badge bg-secondary"><div id="recargado"></div></span></a>
                <span class="visually-hidden"></span>
            </button>
            <form class="d-flex" action="http://nubezar.corp:8000/buscar" method="get">
                <input class="form-control me-2" type="search" placeholder="Término a buscar" aria-label="Término a buscar" name="termino">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<script>
    var id = '<?php echo $_SESSION["logged_user_id"]; ?>';
    var one="http://nubezar.corp/APIRest/notif3.php?user_id=";
    var joined = one + id ;
        
    $.ajax({
        url     : joined,
        type    : "get",
        data    : "send",
        success : (function (data) {
                      console.log(data);
                      $('#recargado').append(data);
        })
    });
</script>
        
<script>
    $.ajax({
        url     : "http://nubezar.corp/APIRest/count_orders",
        type    : "get",
        data    : "send",
        success : (function (data) {
            console.log(data);
            $('#countorders').append(data);
        })
    });
</script>
<script>
    $.ajax({
        url     : "http://nubezar.corp/APIRest/count_partners",
        type    : "get",
        data    : "send",
        success : (function (data) {
            console.log(data);
            $('#countpartners').append(data);
        })
    });
</script>