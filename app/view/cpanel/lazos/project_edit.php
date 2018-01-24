<?php

?>
<!DOCTYPE html>
<html lang="es">
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
            <div class="col-11 mx-auto ">
                <h1 class="mt-4 ml-4" style="padding-top: 15px"> Sección Projectos
                    <small class="text-muted"> | Nombre de operación</small>
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-10 mx-auto">
                <div class="card card-body mb-5">
                    <div class="container">
                        <div class="row  py-1 div-main__topbar  d-flex align-items-center mb-3">
                            <div class="col-12 col-sm-5">
                                <h4 class="card-title pt-2 text-white"> Nombre de Operación </h4>
                            </div>
                            <div class="col-6 col-sm-3 ml-auto">
                                <button type="submit" class="btn btn-primary btn-block ">Guardar</button>
                            </div>
                            <div class="col-6 col-sm-3">
                                <button type="submit" class="btn btn-secondary btn-block">Cancelar</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <button type="submit" class="btn btn-secondary ">Cargar Imagen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <button type="submit" class="btn btn-secondary ">Cargar Imagen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <button type="submit" class="btn btn-secondary ">Cargar Imagen</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputNameEs">Nombre</label>
                                                <input type="text" class="form-control form-inline" id="inputNameEs" placeholder="Nombre ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputNameEn">Name</label>
                                                <input type="text" class="form-control form-inline" id="inputNameEn" placeholder="Name ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEs">Descripción</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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