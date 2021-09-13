    @extends('base')
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    @section('titulo')
    Oferta Academica
    @endsection
        @section('cuerpo')
            @section('texto')
            <div class="col-lg-12 text-center">
                <h1 class="display-4 text-primary">Servicios</h1><p></p>
                <div class="row">
                    @forelse ($servicios as $servicio)
                    <div class="col-12 col-lg-4">
                        <div class="card border rounded">
                            <div class="card-body">
                                <h4 class="card-header-title text-dark">{{$servicio->titulo}}</h4>
                                <img class="card-img-top" src="{{$servicio->imagen}}" alt="servicio 1">
                                <p class="card-text">{{$servicio->texto}}</p>
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
            </div>
            @endsection
        @endsection
