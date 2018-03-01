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
    <title>Desarrollo Móvil</title>
</head>

<body>
    <!--NAV-->
    <?php include './components/header.php'?>

    <div class="video-header wrap">
	<div class="fullscreen-video-wrap">
        <video src="img/easy-v1.mp4" autoplay loop></video>
    </div>
	<div class="header-overlay">
		<div class="header-content" style="padding:0px;">
			<section class="destacada">
                <div class="contenido">
                    <h1 class="text-center"  style="font-family: sans-serif;">Desarollo Móvil</h1>
                    <p style="color:#fff">Si piensas desarrollar una aplicación móvil para tu negocio o para un proyecto en particular, es importante que conozcas cuáles son las plataformas móviles más populares. Así puedes tener una mejor idea sobre cuál plataforma utiliza tu mercado objetivo.</p>
                </div>
            </section>
		</div>
	</div>
</div>
<div class="container">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Desarrollo de aplicaciones<span
                            class="text-muted"> Móviles.</span></h2>
                <p class="lead">Hoy en día, con el avance tecnológico de los smarthphones y tablets, las posibilidades en este campo son infinitas, desde una app para la gestión de tu empresa hasta app para recibir alertas de distintos servicios de tu web y no perderte nada estés donde estés. <br> En DevsStore sea cual sea tu caso lo cubrimos, desarrollamos APPS  para su publicación en los stores, y APPS para uso internos de empresa, tan solo tienes que contarnos tu necesidad y nosotros te orientamos en este complejo campo y te presentamos un proyecto acorde a tus necesidades ¿APP IOS y Android , sólo Android, sólo IOS, modifico mi plataforma actual para la APP, etc?.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img style="display: block;margin: 50% 0px;" class="featurette-image img-fluid " src="img/ser-p-m1.png"
                     alt="Generic placeholder image">
            </div>
        </div>

</div>
<div class="container" style="margin-bottom:2rem;">
        <div class="row">
        <div class="col-lg-12">
            <h2 class="featurette-heading text-center" style="margin:0 0 2rem 0">Nuestros<span
                            class="text-muted"> Skills </span></h2>
        </div>
        <div class="col-lg-3">
                <div class="card mi-card">
                    <img class="card-img-top" src="img/Angular.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Angular</h5>
                        <p class="card-text text-center">Utilizamos Angular para crear y reutilizar su código y capacidades para crear aplicaciones para cualquier destino de despliegue. Para web, web móvil, dispositivo móvil nativo y escritorio nativo.</p> </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mi-card">
                    <img class="card-img-top" src="img/ionic_framework.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ionic</h5>
                        <p class="card-text text-center">Creamos aplicaciones asombrosas en una base de código. Desde los servicios de código abierto hasta los profesionales, Ionic nos ayuda a crear, implementar, probar y monitorear aplicaciones más fácil que nunca.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mi-card">
                    <img class="card-img-top" src="img/NativeScript.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">NativeScript</h5>
                        <p class="card-text text-center">Por qué necesitas NativeScript? Interfaz de usuario hermosa, accesible, nativa de la plataforma, sin visitas a la web. Defina una vez y permita que NativeScript se adapte para ejecutarse en todas partes, o adapte la interfaz de usuario a dispositivos y pantallas específicos.</p>


                        

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mi-card">
                    <img class="card-img-top" src="img/android.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo Nativo</h5>
                        <p class="card-text text-center">Android Studio proporciona las herramientas más rápidas para crear apps en todas las clases de dispositivos Android. La edición de códigos de primer nivel,un sistema de compilación flexible e implementación te permiten concentrarte en la creación de aplicaciones únicas y de alta calidad.</p>

                        </div>

                        
                    </div>

                </div>
            </div>
        </div>
</div>
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
                    <?php
                        include './components/formulario_contacto.php';
                    ?>
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