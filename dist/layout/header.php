<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - System Solutions</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="../styles/style-dashboard.css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
            <img class="rounded-pill img-fluid" width="65" src="https://i.imgur.com/EX7LxuN.jpg" alt="">
            <div class="ms-2">
                <h5 class="fs-6 mb-0">
                    <a class="text-decoration-none" href="#">Julian Ortiz</a>
                </h5>
                <p class="mt-1 mb-0">Administrador</p>
            </div>
        </div>

        <div class="search position-relative text-center px-4 py-3 mt-2">
            <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Buscar productos">
            <i class="fa fa-search position-absolute d-block fs-6"></i>
        </div>

        <ul class="categories list-unstyled">
            <li class="has-dropdown">
                <i class="uil-estate fa-fw"></i><a href="#"> Dashboard</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-shopping-cart-alt"></i><a href="#"> Comprar</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                </ul>
            </li>
            <li class="">
                <i class="uil-folder"></i><a href="#"> Inventario</a>
            </li>
            <li class="has-dropdown">
                <i class="uil-bag"></i><a href="#"> Reparaciones</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-calendar-alt"></i><a href="#"> Calendario</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-envelope-download fa-fw"></i><a href="#"> Recibos</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                </ul>
            </li>
            <li class="">
                <i class="uil-setting"></i><a href="#"> Ajustes</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-chart-pie-alt"></i><a href="#"> No se que otra</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <!-- <i class="uil-panel-add"></i><a href="#"> Graficos</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul> -->
            </li>
            <li class="exit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
                    <defs></defs>
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"></path>
                </svg><a href="#"> Cerrar sesión</a>

            </li>
        </ul>
    </aside>

<section id="wrapper">
    