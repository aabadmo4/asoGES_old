@extends("layouts.plantilla")
<?php
$json = file_get_contents("http://nubezar.corp/APIRest/_orders/?primary_order=getOrders");
$arreglo = json_decode($json, "false");
?>
@section("cabecera")
<div class="titulos"><h1>ORDENES PRIMARIAS</h1></div>
@endsection

@section("infoGeneral")

<div class="contenido">
    <div class="subtitulos"><h4>INFORMACIÓN OTS</h4></div>

    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Subtipo</th>
                <th scope="col">Estado</th>
                <th scope="col">Propietario</th>
                <th scope="col">Fecha</th>
                <th scope="col1"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $modal_bot = '';
            ?>
            <!-- Modal -->

            <?php
            foreach ($arreglo as $post) {
                echo "<tr><td>" . $post['id'] . "</td><td>" . $post['type_name'] . "</td><td>".$post["subtype_name"]."</td><td>" . $post['status_name'] . "</td><td><a href='/a' data-toggle='tooltip' data-placement='top' title='Hacer click para ampliar la información del usuario.'>" . $post['owner'] . "</a></td><td>" . $post['date'] . "</td>";
                //echo "<td>" . $modal_bot . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </tbody>
    </table>
    
</div>
<script>

</script>
@endsection

@section("pie")
@endsection