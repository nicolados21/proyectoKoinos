<?php
require_once 'user.php';
if (isset($_POST['login'])){
    if  (strlen($_POST['email'])>=1 &&
         strlen($_POST['contra'])>=1) {
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['contra']);          
            $login = $usuario->login();
            if ($login){
                ?>
                <h3>Bienvenido de vuelta, de click <a href="home.php">aqui </a>para acceder</h3>
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