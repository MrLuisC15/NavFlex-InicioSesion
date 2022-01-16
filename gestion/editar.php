<!DOCTYPE html>
<?php
    require('configdb.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de empleados</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <h1>Gestión de Empleados</h1>
    </header>
    <nav>
        <a href=anadir.php>Añadir</a>
        <a href=#>Visualizar</a>
    </nav>
    <?php
        $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);
       
        
        $resultado = mysqli_query($conexion, 'select * from empleados where IdEmpleado=\''.$_GET['id'].'\';');
        $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);

        echo '<form action=update.php method=POST>';
        echo '<label>DNI</label><br />';
        echo '<input type=text required placeholder='.$fila[1].'><br /><br />';
        echo '<label>Nombre</label><br />';
        echo '<input type=text required placeholder='.$fila[2].'><br /><br />';
        echo '<label>Correo</label><br />';
        echo '<input type=text placeholder='.$fila[3].'><br /><br />';
        echo '<label>Telefono</label><br />';
        echo '<input type=text required placeholder='.$fila[4].'><br /><br />';
        echo '<input type=submit value=Modificar>';
        echo '<input type=reset>';
        echo '</form>';

    ?>
</body>
</html>