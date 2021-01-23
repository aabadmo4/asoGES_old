@extends("layouts.treeView_template")
@section("cabecera")
<div class="titulos"><h1>ORDENES PRIMARIAS</h1></div>
@endsection

@section("infoGeneral")

<div class="contenido">
    <div class="subtitulos"><h4>INFORMACIÓN SOBRE LA ORDEN #{{$_GET["id"]}}</h4></div>

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
            <tr>
                <td>{{$_GET["id"]}}</td>
                <td>{{$data["type_name"]}}</td>
                <td>{{$data["subtype_name"]}}</td>
                <td>{{$data["status_name"]}}</td>
                <td>{{$data["owner"]}}</td>
                <td>{{$data["date"]}}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
   <b> ÓRDENES HIJAS Y PROCESOS </b>
    <div class="container">
        
        <div id="tree"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script>
        $('#tree').tree({
            dataSource: [{
                    text: 'Gestion usuarios: Creación:  <img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" /> ',
                    children: [{
                            text: 'Enviar notificacion a admin y validar órden:<img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />',
                            children: [
                                {text: 'Envio de correo electrónico a admin.<img src="http://nubezar.corp/APIRest/img/succes.png" alt="" width="15px" height="15px" />'},
                                {text: 'Esperando accion admin<img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />'},
                                {text: 'Recibida accion admin<img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />'},
                            ]
                        },{
                        text: 'Envio correo electrónico bienvenida a usuario creado<img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />',
                            children: [
                                {text: 'Correo electrónico enviado correctamrente.<img src="http://nubezar.corp/APIRest/img/alert.png" alt="" width="20px" height="15px" />'}
                            ]
                        }
                    ]

                }
            ],
            width: 500,
            uiLibrary: 'bootstrap4',
            border: true
        });
    </script>

</div>

@endsection

@section("pie")
@endsection