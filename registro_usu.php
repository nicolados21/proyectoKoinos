<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logos/favicon.png">
    <title>Registro</title>
    <link rel="icon" href="logos/favicon.png">
    <link rel="stylesheet" href="sutilo/estilo.css">
    <link rel="stylesheet" href="sutilo/hamburger.css">
    <link rel="stylesheet" href="sutilo/barba.css">
    <link rel="stylesheet" href="sutilo/cabecera_3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
<body data-barba="wrapper">
<div data-barba="container" data-barba-namespace="home">
    <?php require 'body/cabecera_2.php'?>
    <br>
    <h1>Registrar</h1>
    <span> O tambien puedes <a href="login_usu.php"> Ingresar </a></span>
    <form action="registro_usu.php" method="post">
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="contra" placeholder="Contraseña">
        <input type="submit" name="register" value="Enviar">
    </form>
    <br>
    <br>
    <?php
    include("registrar_usu.php");
    include 'body/pie.php';
    ?>
    <script type="text/javascript" src="js/barba.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <script src="js/mano.js"></script>
</div>
</body>
</html>