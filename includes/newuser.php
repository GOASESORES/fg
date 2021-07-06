<?php
include_once 'includes/index2.php';
include_once 'includes/guardar.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';

}else if(isset($_POST['nombreusuario']) && isset($_POST['password'])){
    
    $userForm = $_POST['nombreusuario'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/index2.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "No ha introducido ningun usuario";
        include_once 'vistas/index2.php';
    }
}else{
    echo "Usuario Registrado";
    
}



?>