<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stilo.css">
    <title>Ingresar</title>
</head>
<body>
    <?php require './cabecera.php' ?>
    <h1>Login</h1>
    <span> O tambien puedes <a href="registro_usu.php"> Registrarte </a></span>
    <form action="login_usu.php" method="POST">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="password" name="contra" placeholder="Ingrese su contraseña">
        <input type="submit" value="Enviar" name="register">
    </form>
    <?php include 'logear_usu.php';
    require 'pie.php';
    ?>
</body>
</html>