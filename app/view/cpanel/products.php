<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vilarthe - Panel de Control | Productos </title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="../public/cpanelPublic/library/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="../public/cpanelPublic/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../public/cpanelPublic/css/style.css">

</head>
<body id="top-page">

    <nav class="navbar navbar-expand-lg navbar-toggleable-md bg-dark navbar-dark sticky-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand"  href="../cpanel.html">
            <img src="../public/cpanelPublic/img/logoFondoOscuro_h56px.png" alt="">
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
                    <a href="../index.html#Lazos-Secciones" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Productos</span>
                    </a>
                    <a href="../index.html#Lazos-Secciones" class="list-group-item list-group-item-action bg-dark text-white">
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

                <!-- Logo -->
                <li class="list-group-item logo-separator mt-5 d-flex align-items-end justify-content-center">
                    <span style="color: white; font-size: 20px;" class="menu-collapsed">VILARTHE</span>    
                </li> 
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->


        <!-- MAIN -->
        <div class="container-fluid div-main">
            <div class="row">
                <div class="col-11 mx-auto mt-4">
                    <h1 style="padding-top: 15px"> Sección Productos <small class="text-muted"> | Lista de Productos</small></h1>
                    <p>
                        Este apartado te permite modificar, eliminar o agregar nuevos productos. Los campos requeridos para cada producto son Nombre, Descripción, y lista de imagenes, se sugieren que sea un total de 51 imágenes para poder lograr la rotación.
                    </p>
                    <button class="btn btn-primary"><a href="projects_operations.php" style="color:white;">+ NUEVO PRODUCTO</a></button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-10 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Conjunto 1 </td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Conjunto 2 </td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Conjunto 3</td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Conjunto 4</td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Conjunto 5</td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Conjunto 6</td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                    <button class="btn btn-sm btn-danger text-white"> Eliminar </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="../public/cpanelPublic/library/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="../public/cpanelPublic/library/bootstrap/js/popper.min.js"></script>
    <script src="../public/cpanelPublic/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/cpanelPublic/js/main.js"></script>
    <script src="../public/cpanelPublic/js/dropzone.js"></script>
    
</body>
</html>