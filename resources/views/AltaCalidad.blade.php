@extends('template')

@section('contenido')
<div>
    <form>
    <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
    </form>
</div>
@stop