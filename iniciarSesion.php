<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-box">
        <h2>Inicio de sesión</h2>
        <form action="#" method="POST">
            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Usuario:</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Contraseña:</label>
            </div>
            
            <input type="reset" class="boton">
            <input type="submit" value="Iniciar sesión" class="boton">
        </form>
    </div>
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