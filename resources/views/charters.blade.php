@extends("layouts.plantilla")
@section("cabecera")
<div class="titulos"><h1>ACTAS</h1></div>
@endsection

@section("infoGeneral")
<div class="contenido">
    <div class="subtitulos"><h4>INFORMACIÓN SOBRE ACTAS</h4></div>

    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Organo</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($charters as $charter) 
            <tr>
                <td>{{$charter['id']}}</td>
                <td>{{$charter['id']}}</td>
                <td>{{$charter['organo']}}</td>
                <td>{{$charter['fecha']}}</td>
                <td><a href="http://nubezar.corp:8000/charters/info_charter?id={{$charter['id']}}" class="btn btn-success">X</a>
                    <a href="#" class="btn btn-warning">X</a>
                    <a href="#" class="btn btn-danger">X</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section("pie")
@endsection