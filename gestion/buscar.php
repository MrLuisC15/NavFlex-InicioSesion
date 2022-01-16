<!DOCTYPE html> <!-- Luis C Marzal -->
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
            <a href=index.php>Visualizar</a>
        </nav>
        <aside></aside>
        <article>
            <form action="buscar.php" method="POST">
                <input type="text" name="dnibusca" id="dnibusca">
                <input type="submit" value="Buscar">
            </form>
            <?php

if(isset($_POST['dnibusca']))
{
   busca();
} 

function busca(){
    
    $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);

    $resultado = mysqli_query($conexion, 'select * from empleados where DNI=\''.$_POST['dnibusca'].'\';');
echo '
<table>
    <tr>
        <th>
            DNI
        </th>
        <th>
            Nombre
        </th>
        <th>
            Correo
        </th>
        <th>
            Telefono
        </th>
    </tr>';

    $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);

    for($i=0;$i<mysqli_fetch_lengths($resultado);$i++){
        echo '<tr>';
        echo '<td>'.$fila[1].'</td>';
        echo '<td>'.$fila[2].'</td>';
        echo '<td>'.$fila[3].'</td>';
        echo '<td>'.$fila[4].'</td>';
        echo '</tr>';
        $fila =mysqli_fetch_array($resultado, MYSQLI_NUM);
    }


    echo '</table>';

    }
?>
            
        </article>
    </body>
</html>

