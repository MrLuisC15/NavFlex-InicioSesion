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
            <a href="../index.php">Inicio</a>
            <a href="../index.php">Quienes somos</a>
            <?php
                session_start();
                        
                if(isset($_SESSION["admin"])){
                    if($_SESSION["admin"]==1){
                        echo '<a href="../cerrarSesion.php" class="noCambia">Cerrar Sesión</a>';
                        echo '<a href="index.php">Gestion de Empleados</a>';
                    }
                    
                }
                else {
                    echo '<a href="../iniciarSesion.php" class="noCambia">Iniciar Sesión</a>';
                }
            ?>
        </nav>
        <aside></aside>
        <article>
            <table>
                <tr>
                    <th>
                        DNI
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Editar
                    </th>
                    <th>
                        Eliminar
                    </th>
                </tr>
                <?php
                    
                    

                    $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);
        
                    $resultado = mysqli_query($conexion, 'select * from empleados;');
                
                    $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);

                    for($i=0;$i<mysqli_fetch_lengths($resultado);$i++){
                        echo '<tr>';
                        echo '<td>'.$fila[1].'</td>';
                        echo '<td>'.$fila[2].'</td>';
                        echo '<td><a href="editar.php?id='.$fila[0].'"><img src=img/editar.png /></a></td>';
                        echo '<td><a href="borrar.php?id='.$fila[0].'"><img src=img/borrar.png /></a></td>';
                        echo '</tr>';
                        $fila =mysqli_fetch_array($resultado, MYSQLI_NUM);
                    }


                ?>
            </table>
        </article>
    </body>
</html>
