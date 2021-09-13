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
                <!--Agregar Archivos-->
                <div class="col-12">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Archivos Registrados</h3>
                        <p>Aquí se agregan los archivos de la sección Descargas.</p>
                        <a type='button'  data-toggle='modal' data-target='#agregarnoticia' title='Eliminar'>
                        </a>
                        <div class="card-body">

                            <a type='button' class="btn btn-primary" data-toggle='modal'
                                data-target='#agregararchivo' title='Editar'>
                                    <i class='fa fa-times'></i>
                                    Agregar Archivos
                            </a>
                            <p></p>

                            <!--Archivos Bachillerato-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-light bg-dark py-3">Bachillerato</h4>
                                        </div>
                                    </div>
                                </div>
                                @forelse ($archivosBach as $archivo)
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5 class="card-header-title text-dark">{{$archivo->nombre}}</h5>
                                                <p class="card-text">{{$archivo->descripcion}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "1")'>
                                                    <i class='fa fa-times'></i>
                                                    Editar
                                                    </a>
                                                    <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarnoticia' title='Eliminar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "2")'>
                                                        <i class='fa fa-times'></i>
                                                        Eliminar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark py-3">
                                                No se han registrado Archivos en Bachillerato.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>

                            <!--Archivos Basica-->
                            <p></p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-light bg-dark py-3">Educación Basica</h4>
                                        </div>
                                    </div>
                                </div>
                                @forelse ($archivosBasic as $archivo)
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5 class="card-header-title text-dark">{{$archivo->nombre}}</h5>
                                                <p class="card-text">{{$archivo->descripcion}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "1")'>
                                                    <i class='fa fa-times'></i>
                                                    Editar
                                                    </a>
                                                    <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarnoticia' title='Eliminar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "2")'>
                                                        <i class='fa fa-times'></i>
                                                        Eliminar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark py-3">
                                                No se han registrado Archivos en Educación Basica.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>

                            <!--Archivos Educame-->
                            <p></p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-light bg-dark py-3">Educame</h4>
                                        </div>
                                    </div>
                                </div>
                                @forelse ($archivosE as $archivo)
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5 class="card-header-title text-dark">{{$archivo->nombre}}</h5>
                                                <p class="card-text">{{$archivo->descripcion}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "1")'>
                                                    <i class='fa fa-times'></i>
                                                    Editar
                                                    </a>
                                                    <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarnoticia' title='Eliminar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "2")'>
                                                        <i class='fa fa-times'></i>
                                                        Eliminar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark py-3">
                                                No se han registrado Archivos en Educame.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>

                            <!--Archivos Nuevo Ingreso-->
                            <p></p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-light bg-dark py-3">Nuevo Ingreso</h4>
                                        </div>
                                    </div>
                                </div>
                                @forelse ($archivosN as $archivo)
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5 class="card-header-title text-dark">{{$archivo->nombre}}</h5>
                                                <p class="card-text">{{$archivo->descripcion}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "1")'>
                                                    <i class='fa fa-times'></i>
                                                    Editar
                                                    </a>
                                                    <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarnoticia' title='Eliminar'
                                                    onclick='cargarDatos("{{$archivo->id}}","{{$archivo->nombre}}", "2")'>
                                                        <i class='fa fa-times'></i>
                                                        Eliminar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark py-3">
                                                No se han registrado Archivos de Nuevo Ingreso.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @include('archivo.agregar-archivo')
    @include('archivo.eliminar-archivo')
    @include('archivo.editar-archivo')
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
