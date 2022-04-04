<?php
    session_start();
    if(!isset($_SESSION['fun'])){
        header("location:login_usu.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="icon" href="logos/favicon.png">
    <link rel="stylesheet" href="sutilo/cobecera.css">
    <link rel="stylesheet" href="sutilo/estilo.css">
    <link rel="stylesheet" href="sutilo/homburger.css">
    <link rel="stylesheet" href="sutilo/barba.css">
    <link rel="stylesheet" href="sutilo/cubito.css">
    <link rel="stylesheet" href="sutilo/corrucel.css">
    <link rel="stylesheet" href="sutilo/404.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
</head>
<body data-barba="wrapper">
    <div data-barba="container" data-barba-namespace="home">
        <?php require 'body/cabecera.php' ?>
        <div>
            <h1>Bienvenido a Koinos</h1>
            <h2>Pronto estaremos contigo conectando tu futuro</h2>  
        </div>
        <?php require ("body/caroucel.php")?>
        <hr>
        <?php require ("body/cubitos.php")?>
        <?php require 'body/pie.php'; ?>
    </div>
    <script src="js/corrucel.js"></script>
    <script type="text/javascript" src="js/barba.min.js"></script>
    <script type="text/javascript" src="js/cestom.js"></script>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <script src="js/mano.js"></script>
</body>
</html>