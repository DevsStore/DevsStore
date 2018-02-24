<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="https://fonts.googleapis.com/icon?family=Material+Icons" href="stylesheet">
    <title>DevsStore</title>
</head>

<body>
<!--NAV-->
<?php include './components/header.php'?>
<!--BODY-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="img/OBDITW0.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Somos una agencia creativa.</h1>
                    <p class="text-center">Con una pasión por el diseño. Le ayudaremos a lograr sus objetivos y hacer crecer su negocio.</p>
                </div>
            </div>
            <div class="pattern"></div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="img/OAYTOG0.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Optimización de motores de búsqueda.</h1>
                    <p class="text-center">Es el proceso de afectar la visibilidad de un sitio web o una página web en los resultados no remunerados de un motor de búsqueda, a menudo conocidos como resultados "naturales", "orgánicos" o "obtenidos".</p>
                </div>
            </div>
            <div class="pattern"></div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="img/h_index.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Contenido Digital Personalizado</h1>
                    <p class="text-center">Creamos plataformas personalizadas para clientes que necesitan una solución específicamente diseñada para un sitio web o Aplicación Móvil.</p>
                </div>
            </div>
            <div class="pattern"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="marketing">

    <!-- Three columns of text below the carousel -->
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle img-hover" src="img/693.jpg" alt="Generic placeholder image" width="200"
                     height="200">
                <h2>Diseño Web</h2>
                <p class="text-justify">Los sitios web que producimos están limpios y frescos, cada uno diseñado de forma única. Además, nos
                    esforzamos por garantizar que todos nuestros sitios cumplan con los estándares de accesibilidad
                    exigidos por World Wide Web Consortium.
                    Nuestros sitios web se prueban en los navegadores más utilizados con diferentes resoluciones de
                    pantalla.</p>
                <p><a class="btn btn-secondary" href="desarrollo_web.php" role="button">Ver Más &raquo;</a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle img-hover" src="img/484.jpg" alt="Generic placeholder image" width="200"
                     height="200">
                <h2>Diseño Móvil</h2>
                <p class="text-justify">El mercado de los usuarios de teléfonos inteligentes cada vez es más y más grande. Cada minuto que
                    pasa, tu mercado objetivo está formando parte de esta tendencia. Por eso es importante que tengas
                    una estrategia móvil lo antes posible.
                </p>
                <p><a class="btn btn-secondary" href="desarrollo_movil.php" role="button">Ver Más &raquo;</a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle img-hover" src="img/216.jpg" alt="Generic placeholder image" width="200"
                     height="200">
                <h2>Marketing Digital</h2>
                <p class="text-justify">En la actualidad el marketing es una herramienta que todo empresario debe conocer. Sin duda, todas
                    las compañías de una u otra forma utilizan técnicas de marketing, incluso, sin saberlo. Marketing no
                    es otra cosa que la realización
                    de intercambios entre un mínimo de 2 partes de forma que se produzca un beneficio mutuo.</p>
                <p><a class="btn btn-secondary enviar" href="marketing.php" role="button">Ver Más &raquo;</a></p>
            </div>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    <!-- START THE FEATURETTES -->
    <div class="row featurette parallax img">
        <div class="col-md-12">
            <h2 class="featurette-heading">First featurette heading. <span
                        class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
    </div>


    <div class="container" style="margin-top:2rem;margin-bottom:2rem;">
        <div class="row featurette margin-2">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span
                            class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500"
                     alt="Generic placeholder image">
            </div>
        </div>

        <div class="row featurette margin-2">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="img/seo-px2v2-460x388.png"
                     alt="Generic placeholder image">
            </div>
        </div>
    </div>


    <!-- /END THE FEATURETTES -->

</div>
<!-- /.container -->
<div class="container margin-2">
    <div class="col-md-7">
        <h2 class="featurette-heading" align="center">Porque elergírnos. <span class="text-muted">Compruebelo usted mismo.</span>
        </h2>
    </div>
    <div class="row">
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/px-dn05.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7 eligenos">
            <ul style="display:block;margin:auto">
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Los sitios web que
                    hacemos están optimizados
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Nuestra metodología
                    ágil de desarrollo es probada y efectiva
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Sin comprometer la
                    calidad del sitio web
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Somos rápidos en
                    responder a las necesidades de los clientes
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Ofrecer servicios y
                    soluciones adecuados para su negocio
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> No hay problema ya
                    que contamos con un equipo de desarrollo web experto
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Construimos sitios
                    web responsivos que se adaptan automáticamente a las pantallas del dispositivo
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: tomato; display:inline-block;"></i> Amplia experiencia
                    en gestión de proyectos

                </li>
            </ul>
        </div>

    </div>
</div>
<!-- FOOTER -->
<section class="contacto text-center">

    <div class="borde">
        <h2 class="blanco">¿Estás listo para comenzar? podemos ayudarte.</h2>
        <p>Contactános en el siguiente enlace, cuéntanos de tu proyecto y nos pondremos en contacto a la brevedad</p>

        <a data-toggle="modal" data-target=".modal-contacto" class="btn btn-default btn-lg">Solicitar Cotización</a>
    </div>
</section>
<div class="modal fade modal-contacto" tabindex="-1" role="dialog" aria-labelledby="ContactoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Contáctanos llenando el siguiente Formulario</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span
                            class="sr-only">Cerrar</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="correo" class="col-sm-2 control-label">Correo</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="correo" placeholder="Correo Electrónico">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" name="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mensaje" class="col-sm-2 control-label">Mensaje</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-default enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include_once './components/footer.php'?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>