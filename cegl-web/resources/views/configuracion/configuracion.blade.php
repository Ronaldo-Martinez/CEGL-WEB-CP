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
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Agregar Anuncios</h3>
                        <a href="{{route('noticias')}}">
                        <img class="card-img-top" src="imagenes/anuncio.svg" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <p class="card-text">
                            </p>
                        </div>
                    </div>
                </div>
                <!--tarjeta 2-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Modificar Misión - Visión</h3>
                        <a type="button" data-toggle='modal' data-target='#editarnoticia' title='Editar'
                        onclick='cargarDatos("1","{{$mision->mision}}", "{{$mision->vision}}","1")'>
                            <img class="card-img-top" src="imagenes/carer.svg" alt="Social">
                        </a>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!--Agregar Servicion-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Modificar Servicios</h3>
                        <a href="{{route('conServicios')}}">
                            <img class="card-img-top" src="imagenes/certificacion.svg" alt="Card image cap">
                        </a>
                        <div class="card-body">
                          <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <!--Agregar Archivo (Descargas)-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Archivos Sección Descargas</h3>
                        <a href="{{route('conDescargas')}}">
                            <img class="card-img-top" src="imagenes/descargas.svg" alt="Card image cap">
                        </a>
                        <div class="card-body">
                          <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <!--Agregar Paginas-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Agregar Pagina</h3>
                        <img class="card-img-top" src="imagenes/pagina.svg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <!--Agregar Usuarios-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card border rounded">
                        <h3 class="card-header-title text-dark pt-3">Agregar Usuario</h3>
                        <a href="{{route('register')}}">
                            <img class="card-img-top" src="imagenes/register.svg" alt="Access account">
                        </a>
                        <div class="card-body">
                          <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @include('archivo.agregar-noticia')
    @include('archivo.editar-mision')
    <script>
        function cargarDatos(id, mision,vision,tipo)
            {
                if(tipo==1){
                $('#mtxtidedit').val(id);
                $('#txttituloedit').val(mision);
                $('#txttextoedit').val(vision);
                }
            }
    </script>
</html>
