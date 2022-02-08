<?php
    session_start();
    require 'conexion.php';
    if (isset($_SESSION['user_id'])){
        $id = $_SESSION['id'];
        $consulta = "SELECT id, email, contra FROM `datos_usu` WHERE id=$id";
        $resultado = mysqli_query($conex,$consulta);
        $user = null;
        if($resultado){
            $user=$resultado;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="./stilo.css">
    <script src="https://code.jquery.com jquery-latest.js"></script>
    <script src="./header.js"></script>
</head>
<body>
    <?php require './cabecera.php' ?>
    <?php if(!empty($user)): ?>
        <br>Bienvenido <?= $user['nombre'] ?>
        <br> Se ha logeado correctamente
        <a href="salida.php">Salir</a>
    <?php else: ?>
        <div  class="contenido wrapper">
            <h1>Ingresar o Registrarse</h1>
        </div>  
    <?php endif; 
    require 'pie.php';
    ?>
    
</body>
</html>