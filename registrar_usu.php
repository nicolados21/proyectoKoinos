<?php
require_once 'user.php';
if (isset($_POST['register'])){
    if  (strlen($_POST['name'])>=1 &&
         strlen($_POST['email'])>=1 &&
         strlen($_POST['contra'])>=1) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['name']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['contra']);
            $save = $usuario->save();
            if ($save){
                ?>
                <h3 class = "ok">Te has registrado correctamente</h3>
                <?php
            }else{
                ?>
                <h3 class = "bad">Ha ocurrido un error</h3>
                <?php
            }
    }else{
        ?>
        <h3 class = "bad">Por favor complete todos los campos</h3>
        <?php
    }
}
?>