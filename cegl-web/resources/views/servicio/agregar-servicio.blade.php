<!-- Agregar Modal -->
<div class="modal fade" id="agregarservicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#F2F2F2 !important;">
        <!--Titulo-->
        <h5 class="modal-title" id="exampleModalLongTitle">
            Agregar Servicio
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('guardarServicio')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!--Cuerpo-->
          <div class="form-group required  text-center">
            <p>Complete el siguiente Formularios.</p>
            <p>Titulo: </p>
            <input type="text" name="servicioTitulo" id="servicioTitulo" required>
            <p></p>
            <p>Archivo: </p>
            <input type="file" name="servicioImagen" id="servicioImagen">
            <p></p>
            <p>Descripción:</p>
            <textarea type="text" name="servicioDescripcion" id="servicioDescripcion" cols="30" rows="3"></textarea>
            <p></p>
            <p></p>
          </div>
          <!--id-->
          <input type="hidden" name="mtxtid" id="mtxtid">
          <!--Botones-->
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
              Guardar
            </button>
            <a href="" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
