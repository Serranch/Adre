@extends('template')

@section('contenido')

@if (session('exito'))
<div class="alert alert-success alert-dismissible fade show text-center mt-3 " role="alert">
  Producto registrado correctamente!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div style="background-color: black">

  <h3 class="m-4">Alta Productos</h3>

</div>

<div class="mx-5">
  <form action="AltaProducto" method="post">
    @csrf
    <div class="form-floating mb-3">
      <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" id="floatingInput">
      <label for="floatingInput">Nombre</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtAlmacen" class="form-control" placeholder="almacen" id="floatingInput">
      <label for="floatingInput">almacen</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtAlmacen') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtCantidad" class="form-control" placeholder="Cantidad" id="floatingInput">
      <label for="floatingInput">Cantidad</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtCantidad') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtPrecio" class="form-control" placeholder="Precio" id="floatingInput">
      <label for="floatingInput">Precio de compra</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtPrecio') }}</p>
    </div>
    <!-- Submit button -->
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
    </div>
  </form>
</div>
@stop