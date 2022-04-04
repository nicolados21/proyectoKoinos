<?/*
require_once 'user.php';
require_once 'cabecera.php';
$userSession = new UserSession();
$user = new Usuario();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setID($userSession->getCurrentUser());
    include_once 'vistas/home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'index.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login_usu.php';
    }
}else{
    //echo "login";
    include_once 'login_usu.php';
}

*/?>
    
