@extends('template')

@section('contenido')

<div style="background-color: black">

    <h3 class="m-4">Productos</h3>

</div>
<div style="text-align: center" class="m-4">
    <a class="nav-link" href="AltaProducto">
        <button type="button" class="btn btn-success">Agregar Producto</button>
    </a>
</div>
<div class="table-responsive px-5">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio de compra</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Almacen</th>
                <th scope="col">Funciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resultproductos as $consulta)

            <tr>
                <th scope="row">{{$consulta->id_recursos}}</th>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->cantidad}}</td>
                <td>${{$consulta->precio}}</td>
                <td>{{$consulta->fecha_ingreso}}</td>
                <td>{{$consulta->id_almacen}}</td>
                <td>
                    <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@stop