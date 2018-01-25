<?php
    require_once __DIR__ . '/../../../model/Article.php';
    $a = new Article();
    $article = $a->getArticle($data);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <link rel="shortcut icon" type="image/png" href="/public/vilarthePublic/images/vilarthe_icono.png"/>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
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
                <h1 class="mt-4 ml-4" style="padding-top: 15px"> Sección Proyectos
                    <small class="text-muted"> | Editar</small>
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-10 mx-auto">
                <div class="card card-body mb-5">
                    <div class="container">
                        <div class="row  py-1 div-main__topbar  d-flex align-items-center mb-3">
                            <div class="col-12 col-sm-5">
                                <h4 class="card-title pt-2 text-white"> Editar Artículo </h4>
                            </div>
                            <div class="col-6 col-sm-3 ml-auto">
                                <button type="submit" class="btn btn-primary btn-block ">Guardar</button>
                            </div>
                            <div class="col-6 col-sm-3">
                                <button id="cancel" class="btn btn-dark btn-block ">Cancelar</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img class="img-fluid" id="img-1" src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input-img-1" onchange="previewImage1()">
                                            <label id="lbl-img-1" class="custom-file-label" for="input-img-1">Elegir Imagen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img class="img-fluid" id="img-2" src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input-img-2" onchange="previewImage2()">
                                            <label id="lbl-img-2" class="custom-file-label" for="input-img-2">Elegir Imagen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="div-main__loadimage mx-auto my-auto">
                                            <img class="img-fluid" id="img-3" src="/public/cpanelPublic/img/cargarImagen.png ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 d-flex justify-content-center mt-1">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input-img-3" onchange="previewImage3()">
                                            <label id="lbl-img-3" class="custom-file-label" for="input-img-3">Elegir Imagen</label>
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
                                                <input type="text" class="form-control form-inline" id="inputNameEs" placeholder="Nombre "
                                                    required value="<?= $article[0]['title_es'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputNameEn">Name</label>
                                                <input type="text" class="form-control form-inline" id="inputNameEn" placeholder="Name "
                                                required value="<?= $article[0]['title_en'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEs">Descripción</label>
                                                <textarea spellcheck="false" class="form-control" id="inputDescriptionEs" rows="3" required><?= htmlentities($article[0]['description_es']) ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputDescriptionEn">Description</label>
                                                <textarea spellcheck="false" class="form-control" id="inputDescriptionEn" rows="3" required><?= htmlentities($article[0]['description_en']) ?></textarea>
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

<script src="/public/libraries/js/jquery-3.2.1.min.js"></script>
<script src="/public/libraries/js/popper.min.js"></script>
<script src="/public/libraries/js/bootstrap.min.js"></script>
<script src="/public/cpanelPublic/js/edit_proyect.js"></script>
</body>
</html>