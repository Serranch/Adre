<!-- Modal -->
    <div class="modal fade" id="ModalEliminar{{$consulta->id_recursos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="card-body">
                        <h5 class="text-center">{{$consulta->nombre}}</h5>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{route('producto.destroy',$consulta->id_recursos) }}" method="POST">
                        @csrf
                        {!!method_field('delete')!!}
                        <button type="submit" class="btn btn-danger mx-2">Borrar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>