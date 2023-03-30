@extends('template')

@section('contenido')
@if (session('exito'))
<div class="alert alert-success alert-dismissible fade show text-center mt-3 " role="alert">
  Reporte registrado correctamente!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div style="background-color: black">

  <h3 class="m-4">Alta reporte de Devolucion</h3>

</div>
<form action="AltaReporteC" method="post" class="mx-4">
    @csrf
    <div class="form-floating mb-3">
      <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" id="floatingInput" required>
      <label for="floatingInput">Nombre</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtDatos" class="form-control" placeholder="Datos" id="floatingInput" required>
      <label for="floatingInput">Cargo</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtDatos') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="email" name="txtcorreo" class="form-control" placeholder="correo" id="floatingInput" required>
      <label for="floatingInput">correo</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtcorreo') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtCantidad" class="form-control" placeholder="Cantidad" id="floatingInput" required>
      <label for="floatingInput">Cantidad</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtCantidad') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtPrecio" class="form-control" placeholder="Precio" id="floatingInput" required>
      <label for="floatingInput">Precio de compra</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtPrecio') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtMaquina" class="form-control" placeholder="Maquina" id="floatingInput" required>
      <label for="floatingInput">Maquina</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtMaquina') }}</p>
    </div>
    <div class="form-floating mb-3">
      <textarea class="form-control" name="txtDescripcion" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
      <label for="floatingTextarea2">Descripcion</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtDescripcion') }}</p>
    </div>
    <!-- Submit button -->
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
    </div>
@stop