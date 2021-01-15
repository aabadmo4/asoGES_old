@if(isset($_GET["txtuser"]))
    @if(isset($_GET["txtpassword"]))
    <?php
    $_SESSION["logged_user"]=$_GET["txtuser"];
    $_COOKIE["session"]=true;
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            
            <script type="text/javascript">
                window.location = "http://nubezar.corp:8000";
            </script>
        </head>
        <body>
            
        </body>
    </html>
    @endif
@else
login err
@endif