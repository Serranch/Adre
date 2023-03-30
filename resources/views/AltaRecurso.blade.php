@extends('template')

@section('contenido')

@if (session('exito'))
<div class="alert alert-success alert-dismissible fade show text-center mt-3 " role="alert">
  Reporte registrado correctamente!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="text-center">

  <h3 class="titulo">Alta Reporte de Recursos</h3>

</div>

<div class="mx-5">
  <form action="AltaReporteR" method="post">
    @csrf
    <div class="form-floating mb-3">
      <input type="text" name="txtNombreR" class="form-control" placeholder="Nombre" id="floatingInput" required>
      <label for="floatingInput">Nombre Responable</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtDatos" class="form-control" placeholder="Datos" id="floatingInput" required>
      <label for="floatingInput">Cargo</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtDatos') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="email" name="txtcorreo" class="form-control" placeholder="correo" id="floatingInput" required>
      <label for="floatingInput">Correo</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtcorreo') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" id="floatingInput" required>
      <label for="floatingInput"> producto</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="txtCantidad" class="form-control" placeholder="Cantidad" id="floatingInput" required>
      <label for="floatingInput">Cantidad</label>
      <p class="text-warning fst-italic">{{ $errors->first('txtCantidad') }}</p>
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

  </form>


</div>
@stop