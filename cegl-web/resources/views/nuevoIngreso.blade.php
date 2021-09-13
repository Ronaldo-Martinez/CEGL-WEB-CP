    @extends('base')
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    @section('titulo')
    Nuevo Ingreso {{date('Y')}}
    @endsection
        @section('cuerpo')
            @section('texto')
            <div class="col-lg-12 text-center">
                <h1 class="display-4 text-primary">Nuevo Ingreso {{date('Y')}}</h1><p></p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6 text-left">
                                        <h3>Estimados padres de familia: </h3>
                                        <p></p>
                                        <p>
                                            Debido a la situación que estamos afrontando
                                            por el COVID-19 nos vemos en la necesidad de buscar alternativas para
                                            iniciar la matricula para el año 2021, por tal razón ponemos a disposición
                                            este canal de comunicación donde encontraras las fichas para matricula
                                            de nuevo ingreso, que se deben descargar y llenar con toda la información
                                            requerida siguiendo las indicación que en ella encontrara.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="card-img-top" src="/imagenes/nuevoIngreso.svg" alt="Nuevo ingreso imagen">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Archivos Nuevo Ingreso-->
                <p></p>
                <div class="row">
                    <div class="col-12">
                        <div class="card border">
                            <div class="card-body">
                                <h4 class="card-header-title text-light bg-dark py-3">Archivos</h4>
                            </div>
                        </div>
                    </div>
                    @forelse ($archivos as $archivo)
                    <div class="col-12">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        <h5 class="card-header-title text-dark">{{$archivo->nombre}}</h5>
                                    <p class="card-text">{{$archivo->descripcion}}</p>
                                    </div>
                                    <div class="col-4 col-lg-3">
                                        <a type='button' class="btn btn-primary" href="{{$archivo->url}}" title='Descargar'
                                        download="{{$archivo->nombreReal}}">
                                            Descargar
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
                                    No se han registrado Archivos en Nuevo Ingreso.
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            @endsection
        @endsection
