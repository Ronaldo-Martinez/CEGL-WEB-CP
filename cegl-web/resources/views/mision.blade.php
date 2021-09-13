    @extends('base')
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    @section('titulo')
    Misión y Visión
    @endsection
        @section('cuerpo')
            @section('texto')
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="display-4 text-primary">Misión y Visión</h1><p></p>
                        <h2 class="load text-secondary">Misión</h2><p></p>
                        <p class="load text-secondary">{{$mision->mision}}
                        </p>
                        <h2 class="load text-secondary">Visión</h2><p></p>
                        <p class="load text-secondary">{{$mision->vision}}
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid mb-4" src="imagenes/carer.svg" alt="carer">
                    </div>
                </div>
            </div>
            @endsection
        @endsection
