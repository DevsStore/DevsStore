<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="https://fonts.googleapis.com/icon?family=Material+Icons" href="stylesheet">
    <link rel="icon" href="./img/logo1.png">
    <title>Desarrollo Web</title>
</head>

<body>
    <!--NAV-->
    <?php include './components/header.php'?>

    <section class="destacada">
        <div class="pattern"></div>
        <img src="img/web1.jpg" class="img-fluid">
        <div class="contenido">
            <h1 class="text-center" style="font-family: sans-serif;">Desarrollo Web</h1>
        </div>
    </section>

    <!-- TIMELINE -->

    <section id=timeline>
        <h1>Nuestro Proceso</h1>
        <div class="demo-card-wrapper">
            <div class="demo-card demo-card--step1">
                <div class="head">
                    <div class="number-box">
                        <span>01</span>
                    </div>
                    <h2> Planificación</h2>
                </div>
                <div class="body">
                    <p>Comprender qué quiere de su sitio y cómo plantearlo para implementarlo.</p>
                    <img src="img/ser-p-s2.png" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step2">
                <div class="head">
                    <div class="number-box">
                        <span>02</span>
                    </div>
                    <h2> Desarrollo</h2>
                </div>
                <div class="body">
                    <p>Desarrollamos sistemas de gestión de contenido para clientes que necesitan más que solo lo básico</p>
                    <img src="img/desarrollo.png" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step3">
                <div class="head">
                    <div class="number-box">
                        <span>03</span>
                    </div>
                    <h2> REVISIÓN Y PRUEBA</h2>
                </div>
                <div class="body">
                    <p>Una vez que el sitio esté listo, debe verificarse y probarse para garantizar un funcionamiento sin errores.</p>
                    <img src="img/disenoweb1.png" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step4">
                <div class="head">
                    <div class="number-box">
                        <span>04</span>
                    </div>
                    <h2> LANZAMIENTO</h2>
                </div>
                <div class="body">
                    <p>Después de una prueba exitosa, el producto se entrega / implementa al cliente para su uso.</p>
                    <img src="img/device-icons.png" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step5">
                <div class="head">
                    <div class="number-box">
                        <span>05</span>
                    </div>
                    <h2> MANTENIMIENTO</h2>
                </div>
                <div class="body">
                    <p>Es un paso importante que asegura que su sitio funcione con eficiencia todo el tiempo.</p>
                    <img src="img/mtto.png" alt="Graphic">
                </div>
            </div>

        </div>
    </section>



    <?php include_once './components/footer.php'?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>