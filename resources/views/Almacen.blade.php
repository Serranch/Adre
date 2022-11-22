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
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
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
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
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
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@stop