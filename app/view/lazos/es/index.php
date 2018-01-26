<?php

    require_once __DIR__ . '/../../../model/Article.php';
    require_once __DIR__ . '/../../../model/Products_lazos.php';

    $article = new Article();
    $resulSetArticle = $article->getData($data = 'es');

    $products = new Products_lazos();
    $resulSetProducts = $products->getProductsAvailables($data = 'es');

?>
<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Lazos</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" type="image/png" href="/public/lazosPublic/img/icon.png"/>

    <meta property="og:title" content="Lazos: Ropa de bebé hecha de algodón orgánico" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.vilarthe.com/lazos/es" />

    <meta property="og:image" content="http://www.vilarthe.com/public/lazosPublic/img/Logo/lazos_open.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="700" />
    <meta property="og:image:height" content="364" />
    <meta property="og:image:alt" content="Logo de Lazos" />

    <meta property="og:description" content="Lazos, empresa dedicada a la venta de conjuntos para bebé hechas con algodón orgánico">

    <meta name="author" content="Lazos">
    <meta name="classification" content="all">
    <meta name="description" content="Lazos, empresa dedicada a la venta de conjuntos para bebé hechas con algodón orgánico">
    <meta name="keywords" content="cotton, clothes, vilarthe, lazos, babys">


    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/lazosPublic/css/style.css">
    <link rel="stylesheet" href="/public/fonts/css/instagram.css">

