<!-- Agregar Modal -->
<div class="modal fade" id="eliminarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#F2F2F2 !important;">
        <!--Titulo-->
        <h5 class="modal-title" id="exampleModalLongTitle">
            Eliminar Archivo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('eliminarDescarga')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!--Cuerpo-->
          <div class="form-group required  text-center">
            <p>¿Esta seguro que desea eliminar el siguiente archivo?</p>
            <h4 id="txttituloeliminar" name="txttituloeliminar"></h4>
          </div>
          <!--id-->
          <input type="hidden" name="mtxtideliminar" id="mtxtideliminar">
          <!--Botones-->
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-danger">
              <i class='fas fa-exclamation-triangle'></i>
              Eliminar
            </button>
            <a href="" class="btn btn-primary" data-dismiss="modal">
              <i class='fa fa-times'></i>
              Cancelar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
