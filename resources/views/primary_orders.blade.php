@extends("layouts.plantilla")
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
                echo "<tr><td>" . $post['id'] . "</td><td>" . $post['type_name'] . "</td><td>".$post["subtype_name"]."</td><td><a href='http://nubezar.corp:8000/primaryOrders/getOrderInfoById?id=".$post['id']."'>" . $post['status_name'] . '<img src="/storage/'.$post['status_ico'].'" alt="" width="20px" height="15px"/>'."</a></td><td><a href='/a' data-toggle='tooltip' data-placement='top' title='Hacer click para ampliar la información del usuario.'>" . $post['owner'] . "</a></td><td>" . $post['date'] . "</td>";
                //echo "<td>" . $modal_bot . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </tbody>
    </table>
    >
</div>
<script>

</script>
@endsection

@section("pie")
@endsection