</head>
<body id="top-page">

    <nav class="navbar navbar-expand-lg  fixed-top Main-nav" id="Main-nav">

        <div class="container">
            <a class="navbar-brand js-scroll-trigger scroll" href="#top-page"> <img src="/public/lazosPublic/img/logoFinal.png"> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto d-sm-flex align-items-center">
                    <li class="nav-item d-flex mx-10">
                        <a class="nav-link js-scroll-trigger scroll" href="#Main-home"> Inicio</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link js-scroll-trigger scroll" href="#mu-author">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="algo nav-link js-scroll-trigger scroll" href="#Main-programs">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger scroll" href="#business">Contribución a la Comunidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger scroll" href="#CONTACT">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Start Header -->
    <header id="Main-home">
        <div class="container">
            <div class="row">

                <div class="jumbotron d-none d-lg-block">
                    <div class="intro-text">
                        <div class="row">
                            <div class="col d-none d-lg-block">
                                <p class="intro-lead-in text-white h3"> </p>
                                <h2 class="intro-lead-in text-white h3">Ropa para bebes hecho con algodón orgánico </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-none d-lg-block">
                                <p class="intro-heading text-uppercase text-white h1">LAZOS BABY CLOTHING</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-8 col-md-4 d-none d-lg-block">
                                <a class="btn btn-primary btn-block text-uppercase js-scroll-trigger scroll" href="#Main-programs">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jumbotron d-block d-lg-none" >
                    <div class="intro-text-small">
                        <div class="row">
                            <div class="col-auto">
                                <p class="intro-heading text-uppercase text-white h4">LAZOS BABY CLOTHING</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto  d-block d-lg-none">
                                <a class="btn btn-primary btn-block text-uppercase js-scroll-trigger" href="#Main-programs">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!-- End Header -->
    <!-- Start About Us -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-10 offset-1 offset-md-0 col-md-12">
						<div class="mu-author-area">

                                <div class="row mt-4 d-flex justify-content-center">
                                        <div class="col-12 col-md-4">
                                            <h3 class="Main-programs__title text-center text-wrap mb-sm-5">NOSOTROS</h3>
                                        </div>
                                    </div>

							<!-- Start Author Content -->
							<div class="mu-author-content d-none d-lg-block ">
								<div class="row">
                                    <div class="col-lg-4">
                                    </div>
									<div class="col-lg-4">
										<div class="">
											<p><strong>Vilarthe</strong> es una marca de ropa y accesorios creada en el departamento de Lambayeque en el norte del Perú con el objetivo de hacerle llegar lo mejor de nuestras fibras peruanas elaboradas con el mejor algodón de la región legado de nuestro pasado milenario siguiendo las tendencias de la moda.</p>
											<p>Vilarthe ha creado la línea <i><strong>Lazos Baby Clothing</strong></i> elaborada especialmente pensando en proteger la sensible y delicada piel de los bebés.</p>
											
										</div>
                                    </div>
                                    <div class="col-lg-4">
                                            <div class="mu-author-info">
                                                <p>Características generales: Los tejidos convencionales están elaborados con algodón peruano (pima o nativo), Orgánicos, y teñidos 100% con tintes naturales, los accesorios son antialérgicos libres de níquel diseñados exclusivamente para Lazos Baby Clothing e inspirados en las tendencias y temporadas.</p>
                                                <p >Las prendas de vestir elaboradas con algodón orgánico certificado le garantizan un producto de calidad ya que en el proceso para producir algodón no se utilizan productos químicos además contribuye con la protección al medio ambiente ya que genera menos contaminación que en un proceso de producción de algodón convencional.</p>
                                            </div>
                                    </div>
								</div>
							</div>

                            <div class="mu-author-content d-block d-lg-none">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="">
                                            <strong>Vilarthe</strong> ha creado la línea <strong>Lazos Baby Clothing</strong> elaborada especialmente pensando en proteger la sensible y delicada piel de los bebés.
                                            Características generales: Los tejidos convencionales están elaborados con algodón peruano (pima o nativo), Orgánicos, y teñidos 100% con tintes naturales, los accesorios son antialérgicos libres de níquel diseñados exclusivamente para Lazos Baby Clothing e inspirados en las tendencias y temporadas.

                                        </div>
                                    </div>
                                </div>
                            </div>

							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us -->

    <!-- Start Products -->
    <section class="Main-programs py-5" id="Main-programs">
            <hr>
        <div class="container">
            <div class="row mt-4 mb-2 d-flex justify-content-center">
                <div class="col-6 offset-md-0 col-md-4">
                    <h3 class="Main-programs__title text-center">PRODUCTOS</h3>
                </div>
            </div>
            <div class="row">



                <?php foreach ($resulSetProducts as $product): ?>
                    <div class="col-10 offset-1 offset-md-0 col-md-4">
                        <div class="card">
                            <div class="hovereffect">
                                <img src="<?= '/public/lazosPublic/img/products/'  . $product['image'] ?>" class="card-img" alt="">
                                <div class="overlay">
                                    <p><b>Descripción : </b>  <?= $product['description_es'] ?> </p>
                                    <p><b>Talla : </b>  <?= $product['size_es'] ?> </p>
                                    <p><b>Material : </b>  <?= $product['material_es'] ?> </p>
                                    <p><b>Color : </b>  <?= $product['color_es'] ?> </p>
                                    <p><b>Colección : </b>  <?= $product['collection_es'] ?> </p>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mt-3 text-center h6"> <?= $product['name_es'] ?> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


        </div>
    </section>
    <!-- End Products -->

    <!--Comunnity Section-->
    <section id="business" class="">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12  offset-md-0 col-md-12">
                    <div class="main_business">
                        <div class="row mt-4 d-flex justify-content-center ">
                            <h3 class="Main-programs__title text-center text-wrap mb-sm-5">CONTRIBUCIÓN A LA COMUNIDAD</h3>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-1 col-sm-10 offset-lg-0 col-lg-6 mt-3">


                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[0]['slider_1'] ?> " alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[0]['slider_2'] ?>" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[0]['slider_3'] ?>" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                            </div>

                            <div class="col-10 offset-1 offset-sm-0 col-sm-12 col-lg-6 mt-2 d-flex flex-column justify-content-center align-content-center">
                                <div class="mu-business-content ">
                                    <h2 class="text-center"><strong>Apoyo a comunidades rurales</strong></h2>
                                    <p>
                                        <?= $resulSetArticle[0]['description_es'] ?>
                                    </p>
                                </div>
                            </div>
                    </div>


                    </div>
                    </div>
            </div>
        </div>

        <div class="container mt-5 ">
            <div class="row d-flex">
                <div class="col-10 offset-1 offset-sm-0 col-sm-12 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-content-center">
                        <div class="mu-business-content">
                            <h2 class="text-center"><strong>Al rescate de nuestro algodón nativo orgánico</strong></h2>
                            <p>
                                <?= $resulSetArticle[1]['description_es'] ?>
                            </p>
                        </div>
                </div>
                <div class="col-10 offset-1 offset-lg-0 col-lg-6 order-1 order-lg-2">

                    <div id="cc" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[1]['slider_1'] ?> " alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[1]['slider_2'] ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/public/lazosPublic/img/articles/<?= $resulSetArticle[1]['slider_3'] ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#cc" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#cc" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <section class="onu mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <img src="/public/lazosPublic/img/onu_objetivos.png" alt="">
                </div>
            </div>
        </div>
        <div class="container onu mt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-4 col-md-2 ">
                    <img class="img-fluid" src="/public/lazosPublic/img/onu_igualdadGenero.jpg" alt="desarrollo sostenible">
                </div>
                <div class="col-4 col-md-2">
                    <img class="img-fluid" src="/public/lazosPublic/img/onu_ecosistema.jpg" alt="ecosistema">
                </div>
                <div class="col-4 col-md-2">
                    <img class="img-fluid" src="/public/lazosPublic/img/onu_desarrolloSostenible.jpg" alt="First slide">
                </div>
            </div>
        </div>

        <!--Cumplimos con uno de los objetivos de desarrollo sostenible de la ONU, la igualdad de género.
                        Cumplimos con los objetivos de desarrollo sostenible de la ONU, producción y consumo responsable y vida de
                                    ecosistemas terrestres.<br><br>
                        -->
    </section>


    <section class="contact" id="CONTACT">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 offset-md-0 col-md-12 text-center">
                    <div class="row mt-4 d-flex justify-content-center ">
                        <h3 class="Main-programs__title text-center text-wrap mb-sm-5">CONTACTO</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 d-block d-md-none ">
                    <div class="text-center mt-4 mt-sm-0">
                        <p class="">Teléfono : +51 970 505 255</p>
                    </div>
                    <div class="text-center">
                        <p>Correo : info@vilarthe.co</p>
                    </div>
                    <div class=" text-center">
                        <p>Dirección : Chiclayo, Perú</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-10 offset-1 offset-sm-0 col-sm-12 col-md-3  d-none d-md-block">
                    <div class="single_contact_info" style="padding-top: 20px;">
                        <h2 class="">Teléfono</h2>
                        <p style="text-align: center;">+51 970 505 255</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Correo</h2>
                        <p style="text-align: center;">info@vilarthe.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Dirección</h2>
                        <p style="text-align: center;">Lambayeque, Perú</p>
                    </div>
                </div>

                <div class="col-10 offset-1 offset-sm-0 col-sm-12 col-md-9 ">
                    <form action="/lazos/email" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required title="Ingrese su nombre">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Correo" required>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" name="message" rows="25" cols="10" placeholder="  Mensaje..." required></textarea>
                                <input type="submit" class="btn btn-default submit-btn form_submit" name="submit" value="Enviar">
                                <!-- <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>   -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>estamos siempre dispuestos para atenderte</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2 offset-md-0 col-md-12 text-center">
                        <div class="footer_logo   wow fadeInUp animated">
                            <img class="img-fluid" src="/public/lazosPublic/img/logoFondoClaroLetraGris.png" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center   wow fadeInUp animated">
                        <div class="social">
                            <h2>Síguenos en nuestras redes</h2>
                            <ul class="icon_list">
                                <li><a href="http://www.fb.com" target="_blank"><i class="icon-facebook"></i></a></li>
                                <li><a href="http://www.youtube.com" target="_blank"><i class="icon-youtube"></i></a></li>
                                <li><a href="http://www.youtube.com" target="_blank"><i class="icon-instagram"></i></a></li>
                                <!-- <li><a href=""><i class="fa fa-dribbble"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1 offset-md-0  col-md-12 text-center">
                        <div class="copyright_text">
                            <p>Copyright © <?= date("Y") ?> - Vilarthe. All rights reserved.</p>
                            <p>&copy; Developed By <a href="http://www.ticognitivas.com" target="_blank">TIcognitivas</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/public/libraries/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--script src="public/libraries/js/popper.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/bootstrap.min.js"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/lazosPublic/js/main.js"></script>
    <script src="/public/lazosPublic/js/script_es.js"></script>
    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script!-->
</body>
</html>