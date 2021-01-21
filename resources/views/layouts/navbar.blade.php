<?php
$url = 'http://nubezar.corp/APIRest/_Notifications/?opcion=getNotificationsNotRead&user_id=1';
$data = json_decode(file_get_contents($url), true);
if (empty($data['not_read'])) {
    echo "Error al recuperar notif no leidas";
    exit();
} else {
    $_SESSION["notif_sin_leer"] = $data['not_read'];
}
?>

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
                        <li><a class="dropdown-item" href="#">Borrar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_PARTNERS')}}">Consultar socios</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_CHARTERS')}}/create">Crear</a></li>
                        <li><a class="dropdown-item" href="#">Borrar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_ACTAS')}}">Registro</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Órdenes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('ASOGES_URL')}}primaryOrders">Primary orders</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Docs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_CHARTERS')}}/create">Subir</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{env('NAVBAR_LINK_ACTAS')}}">Registro</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{env('NAVBAR_LINK_NOTICIAS')}}">Noticias</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION["logged_user"]) && !empty($_SESSION["logged_user"])) {
                        echo "
                        <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Mi Perfil
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <li><a class='dropdown-item' href='" . env('NAVBAR_LINK_MIPERFIL') . "'>Editar perfil</a></li>
                        <li><hr class='dropdown-divider'></li>
                        <li><a class='dropdown-item' href='" . env('NAVBAR_LINK_MIPERFIL_CONFIG') . "'>Configuración</a></li>
                        <li><hr class='dropdown-divider'></li>
                        <li><a class='dropdown-item' href='http://nubezar.corp:8000/logout/'>Cerrar sesión</a></li>
                    </ul>
                </li>
                        ";
                    } else {
                        echo "<a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Mi Perfil</a>";
                    }
                    ?>         
                </li>
            </ul>
            <label><b>{{env('ORGANIZACION_CLIENTE')}}</b></label>
            <button type="button" class="btn btn-primary">
                @ {{$_SESSION["logged_user"]}} <a href="{{env('NAVBAR_LINK_MIPERFIL')}}"><span class="badge bg-secondary">{{$_SESSION["notif_sin_leer"]}}</span></a>
                <span class="visually-hidden"></span>
            </button>
            <form class="d-flex" action="http://nubezar.corp:8000/buscar" method="get">
                <input class="form-control me-2" type="search" placeholder="Término a buscar" aria-label="Término a buscar" name="termino">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

        </div>
    </div>
</nav>

