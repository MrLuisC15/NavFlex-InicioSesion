<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cerrando sesión...</h2>
    <?php
        session_start();
        if(!isset($_SESSION["admin"])){
            header("Location:index.php");
        }
        unset($_SESSION["admin"]);
        header("Refresh:5");
    ?>
</body>
</html>