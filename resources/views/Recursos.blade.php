@extends('template')

@section('contenido')
<div class="text-center">

    <h3 class="titulo">Reporte de Recursos</h3>
  
  </div>

<div style="text-align: center" class="m-4">
    <a href="AltaRecurso"><button type="button" class="btn btn-success">crear Reporte</button></a>
        
</div>
<div style="text-align: center" class="m-4">
    <div class="btn-group text-center"  role="group" aria-label="Basic mixed styles example">
    <a type="button" class="btn btn-light mx-2" href="{{route('Recursos.semana')}}">Semanal</a>
        <a type="button" class="btn btn-light mx-2" href="{{route('Recursos.mes')}}">Mensual</a>
        <a type="button" class="btn btn-light mx-2" href="{{route('Recursos.año')}}">Anual</a>
    </div>
</div>
<div class="text-center" >
    <a type="button" class="btn btn-warning mb-1" href="{{route('Recursos.pdf')}}">Export to PDF</a>
</div>
<div class="table-responsive px-5">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre responsable</th>
                <th scope="col">cargo</th>
                <th scope="col">fecha de reporte</th>
                <th scope="col">nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultReportesR as $consulta)
            <tr>
                <th scope="row">{{$consulta->id_reporteR}}</th>
                <td>{{$consulta->nombre_responsable}}</td>
                <td>{{$consulta->cargo}}</td>
                <td>{{$consulta->fecha_reporte}}</td>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->descripcion}}</td>
                <td>{{$consulta->cantidad}}</td>
                
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@stop