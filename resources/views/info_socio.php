<!-- 
consumiendo webservive apirest nubezar http://nubezar.corp/APIRest/index1?opcion=
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php ;
        $data = json_decode(file_get_contents('http://nubezar.corp/APIRest/index2.php?opcion=info_socio&id='.$_GET["id"]), true );
        echo $data['nombre'];
        ?>
    </body>
</html>
