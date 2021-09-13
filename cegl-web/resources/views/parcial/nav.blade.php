<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container">

        <a class="navbar-brand" href="/"><img class="logoEscuela"src="imagenes/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link h5" href="{{route('inicio')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active dropdown">
                <a class="nav-link h5 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nuevo Ingreso
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('nuevoIngreso')}}">Nuevo Ingreso</a>
                    <a class="dropdown-item" href="#">Instalaciones</a>
                </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link h5" href="{{route('oferta')}}">Oferta Académica</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link h5" href="{{route('mision')}}">Misión y Visión</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link h5" href="{{route('servicios')}}">Servicios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link h5" href="{{route('descargas')}}">Descargas</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>

