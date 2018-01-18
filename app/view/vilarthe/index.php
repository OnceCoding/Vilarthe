<?php

    #onHosting
    $server = "/";

    #onLocalHost
    #$server = "";

?>


<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Vilarthe</title>

    <link rel="shortcut icon" type="image/png" href="<?= $server ?>public/vilarthePublic/images/icono_Vilarthe.ico"/>

    <meta property="og:title" content="Vilarthe : Clothing " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.vilarthe.com/public/" />

    <meta property="og:image" content="http://www.vilarthe.com/public/vilarthePublic/images/open.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="504" />
    <meta property="og:image:height" content="225" />
    <meta property="og:image:alt" content="Logo de Vilarthe" />

    <meta property="og:description" content="Vilarthe es una empresa que se dedica a la venta de ropa con algodón organico">

    <meta name="author" content="Vilarthe">
    <meta name="classification" content="all">
    <meta name="description" content="Vilarthe es una empresa que se dedica a la venta de ropa con algodón organico">
    <meta name="keywords" content="cotton, clothes, vilarthe, lazos, babys">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!--link rel="stylesheet" href="public/vilarthePublic/css/styles.css"-->
    <link rel="stylesheet" href="<?= $server ?>public/vilarthePublic/css/sty.css">
</head>
<body>
    <div class="container-fluid main d-none d-lg-block">
        <div class="row no-gutters">
            <div class="col-6 brand d-flex flex-column justify-content-center align-items-center">
                <img class="imageBrand img-fluid" src="<?= $server ?>public/vilarthePublic/images/logoFondoOscuro_tiny.png" alt="">
                <div class="setCategories mt-5">
                    <ul class="categories ">
                        <li class="divider mb-2"> </li>
                        <li class="item active text-center "><a href="lazos/">Lazos</a></li>
                        <li class="divider mt-2"></li>
                    </ul>
                </div>
            </div>

            <div class="col-6 slider d-none d-lg-flex">
            </div>
        </div>
    </div>

    <div class="container-fluid main d-block d-lg-none">
        <div class="row no-gutters">
            <div class="col-12 brand-small d-flex flex-column justify-content-center align-items-center">
                <img class="imageBrand-small img-fluid" src="<?= $server ?>public/vilarthePublic/images/logoFondoOscuro.png" alt="">
                <div class="setCategories-small mt-5">
                    <ul class="categories ">
                        <li class="divider mb-2"> </li>
                        <li class="item-small active text-center "><a href="lazos/">Lazos</a></li>
                        <li class="divider mt-2"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


</body>
</html>