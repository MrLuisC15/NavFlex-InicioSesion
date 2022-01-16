<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Usuario</label>
        <input type="text" name="user" require>
        <label for="">Contraseña</label>
        <input type="text" name="password" require>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>

<?php
    if(isset($_POST["user"])){
        if($_POST["user"]=="admin"){
            if($_POST["password"]=="1234"){
                session_start();
                $_SESSION["admin"]=1;
                header("Location: index.php", 5);
            }
            else {
                echo 'Credenciales no válidas';
            }
        }
        else {
            echo 'Credenciales no válidas';
        }
    }
?>