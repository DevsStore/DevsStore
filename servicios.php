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
    <title>Nosotros</title>
</head>

<body>
    <!--NAV-->
    <?php include './components/header.php'?>

    <section class="destacada">
        <div class="pattern"></div>
        <img src="img/h_servicios.jpg" class="img-fluid" alt="Responsive image">
        <div class="contenido">
            <h1 class="text-center"  style="font-family: sans-serif;">Nuestros Servicios</h1>
        </div>
    </section>

    
        <div class="index-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        
                            <div class="card">
                                <img src="img/145web.jpg">
                                <h4>Desarrollo Web</h4>
                                <p>Los sitios web que producimos están limpios y frescos, cada uno diseñado de forma única. Además, nos esforzamos por garantizar que todos nuestros sitios cumplan con lo exigidos.. </p>
                                <a href="desarrollo_web.php" class="blue-button">Ver Más</a>
                            </div>
                        
                    </div>
                    <div class="col-lg-4">
                        
                            <div class="card">
                                <img src="img/mobile.jpg">
                                <h4>Desarrollo Apps</h4>
                                <p>El mercado de los usuarios de teléfonos inteligentes cada vez es más y más grande. Cada minuto que pasa, tu mercado objetivo está formando parte de esta tendencia...</p>
                                <a href="desarrollo_movil.php" class="blue-button">Ver Más</a>
                            </div>
                        
                    </div>
                    <div class="col-lg-4">
                        
                            <div class="card">
                                <img src="img/marketing1.jpg">
                                <h4>Marketing Digital</h4>
                                <p>En la actualidad el marketing es una herramienta que todo empresario debe conocer. Sin duda, todas las compañías de una u otra forma utilizan técnicas de marketing, incluso, sin saberlo... </p>
                                <a href="marketing.php" class="blue-button">Ver Más</a>
                            </div>
                        
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