@if(isset($_SESSION["logged_user"]))
<!DOCTYPE html>
<html lang="es">
    <head>
        $_COOKIE["session"]=true;
        <script type="text/javascript">
            window.location = "http://nubezar.corp:8000";
        </script>
    </head>
    <body>

    </body>
</html>
@endif