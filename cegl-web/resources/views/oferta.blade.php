    @extends('base')
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    @section('titulo')
    Oferta Academica
    @endsection
        @section('cuerpo')
            @section('texto')
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="display-4 text-primary">Oferta Academica</h1><p></p>
                        <h2 class="load text-secondary">En turnos Matutino y Vespertino</h2><p></p>
                        <ul>
                            <li class="load text-secondary">Parvularia (4,5 y 6 años)</li>
                            <li class="load text-secondary">Educación Básica: de 1°. a 9°.</li>
                            <li class="load text-secondary">Bachillerato General 2 años diurno, con diplomados en: Gastronomía, Idioma Inglés y Diseño Gráfico.</li>
                            <li class="load text-secondary">Bachillerato Técnico Vocacional en Serviempresa en Administración y mercadeo 3 años.</li>
                        </ul>
                        <h2 class="load text-secondary">Modalidad EDUCAME  a distancia los días Sábados</h2><p></p>
                        <ul>
                            <li class="load text-secondary">Bachillerato General 2 años.</li>
                            <li class="load text-secondary">Educación Básica de tercer Ciclo 7°, 8°, 9°.</li>
                            <li class="load text-secondary">Educación de Adultos ENA de 1° a 6°.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid mb-4" src="imagenes/oferta.svg" alt="Examenes">
                    </div>
                </div>
            </div>
            @endsection
        @endsection
