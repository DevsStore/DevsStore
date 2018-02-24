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
    <title>Contacto</title>
</head>

<body>
    <!--NAV-->
    <?php include './components/header.php'?>

    <section class="destacada">
        <div class="pattern"></div>
        <img src="img/h_contacto.jpg" class="img-fluid" alt="Responsive image">
        <div class="contenido">
            <h1 class="text-center">¿Listo para comenzar? Contactános</h1>
        </div>
    </section>
    <div class="informacion">
        <div class="container">
            <h2 class="text-center" style="margin-top:20px;">Contactános llenando el siguiente Formulario</h2>
            <div class="row">
                <div class="col-md-8">
                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
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
                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-default enviar">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae reprehenderit ratione ipsa mollitia quaerat dolore incidunt voluptate, ex animi, labore tempora possimus odit impedit. Non illo doloribus quaerat quae eveniet!
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