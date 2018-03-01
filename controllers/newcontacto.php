<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];
    
    //jolver
    //$conexion = new mysqli("localhost", "root", "root", "devsstore");
    //nestor
    $conexion = new mysqli("localhost", "root", "", "devsstore");

    if($conexion){
        $query="INSERT INTO contacto VALUES(null,'$nombre','$correo','$telefono','$mensaje')";
        if($conexion->query($query)){
            header("location:../contacto.php?status=success");
        }else{
            header('location:../contacto.php?status=error');
        }
        $conexion->close();    
    }else{
        header('location:../contacto.php?status=error');
    }
?>