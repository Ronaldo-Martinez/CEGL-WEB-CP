    @extends('base')

    @section('titulo')
    Descargas
    @endsection

        @section('cuerpo')
            @section('texto')
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <!--Descargar Archivos-->
                            <div class="col-12">
                                <div class="card border rounded">
                                    <h3 class="card-header-title text-dark pt-3">Archivos Registrados</h3>
                                    <div class="card-body">
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
                                            <!--ya estaba-->
                                            <div class="col-12">
                                                <div class="card border">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 col-lg-9">
                                                                <h5 class="card-header-title text-dark">test</h5>
                                                            <p class="card-text">test</p>
                                                            </div>
                                                            <div class="col-4 col-lg-3">
                                                                <a type='button' class="btn btn-primary" href="/" title='Descargar'
                                                                download="test">
                                                                    Descargar
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @forelse ($archivosE as $archivo)
                                            <div class="col-12">
                                                <div class="card border">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 col-lg-9">
                                                                <h5 class="card-header-title text-dark">test</h5>
                                                            <p class="card-text">test</p>
                                                            </div>
                                                            <div class="col-4 col-lg-3">
                                                                <a type='button' class="btn btn-primary" href="/" title='Descargar'
                                                                download="test">
                                                                    Descargar
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            No se han registrado Archivos en Educame.
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
                </div>
            </div>
            @endsection
        @endsection

