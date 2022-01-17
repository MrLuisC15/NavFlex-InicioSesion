<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion de Empleados</title>
</head>
<body>
    <header>
        <h1>Gestión de Empleados</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Quienes somos</a>
        <?php
            session_start();
                    
            if(isset($_SESSION["admin"])){
                if($_SESSION["admin"]==1){
                    echo '<a href="cerrarSesion.php" class="noCambia">Cerrar Sesión</a>';
                    echo '<a href="gestion/index.php">Gestion de Empleados</a>';
                }
                
            }
            else {
                echo '<a href="iniciarSesion.php" class="noCambia">Iniciar Sesión</a>';
            }
        ?>

    </nav>
    <main>
        <aside>

        </aside>
        <article>

        </article>
    </main>
    <footer>

    </footer>
</body>
</html>