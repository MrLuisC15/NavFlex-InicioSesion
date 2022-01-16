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
        <a href=#>Añadir</a>
        <a href=index.php>Visualizar</a>
    </nav>
    <?php
        

        echo '<form action="enviar.php" method="POST">';
        echo '<label>DNI</label><br />';
        echo '<input type=text required name=dni><br /><br />';
        echo '<label>Nombre</label><br />';
        echo '<input type=text required name=nombre><br /><br />';
        echo '<label>Correo</label><br />';
        echo '<input type=text name=correo><br /><br />';
        echo '<label>Telefono</label><br />';
        echo '<input type=text required name=telefono><br /><br />';
        echo '<input type=submit value=Enviar>';
        echo '<input type=reset>';
        echo '</form>';

    ?>
</body>
</html>