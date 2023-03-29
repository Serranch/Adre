<!-- Modal -->
<div class="modal fade" id="ModalActualizar{{$consulta->id_recursos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title fs-5" id="staticBackdropLabel">Editar Producto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="card-body text-center">
                    <form method="post" action="{{route('producto.update',$consulta->id_recursos)}}">
                        @csrf
                        {!!method_field('PUT')!!}
                        <div class="row " >
                            <div class="text-center">
                            <label >Nombre</label>
                                <div class="form-floating mb-3">
                                    
                                    <input type="text" name="txtNombre" class="form-control" placeholder="nombre" id="floatingInput">
                                    <label for="floatingInput">{{$consulta->nombre}}</label>
                                    <p class="text-warning fst-italic">{{ $errors->first('txtNombre') }}</p>
                                </div>
                                <label >Almacen</label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtAlmacen" class="form-control" placeholder="almacen" id="floatingInput">
                                    <label for="floatingInput">{{$consulta->id_almacen}}</label>
                                    <p class="text-warning fst-italic">{{ $errors->first('txtAlmacen') }}</p>
                                </div>
                                <label >Cantidad</label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtCantidad" class="form-control" placeholder="Cantidad" id="floatingInput">
                                    <label for="floatingInput">{{$consulta->cantidad}}</label>
                                    <p class="text-warning fst-italic">{{ $errors->first('txtCantidad') }}</p>
                                </div>
                                <label >Precio</label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtPrecio" class="form-control" placeholder="Precio" id="floatingInput">
                                    <label for="floatingInput">{{$consulta->precio}}</label>
                                    <p class="text-warning fst-italic">{{ $errors->first('txtPrecio') }}</p>
                                </div>
                            </div>

                        </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>