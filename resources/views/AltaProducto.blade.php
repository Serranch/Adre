@extends('template')

@section('contenido')
<h3 class="m-4">Alta Productos</h3>
<div class="mx-5">
    <form>
      @csrf
    <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
        <!-- Submit button -->
        <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary btn-block mb-4" >Guardar</button>
        </div>
        
    </form>
</div>
@stop