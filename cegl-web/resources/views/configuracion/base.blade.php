
<div class="container-fluid h-screen">
        <div class="row" style="height: 100vh">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column h-screen">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">
                      <img src="imagenes/logo.png" width="65px" height="80px" alt="logo-goldtree-liebes">
                      <span data-feather="home"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{route('home1')}}">
                      <span data-feather="home"></span>
                      INICIO
                    </a>
                    <p></p>
                  </li>
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="{{route('noticias')}}">
                    <span data-feather="home"></span>
                    NOTICIAS
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{route('conServicios')}}">
                    <span data-feather="shopping-cart"></span>
                    <P></P>
                    SERVICIOS
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{route('conDescargas')}}">
                    <span data-feather="users"></span>
                    <P></P>
                    DESCARGAS
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">
                    <span data-feather="bar-chart-2"></span>
                    <P></P>
                    AGREGAR PÁGINAS
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">CONFIGURACIÓN</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
              </div>
            </div>
            @yield('cuerpo')
          </main>
        </div>
    </div>
    @endsection

