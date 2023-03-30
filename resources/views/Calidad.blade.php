@extends('template')

@section('contenido')

<div class="text-center">

    <h3 class="titulo">Reporte de Calidad</h3>

</div>

<div style="text-align: center" class="m-4">
    <a class="nav-link" href="AltaCalidad">
        <button type="button" class="btn btn-success">Agregar Reporte</button>
    </a>
</div>
<div style="text-align: center" class="m-4">
    <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
        <a type="button" class="btn btn-light mx-2" href="{{route('Calidad.semana')}}">Semanal</a>
        <a type="button" class="btn btn-light mx-2" href="{{route('Calidad.mes')}}">Mensual</a>
        <a type="button" class="btn btn-light mx-2" href="{{route('Calidad.año')}}">Anual</a>
    </div>
</div>
<div class="text-center" >
    <a type="button" class="btn btn-warning mb-1" href="{{route('Calidad.pdf')}}">Export to PDF</a>
</div>
<div class="table-responsive px-5">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">Cargo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">precio de compra</th>
                <th scope="col">Fecha de reporte</th>
                <th scope="col">Descripcion</th>
                <th scope="col">maquina de defectos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultReportesC as $consulta)
            <tr>
                <th scope="row">{{$consulta->id_reporteC}}</th>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->cargo}}</td>
                <td>{{$consulta->cantidad}}</td>
                <td>{{$consulta->precio_compra}}</td>
                <td>{{$consulta->fecha_reporte}}</td>
                <td>{{$consulta->descripcion}}</td>
                <td>{{$consulta->maquina}}</td>
                
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@stop