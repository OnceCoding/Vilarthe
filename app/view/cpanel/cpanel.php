<?php

    session_start();

    if(!isset($_SESSION['user'])){
        header('location:/');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TI Cognitivas</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/public/cpanelPublic/library/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="/public/cpanelPublic/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/cpanelPublic/css/style.css">

</head>
<body id="top-page">

    <nav class="navbar navbar-expand-lg navbar-toggleable-md bg-dark navbar-dark sticky-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="">
            <img src="/public/cpanelPublic/img/logoFondoOscuro_h56px.png" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown d-flex ml-auto">
                        <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user fa-fw mr-3"></span>
                          Eduardo Sernaque
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
          </div>
        </div>
    </nav>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->

        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block "><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center ">
                    <small>LINEAS COMERCIALES</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-tasks fa-fw mr-3"></span>
                        <span class="menu-collapsed">Lazos</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu1' class="collapse sidebar-submenu">
                    <a href="#Lazos-Secciones" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Productos</span>
                    </a>
                    <a href="#Lazos-Secciones" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Proyectos Sociales</span>
                    </a>
                </div>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-tasks fa-fw mr-3"></span>
                        <span class="menu-collapsed">Marca 2</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Productos</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Proyectos Sociales</span>
                    </a>
                </div>
                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-tasks fa-fw mr-3"></span>
                        <span class="menu-collapsed">Marca 3</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- MAIN -->
        <div class="container-fluid div-main">
        <div class="col">
            <section class="container-fluid" id="Main">
                <h1 style="padding-top: 15px;">
                    Vilarthe
                    <small class="text-muted"> | Panel Administrativo</small>
                </h1>

                <div class="card">
                    <h4 class="card-header">Descripción Panel Administrativo Vilarthe</h4>
                    <div class="card-body" style="text-align: justify;">
                        <p>
                            En este apartado se te permite modificar, eliminar o agregar la información de las Lineas Comerciales de Vilarthe. Todas las Lineas Comerciales se encuentran en la parte izquierda dónde se encuentra la barra de navegación lateral de la página, y cada una cuenta con un submenú para poder elegir la sección que se quiere editar.
                        </p>
                    </div>
                </div>
            </section>

            <section class="container-fluid" id="Lazos">
                <h2 style="padding-top: 15px;">
                    Lazos
                </h2>

                <div class="card">
                    <h4 class="card-header">Descripción Panel Administrativo Lazos</h4>
                    <div class="card-body" style="text-align: justify;">
                        <p>
                            En este apartado se te permite modificar, eliminar o agregar la información de las secciones que se encuentran en Lazos, tanto como para la sección Productos como para la sección Contribución a la Comunidad. Se puede acceder a esas secciones desde la barra de navegación lateral izquierda, tan solo dándole click a la categoría deseada.
                        </p>
                    </div>
                </div>
            </section>
            <section class="container-fluid" id="Lazos-Secciones">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="padding-top: 15px;">
                            Productos
                        </h3>
                        <div class="card">
                            <h4 class="card-header">Descripción Sección Productos</h4>
                                <div class="card-body" style="text-align: justify;">
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                Este apartado te permite modificar, eliminar o agregar nuevos productos. Los campos requeridos para cada producto son Nombre, Descripción, y lista de imagenes, se sugieren que sea un total de 51 imágenes para poder lograr la rotación.
                                            </p>
                                        
                                            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="/cpanel/products" style="color:white;">Sección Productos</a></button>


                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <h3 style="padding-top: 15px;">
                            Contribución a la Comunidad
                        </h3>
                        <div class="card">
                            <h4 class="card-header">Descripción Sección Proyecto</h4>
                                <div class="card-body" style="text-align: justify;">
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                Este apartado te permite modificar, eliminar o agregar nuevos artículos sobre Proyectos Sociales. Los campos requeridos para cada artículo son Título, Descripción, y lista de imagenes, se sugieren que sea un total de 3 imágenes para poder lograr un buen efecto.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="/cpanel/projects" style="color:white;">Sección Proyectos</a></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="/public/cpanelPublic/library/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="/public/cpanelPublic/library/bootstrap/js/popper.min.js"></script>
    <script src="/public/cpanelPublic/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/cpanelPublic/js/main.js"></script>
    <script src="/public/cpanelPublic/js/dropzone.js"></script>
    
</body>
</html>