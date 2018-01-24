<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" type="image/png" href="/public/vilarthePublic/images/vilarthe_icono.png"/>
    <link rel="stylesheet" href="/public/cpanelPublic/library/bootstrap/css/bootstrap.min.css">
    <link href="/public/cpanelPublic/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/cpanelPublic/css/styleLazos.css">

</head>
<body id="top-page">

    <!--- sidebar -->
    <?php require_once __DIR__ . '../inc/navbar.php'?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <?php require_once __DIR__ . '../inc/sidebar.php' ?>

        <!-- MAIN -->
        <div class="container-fluid div-main">
        <div class="col">
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
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-primary" href="/cpanel/products" style="color:white;">Sección Productos</a>
                                            </div>
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
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-primary" href="/cpanel/projects" style="color:white;">Sección Proyectos</a>
                                            </div>
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