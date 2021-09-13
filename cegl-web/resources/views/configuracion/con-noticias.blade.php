<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @extends('layouts.app')
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    @section('content')

    @extends('configuracion.base')
    @section('cuerpo')
        @if(session('exito'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('exito') }}
        </div>
        @endif
        <div class="col-lg-12 text-center">
            <div class="row">
                <!--Agregar noticia-->
                <div class="col-12">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Noticias Registradas</h3>
                        <a type='button'  data-toggle='modal' data-target='#agregarnoticia' title='Eliminar'>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                @forelse ($noticias as $noticia)
                                <div class="col-6">
                                    <div class="card border rounded">
                                        <div class="card-body">
                                            <h2>{{$noticia->titulo}}</h2>
                                            <p class="card-text">{{$noticia->texto}}</p>
                                            <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                                            onclick='cargarDatos("{{$noticia->id}}","{{$noticia->titulo}}", "1")'>
                                                <i class='fa fa-times'></i>
                                                Editar
                                            </a>
                                            <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarnoticia' title='Eliminar'
                                            onclick='cargarDatos("{{$noticia->id}}","{{$noticia->titulo}}", "2")'>
                                                <i class='fa fa-times'></i>
                                                Eliminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p class="card-text">No se har registrado noticias.</p>
                                @endforelse
                            </div>
                            <p></p>
                            <a type='button' class="btn btn-primary" data-toggle='modal'
                                data-target='#agregarnoticia' title='Editar'>
                                    <i class='fa fa-times'></i>
                                    Agregar Noticias
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @include('archivo.agregar-noticia')
    @include('archivo.eliminar-noticia')
    @include('archivo.editar-noticia')
    <script>
        function cargarDatos(id, titulo,tipo)
            {
                if(tipo==1){
                $('#mtxtidedit').val(id);
                $('#txttituloedit').val(titulo);
                }
                else{
                    $('#mtxtideliminar').val(id);
                    $('#txttituloeliminar').text(titulo)
                }
            }
    </script>
</html>
