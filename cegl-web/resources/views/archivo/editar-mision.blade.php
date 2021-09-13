<!-- Agregar Modal -->
<div class="modal fade" id="editarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#F2F2F2 !important;">
        <!--Titulo-->
        <h5 class="modal-title" id="exampleModalLongTitle">
            Editar Mision y Vision
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('editarMision')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!--Cuerpo-->
          <div class="form-group required  text-center">
            <p>Complete el siguiente Formularios.</p>
            <p>Titulo: </p>
            <textarea type="text" name="txttituloedit" id="txttituloedit" cols="30" rows="8"></textarea>
            <p></p>
            <p>Contenido:</p>
            <textarea name="txttextoedit" id="txttextoedit" cols="30" rows="8"></textarea>
          </div>
          <!--id-->
          <input type="hidden" name="mtxtidedit" id="mtxtidedit">
          <!--Botones-->
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
              <i class='fas fa-exclamation-triangle'></i>
              Guardar
            </button>
            <a href="" class="btn btn-danger" data-dismiss="modal">
              <i class='fa fa-times'></i>
              Cancelar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
