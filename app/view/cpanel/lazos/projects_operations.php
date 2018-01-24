<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/public/cpanelPublic/library/bootstrap/css/bootstrap.min.css">
    <link href="/public/cpanelPublic/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/cpanelPublic/css/styleLazos.css">
    <script src="/public/cpanelPublic/js/dropzone.js"></script>

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
                <div class="col">
                    <h1 style="padding-top: 15px"> Sección Proyectos
                    <small class="text-muted"> | Nombre de operación</small>
                    </h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-10 mx-auto">
                    <div class="card card-body">
                        <h4 class="card-title pt-2"> Nombre de Operación </h4>
                        <div class="row">
                            <div class="col-6">
                                <form>
                                    <div class="form-group">
                                        <label for="inputName">Título</label>
                                        <input type="email" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Nombre ">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Descripción</label>
                                        <input type="password" class="form-control" id="inputDescription" placeholder="Descripción ">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="submit" class="btn btn-secondary">Cancelar</button>
                                </form>
                            </div>
                            <div class="col-6" style="border:solid 1px cornflowerblue; border-style: dashed;">
                                <form action="/file-upload"
                                      class="dropzone"
                                      id="my-awesome-dropzone">
                                </form>
                            </div>
                            </div>
                    </div>
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