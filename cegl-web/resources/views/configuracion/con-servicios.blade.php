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
                <!--Agregar Servicio-->
                <div class="col-12">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Servicios Registrados</h3>
                        <a type='button'  data-toggle='modal' data-target='#agregarnoticia' title='Eliminar'>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                @forelse ($servicios as $servicio)
                                <div class="col-6">
                                    <div class="card border rounded">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark">{{$servicio->titulo}}</h4>
                                            <img class="card-img-top" src="{{$servicio->imagen}}" alt="servicio 1">
                                            <p class="card-text">{{$servicio->texto}}</p>
                                            <a type='button' class="btn btn-primary" data-toggle='modal' data-target='#editarservicio' title='Editar'
                                            onclick='cargarDatos("{{$servicio->id}}","{{$servicio->titulo}}","{{$servicio->texto}}", "1")'>
                                                <i class='fa fa-times'></i>
                                                Editar
                                            </a>
                                            <a type='button' class="btn btn-danger" data-toggle='modal' data-target='#eliminarservicio' title='Eliminar'
                                            onclick='cargarDatos("{{$servicio->id}}","{{$servicio->titulo}}", "2")'>
                                                <i class='fa fa-times'></i>
                                                Eliminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="card-header-title text-dark py-3">
                                                No se han registrado Servicios.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <p></p>
                            <a type='button' class="btn btn-primary" data-toggle='modal'
                                data-target='#agregarservicio' title='Editar'>
                                    <i class='fa fa-times'></i>
                                    Agregar Servicio
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @include('servicio.agregar-servicio')
    @include('servicio.editar-servicio')
    @include('servicio.eliminar-servicio')
    <script>
        function cargarDatos(id, titulo,texto,tipo)
            {
                if(tipo==1){
                $('#mtxtidedit').val(id);
                $('#txttituloedit').val(titulo);
                $('#txttextoedit').val(texto);
                }
                else{
                    $('#mtxtideliminar').val(id);
                    $('#txttituloeliminar').text(titulo)
                }
            }
    </script>
</html>
