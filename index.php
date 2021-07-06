<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
	
    ?>
		<script>
	location.href="pages/dashboards/dashboard.php"
</script>
<?php	

}else if(isset($_POST['nombreusuario']) && isset($_POST['password'])){
    
    $userForm = $_POST['nombreusuario'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
	
?>
		<script>
	location.href="pages/dashboards/dashboard.php"
</script>
<?php	
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'pages/general/login.php';
    }
}else{
    //echo "login";
    include_once 'pages/general/login.php';
}



?>