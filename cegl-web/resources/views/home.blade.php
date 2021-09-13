
    @extends('base')
    @section('titulo')
    @endsection

    @section('meta')
    <META NAME="Resource-type" CONTENT="Homepage">
    @endsection

        @section('cuerpo')
            <!--Cabezera-->
            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-primary">COMPLEJO EDUCATIVO GOLDTREE LIEBES</h1>
                        <p></p>
                        <p class="h2 text-secondary py-5">El Complejo Educativo Goldtree Liebes cuenta con docentes altamente
                            capacitados, amplias y modernas instalaciones para que sus hijos desarrollen todo su potencial.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{route('inicio')}}/imagenes/Teaching.gif" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            @section('texto')
            <!--Servicios-->
            <section class="page-section" id="services">
                <div class="container my-4">
                    <h2 class="text-center my-4">Nuestros Servicios</h2>
                    <hr class="divider my-4" />
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <i class="fas fa-4x fa-graduation-cap text-primary mb-4"></i>
                                <h3 class="h4 mb-2">Docentes altamente capacitados</h3>
                                <p class="text-muted mb-0"></p>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <i class="fas fa-4x fa-book-open text-primary mb-4"></i>
                                <h3 class="h4 mb-2">Bibloteca</h3>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <i class="fas fa-4x fa-microscope text-primary mb-4"></i>
                                <h3 class="h4 mb-2">Laboratorio</h3>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <i class="fas fa-4x fa-futbol text-primary mb-4"></i>
                                <h3 class="h4 mb-2">Cancha de Deporte</h3>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="my-4" id="portafolio"><p></p>
                        <hr class=" my-5" />
                    </div>
                </div>
            </section>

            <section class="page-section" id="fotos">
                <div class="container my-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-3 text-center">
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                    <div class="card border rounded">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{route('inicio')}}/imagenes/c1.jpg" alt="Complejo Educativo Goldtre Liebes" width="600px" height="400px">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="d-block w-100" src="{{route('inicio')}}/imagenes/c2.jpg" alt="Complejo Educativo Goldtre Liebes" width="400px" height="400px">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="d-block w-100" src="{{route('inicio')}}/imagenes/c3.jpg" alt="Complejo Educativo Goldtre Liebes" width="400px" height="400px">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="d-block w-100" src="{{route('inicio')}}/imagenes/c4.jpg" alt="Complejo Educativo Goldtre Liebes" width="600px" height="400px">
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                            </div>
                            <div class="">
                                <hr class=" my-5" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Datos-->
            <section class="page-section" id="info">
                <div class="container">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <!--tarjeta 1 Ubicación-->
                                <div class="col-lg-5 col-sm-12 col-sm-5">
                                    <div class="iframe-container ">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.2728833818414!2d-89.19035544388638!3d13.64115753207877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63315de66f063d%3A0xb919397ac2ec6604!2sEscuela%20Goldtree%20Liebes!5e0!3m2!1ses-419!2ssv!4v1631323471935!5m2!1ses-419!2ssv" width="400" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            <!--tarjeta 2 Contacto-->
                            <div class="col-lg-7 col-sm-12 col-mb-7">
                                <h3 class="py-2">INFORMACIÓN DE CONTACTO</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title py-3">
                                            DIRECCIÓN
                                        </h4>
                                        <div class="card-text"> Cantón Planes de Renderos, costado norte de la cancha de futbol del Parque Balboa,
                                                           Municipio de Panchimalco, San Salvador.</div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class=" card-title py-3">
                                            CONTÁCTENOS
                                        </h4>
                                        <div class="card-text">Telefono: </div>
                                        <div class="card-text"> +503 6174 - 6503 </div>
                                    </div>
                                    <div class="col-6 py-5">
                                        <h4 class="card-title">
                                            HORARIOS
                                        </h4>
                                        <div class="card-text">Turno Matutino: </div>
                                        <div class="card-text">7:00 am - 12:00 m</div>
                                        <p></p>
                                        <div class="card-text">Turno Vespertino: </div>
                                        <div class="card-text">01:00 pm - 05:00 pm</div>
                                    </div>
                                    <div class="col-6 py-5 text-center">
                                        <h4 class="card-titlr">
                                            SÍGANOS EN
                                        </h4>
                                        <ul class="social-buttons" id="demo2">
                                            <li>
                                              <a href="" class="brandico-facebook"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                              <a href="" class="brandico-youtube"><i class="fab fa-youtube"></i></a>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
    @endsection


