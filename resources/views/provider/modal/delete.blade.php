<div class="modal fade-modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{ $provider -> id }}">

        <form action="{{ route('ProviderDestroy' , $provider->id) }}" method="post">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">x</span>
                        </button>
                        <h4 class="modal-title">Eliminar Proveedor</h4>
                    </div>
                    <div class="modal-body">
                        <p>¿Seguro que desea eliminar?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
