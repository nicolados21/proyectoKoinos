
<?php
include_once 'user.php';
// Comiendo de la sesión
session_start();
// Guardar datos de sesión
$_SESSION["usuario"] -> setNombre();

echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
?>
<a href="segundo.php">Segundo!</a>
<br>
<?php
// Continuamos la sesión
// Devolver los valores de sesión
echo "Nombre de usuario: " . $_SESSION["usuario"];