<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complejo Educativo Goldtree Lliebes | @yield('titulo')</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
    <META NAME="AUTHOR" CONTENT="Isai Ronaldo Martinez">
    <META NAME="DESCRIPTION" CONTENT="El Complejo Educativo Goldtree Liebes cuenta con docentes altamente capacitados, amplias y modernas instalaciones para que sus hijos desarrollen sus estudios de la mejor forma posible.">
    <META NAME="KEYWORDS" CONTENT="goldtree,goldtreeliebes,liebes,bachillerato,colegio,escuela">
    <META NAME="DateCreated" CONTENT="Mon, 8 February 2021 00:00:00 GMT-6">
    <META NAME="Revisit-after" CONTENT="7 days">
    <META NAME="robots" content="ALL">

    <!-- Google fonts-->

    <!--Hojas de Estilo-->
    <link rel="icon" type="imagen/ico" href="imagenes/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <!--JS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--css de bootstrap-->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('parcial/nav')
    @yield('cuerpo')
    @yield('texto')

        <hr class="featurette-divider">
</body>
<footer class="text-center text-lg-start bg-white">
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-black">
        <a href="https://storyset.com/education">Education illustrations by Storyset</a>
        <div class="container"><small>Copyright {{date('Y')}} © <a class="text-dark" href="https://codersgeeks.com">CodersGeeks</a></small></div>
    </div>
  </footer>
</html>
