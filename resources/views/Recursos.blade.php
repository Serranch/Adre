@extends('template')

@section('contenido')
<h3 class="m-4">Reporte de Recursos</h3>
<div style="text-align: center" class="m-4">
        <button type="button" class="btn btn-success">Generar Reporte</button>
</div>
<div style="text-align: center" class="m-4">
    <div class="btn-group text-center"  role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-light mx-2">Semanal</button>
        <button type="button" class="btn btn-light">Mensual</button>
        <button type="button" class="btn btn-light mx-2">Anual</button>
    </div>
</div>
<div class="table-responsive px-5">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Reporte</th>
                <th scope="col">Material</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha de reporte</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Tipo de producto</th>
                <th scope="col">Funciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>
                    <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-warning">Generar PDF</button>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-warning">Generar PDF</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-warning">Generar PDF</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@stop