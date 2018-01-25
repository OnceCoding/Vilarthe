<?php
    require_once __DIR__ . '/../../../model/Products_lazos.php';
    $p = new Products_lazos();
    $products = $p -> getAllProducts();
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
                <div class="col-11 mx-auto mt-4">
                    <h1 style="padding-top: 15px"> Sección Productos <small class="text-muted"> | Lista de Productos</small></h1>
                    <p>
                        Este apartado te permite modificar, eliminar o agregar nuevos productos.
                        Los campos requeridos para cada producto son Nombre, Descripción, y la imagen del producto.
                    </p>
                    <a class="btn btn-primary text-white" href="/cpanel/product_new">+ NUEVO PRODUCTO</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-10 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            for ($i = 0; $i < count($products); $i++):
                        ?>
                            <tr>
                                <td> <?= $i + 1 ?> </td>
                                <td> <?= $products[$i]['name_es'] ?></td>
                                <td>
                                    <a href="/cpanel/product_edit/<?= $products[$i]['id'] ?>" class="btn btn-sm btn-warning text-white"> Editar </a>
                                    <button content="/cpanel/product_del/<?= $products[$i]['id'] ?>" class="btn btn-sm btn-danger text-white delete"> Eliminar </button>
                                </td>
                            </tr>
                        <?php
                            endfor;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="/public/cpanelPublic/library/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="/public/cpanelPublic/library/bootstrap/js/popper.min.js"></script>
    <script src="/public/cpanelPublic/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/cpanelPublic/js/del_product.js"></script>
    
</body>
</html>