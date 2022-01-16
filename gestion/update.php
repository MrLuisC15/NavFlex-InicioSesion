<!DOCTYPE html>
<?php
    require('configdb.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizado</title>
</head>
<body>
    <?php
         $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);
       
        
         $resultado = mysqli_query($conexion, 'update empleados 
         set dni=\''.$_POST['dni'].'\', nombre=\''.$_POST['nombre'].'\'
         , correo=\''.$_POST['correo'].'\', telefono=\''.$_POST['telefono'].'\' 
         where IdEmpleado='.$_POST['id'].';');

        echo '<h1>Información actualizada</h1>';

        header('refresh:5 url=index.php');

    ?>
    <a href="index.php">Volver</a>
</body>
</html>
