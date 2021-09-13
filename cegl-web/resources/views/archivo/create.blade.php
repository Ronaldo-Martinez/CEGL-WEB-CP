<!-- Agregar Modal -->
<div class="modal fade" id="agregarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header" style="background-color:#F2F2F2 !important;">
    <h5 class="modal-title" id="exampleModalLongTitle">
     <i class="fas fw fa-plus-circle"></i>
     {{ __('Nuevo Archivo') }}
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <form action="{{route('archivo.store')}}" method="post" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
      <label for="">Registrar: </label>
      <div class="custom-control custom-switch">
       <input type="checkbox" class="custom-control-input" id="customSwitch1" name="customSwitch1" value="0"
        onclick="cambioCampoModal()" autofocus>
       <label class="custom-control-label" for="customSwitch1">Con url</label>
      </div>
     </div>
     <div class="form-group required">
      <label for="tipo_id" class="control-label">Tipo de archivo:</label>
      <select class="form-control" name="tipo_id" id="tipo_id" required>
       <option value="" selected="true" disabled="disabled">Selecciona el tipo</option>
       @foreach ($tipos as $tipo)
       <option value="{{$tipo->id}}">{{$tipo->nombre_tipo}}</option>
       @endforeach
      </select>
     </div>
     <div class="form-group required" id="div_archivo">
      <label for="archivo" class="control-label">Archivo:</label>
      <input type="file" name="archivo" id="archivo" accept=".mp3, .mpeg"
       class="form-control{{ $errors->has('archivo') ? ' is-invalid' : '' }}" placeholder="Ingrese el archivo"
       value="{{ old('archivo') }}" required>
      @if($errors->has('archivo'))
      <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('archivo') }}</strong>
      </span>
      @endif
     </div>
     <div class="form-group required" id="div_url_archivo" style="display: none">
      <label for="url_archivo" class="control-label">Url del archivo:</label>
      <input type="url" name="url_archivo" id="url_archivo" pattern=".+\.mp3"
       title="Sólo se permiten URLs .com bien formadas"
       class="form-control{{ $errors->has('url_archivo') ? ' is-invalid' : '' }}"
       placeholder="Por ejemplo: https://audionautix.com/Music/SittingBull.mp3" value="{{ old('url_archivo') }}">
      @if($errors->has('url_archivo'))
      <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('url_archivo') }}</strong>
      </span>
      @endif
     </div>
     <div class="form-group required" id="div_nombre_archivo" style="display: none">
      <label for="nombre_archivo" class="control-label">Nombre del archivo:</label>
      <input type="text" name="nombre_archivo" id="nombre_archivo" placeholder="Ingrese el nombre"
       class="form-control{{ $errors->has('nombre_archivo') ? ' is-invalid' : '' }}"
       value="{{ old('nombre_archivo') }}">
      @if($errors->has('nombre_archivo'))
      <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('nombre_archivo') }}</strong>
      </span>
      @endif
     </div>
     <div class="form-group required">
        <input type="hidden" name="user_id" id="user_id" required value="{{Auth::user()->id}}">
    </div>
     <div class="modal-footer d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">
       <i class='fas fa-check-circle'></i>
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
