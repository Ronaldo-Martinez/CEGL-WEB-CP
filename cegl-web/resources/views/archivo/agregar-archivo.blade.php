<!-- Agregar Modal -->
<div class="modal fade" id="agregararchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#F2F2F2 !important;">
        <!--Titulo-->
        <h5 class="modal-title" id="exampleModalLongTitle">
            Agregar Archivo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('guardarDescarga')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!--Cuerpo-->
          <div class="form-group required  text-center">
            <p>Complete el siguiente Formularios.</p>
            <p>Titulo: </p>
            <input type="text" name="archivoTitulo" id="archivoTitulo" required>
            <p></p>
            <div class="form-group required">
              <label for="archivoTipo" class="control-label">Tipo de archivo:</label>
              <select class="form-control" name="archivoTipo" id="archivoTipo" required>
               <option value="" selected="true" disabled="disabled">Selecciona el tipo</option>
               <option value="1">Basica</option>
               <option value="2">Bachillerato</option>
               <option value="3">Educame</option>
               <option value="4">Nuevo Ingreso</option>
                </select>
            </div>
            <p></p>
            <p>Archivo: </p>
            <input type="file" name="archivo" id="archivo">
            <p></p>
            <p>Descripción:</p>
            <textarea type="text" name="archivoDescripcion" id="archivoDescripcion" cols="30" rows="3"></textarea>
            <p></p>
            <p></p>
          </div>
          <!--id-->
          <input type="hidden" name="mtxtid" id="mtxtid">
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
