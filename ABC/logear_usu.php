<?php

include("conexion.php");

if (isset($_POST['register'])){
    if  (strlen($_POST['email'])>=1 &&
         strlen($_POST['contra'])>=1) {
            $email = $_POST['email'];
            $contra = $_POST['contra'];
            $consulta = "SELECT id_usu, correo, contraseña FROM `datos_usu` WHERE correo='$email' AND contraseña='$contra'";
            $resultado = mysqli_query($conex,$consulta);
            $filas=mysqli_num_rows($resultado);
            if ($filas>0 && password_verify($_POST['contra'], $filas['contra'])){
                $_SESSION['user_id'] = $filas['id_usu'];
                header("location:index.php")?>
                <h3 class = "ok">Bienvenido de vuelta</h3>
                <?php
            }else{
                ?>
                <h3 class = "bad">Ha ocurrido un error, el email o la contraseña ingresadas no coinciden con nuestras bases de datos</h3>
                <?php
            }
    }else{
        ?>
        <h3 class = "bad">Por favor complete todos los campos</h3>
        <?php
    }
}

?>