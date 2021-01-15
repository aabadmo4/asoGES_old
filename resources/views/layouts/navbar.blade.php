
<?php
if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
    if (isset($_SESSION["notif_sin_leer"])) {
        if ($_SESSION["notif_sin_leer"] < 1) {
            $_SESSION["notif_sin_leer"] = 1;
        } else {
            $_SESSION["notif_sin_leer"]++;
        }
    } else {
        $_SESSION["notif_sin_leer"] = 1;
    }
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
                        <li><a class="dropdown-item" href="http://nubezar.corp:8000/socios/crear/">Crear</a></li>
                        <li><a class="dropdown-item" href="#">Borrar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Info user</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Crear</a></li>
                        <li><a class="dropdown-item" href="#">Borrar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Registro</a></li>
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
                        <li><a class='dropdown-item' href='".env('NAVBAR_LINK_MIPERFIL')."'>Editar perfil</a></li>
                        <li><hr class='dropdown-divider'></li>
                        <li><a class='dropdown-item' href='#'>Configuración</a></li>
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
            <label class="{{env('ORGANIZACION_CLIENTE')}}}">ASOCIACIÓN JUVENIL ALLAGESNLP</label>
            <button type="button" class="btn btn-primary">
                @ {{$_SESSION["logged_user"]}} <a href="http://nubezar.corp:8000/miperfil"><span class="badge bg-secondary">{{$_SESSION["notif_sin_leer"]}}</span></a>
                <span class="visually-hidden"></span>
            </a>
            <form class="d-flex" action="http://nubezar.corp:8000/buscar" method="get">
                <input class="form-control me-2" type="search" placeholder="Término a buscar" aria-label="Término a buscar" name="termino">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

