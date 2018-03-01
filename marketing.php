<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="https://fonts.googleapis.com/icon?family=Material+Icons" href="stylesheet">
    <link rel="icon" href="./img/logo1.png">
    <title>Marketing</title>
</head>

<body>
    <!--NAV-->
    <?php include './components/header.php'?>

    <section class="destacada">
        <div class="pattern"></div>
        <img src="img/marketing.jpg" class="img-fluid" alt="Responsive image">
        <div class="contenido">
            <h1 class="text-center"><span>Marketing Digital</span></h1>
        </div>
    </section>
    <div class="container" style="margin-top:2rem;margin-bottom:2rem;">
        <div class="row featurette margin-2">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Marketing Online. <span class="text-muted">Aumenta el tráfico a tu sitio web!</span></h2>
                <p class="lead" align="justify">Desde DevsStore te ayudamos a crear tu estrategia de Marketing Online para aumentar el tráfico a tu sitio web, tu presencia en la redes sociales y promocionar tus productos o servicios.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="img/icp-seo.png" alt="Generic placeholder image">
            </div>
        </div>

        <div class="row featurette margin-2">
            <div class="col-md-7">
                <h2 class="featurette-heading">Posicionamiento <span class="text-muted">SEO.</span></h2>
                <p class="lead" align="justify">Actualmente, debido al gran número de empresas que hay en la red, el posicionamiento SEO es fundamental para cualquier empresa que enfoque su publicidad en internet. Si quieres que te encuentren en Google no es suficiente com tener una página en las posiciones del 60 en adelante, ya que la mayoría de los usuarios no se molesta en pasar de las primeras páginas.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="img/seo.jpg" alt="Generic placeholder image">
            </div>
        </div>
        <div class="row featurette margin-2">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">E-Mail  <span class="text-muted">Marketing.</span></h2>
                <p class="lead" align="justify">Llegue a más clientes a través de una campaña de E-mail Marketing. El e-mail es el medio de comunicación más utilizado en la actualidad, por ello con una campaña de marketing online podemos llegar a un gran número de clientes e incrementar nuestro volumen de ventas. Ofrecemos un servicio inmediato, atractivo, efectivo, y autorizado a nuestros clientes.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="img/email.jpg" alt="Generic placeholder image">
            </div>
        </div>
    </div>
    <?php include_once './components/footer.php'?>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>