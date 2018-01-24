<?php
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <link rel="shortcut icon" type="image/png" href="/public/vilarthePublic/images/vilarthe_icono.png"/>
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
            <div class="col-11 mx-auto ">
                <h1 class="mt-4 ml-4" style="padding-top: 15px"> Sección Productos
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
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inputName">Código </label>
                                            <input type="text" class="form-control form-inline" id="inputCode" placeholder="Codigo del producto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inputName">Estado </label>
                                            <select class="form-control">
                                                <option>Visible</option>
                                                <option>No Visible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="inputName" class="">Imagen </label>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control form-inline" id="inputImage" placeholder="Elija imagen... ">
                                                </div>
                                                <div class="col-12 col-sm-4 ">
                                                    <button class="btn btn-secondary btn-block ml-auto"> Cargar Imagen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
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
                                                <input type="text" class="form-control form-inline" id="inputDescriptionEs" placeholder="Descripción ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Description</label>
                                                <input type="text" class="form-control form-inline" id="inputDescriptionEn" placeholder="Description ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputSizeEs">Talla</label>
                                                <input type="text" class="form-control form-inline" id="inputSizeEs" placeholder="Talla ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputSizeEn">Size</label>
                                                <input type="text" class="form-control form-inline" id="inputSizeEn" placeholder="Size ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEs">Material</label>
                                                <input type="text" class="form-control form-inline" id="inputMaterialEs" placeholder="Material ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Material</label>
                                                <input type="text" class="form-control form-inline" id="inputMaterialEn" placeholder="Material ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEs">Color</label>
                                                <input type="text" class="form-control form-inline" id="inputColorEs" placeholder="Color ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Color</label>
                                                <input type="text" class="form-control form-inline" id="inputColorEn" placeholder="Color ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEs">Colección</label>
                                                <input type="text" class="form-control form-inline" id="inputCollectionEs" placeholder="Colección ">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Collection</label>
                                                <input type="text" class="form-control form-inline" id="inputCollectionEn" placeholder="Collection">
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
</body>
</html>