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
  <table >
      <th> {{-- tabla 1 --}}
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
                      
                          <button type="button" class="btn btn-danger">Borrar</button>
                      </div>
                  </td>
              </tr>
          </tbody>
        </table>
        <button type="button" class="btn btn-success">Agregar Producto</button>

      </th>
    

      <th> {{-- tabla 2 --}}
        <div class="mx-5">
          <div class="form-floating mb-3">
            <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" id="floatingInput">
            <label for="floatingInput">Nombre del reporte</label>
            <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
          </div>
        <br>
        <br>
        <br>
       
        <button type="button" class="btn btn-success">generar reporte</button>
        <div>
        </th>
  </table>
   
      

  </form>


</div>
</div>
@stop