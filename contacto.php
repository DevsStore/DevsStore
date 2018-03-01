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
        
        
        <div style="max-width:15rem;display:block;margin:0 auto;">
            
            
            <?php if(!empty($_GET['status'])  && $_GET['status'] == 'success'){  ?>
            <div class="alert alert-success" role="alert">
                Te respondremos lo mas rápido que podemos!
            </div>
            <?php }?>
            <?php if(!empty($_GET['status'])  && $_GET['status'] == 'error'){  ?>
            <div class="alert alert-danger" role="alert">
                No se pudo enviar los datos correctamente, intente más tarde.
            </div>
            <?php }?>
            
        </div>


            <h1 class="text-center" style="font-family: sans-serif;">¿Listo para comenzar? Contactános</h1>
        </div>
    </section>
    <div class="informacion">
        <div class="container">
            
            <h2 class="text-center" style="margin-top:20px;">Contactános llenando el siguiente Formulario</h2>
            <div class="row">
                <div class="col-md-8">
                    <?php include './components/formulario_contacto.php';?>
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