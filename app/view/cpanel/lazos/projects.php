<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/public/cpanelPublic/library/bootstrap/css/bootstrap.min.css">
    <link href="/public/cpanelPublic/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/cpanelPublic/css/styleLazos.css">

</head>
<body id="top-page">

    <!--- sidebar -->
    <?php require_once __DIR__ . '/../inc/navbar.php'?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">

        <!-- Sidebar -->
        <?php require_once __DIR__ . '/../inc/sidebar.php' ?>

        <!-- MAIN -->
        <div class="container-fluid div-main">
            <div class="row">
                <div class="col-11 mx-auto mt-4">
                    <h1 style="padding-top: 15px"> Sección Proyectos <small class="text-muted"> | Lista de Proyectos</small></h1>
                    <p>
                        Este apartado te permite modificar, eliminar o agregar nuevos Proyectos. Los campos requeridos para cada Proyecto son Nombre, Descripción, y lista de imagenes, se sugieren que sea un total de 51 imágenes para poder lograr la rotación.
                    </p>
                    <a href="/cpanel/project_edit" style="color:white;">+ NUEVO PROYECTO</a>
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
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Conjunto 2 </td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white"> Editar </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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