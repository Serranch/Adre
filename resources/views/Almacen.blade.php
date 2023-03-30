@extends('template')

@section('contenido')

@if (session()->has('Eliminado'))
{!! "<script>
    Swal.fire(
        'Correcto!',
        'Producto Eliminado!',
        'success'
    )
</script>" !!}
@endif

@if (session('edicion'))
<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        text: 'EL producto {{session('edicion')['data']}} ha sido Actualizado',
        showConfirmButton: false,
        timer: 1500
    })
</script>

@endif

<div class="text-center">

    <h3 class="titulo">Productos</h3>

</div>
<div style="text-align: center" class="m-4">
    <a type="button" class="btn btn-success" href="AltaProducto">
        Agregar Producto
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
            @include('ModalEliminarProducto')
            @include('ModalEditarProducto')
            <tr>
                <th scope="row">{{$consulta->id_recursos}}</th>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->cantidad}}</td>
                <td>${{$consulta->precio}}</td>
                <td>{{$consulta->fecha_ingreso}}</td>
                <td>{{$consulta->id_almacen}}</td>
                <td>
                    <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
                        <a type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->id_recursos}}">
                            <i class="bi bi-pencil"></i>Editar
                        </a>
                        <a type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->id_recursos}}">
                            <i class="bi bi-trash3"></i>eliminar
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@stop