<?php

include_once '../../includes/user.php';
include_once '../../includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
   






?>

<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php


 





require('../bd/conexion.php');


 $dato1=$_POST['nombre'];
 $dato2=$_POST['nit'];
 $dato3=$_POST['direccion'];
 $dato4=$_POST['representante'];
 $dato5=$_POST['ciudad'];
 
 
 
 
 require('../bd/conexion.php');

 
$quera="SELECT * FROM usuario WHERE id_usuario='$dato4' ";
$caa=$mysqli->query($quera);
$rov=$caa->fetch_assoc();
	$cargo=$rov['cargo'];
	
	
	
 $empresa=$user->getempresa(); 


$queb="INSERT INTO `grupo`(`id_grupo`, `nombre`, `nit`, `ciudad`, `direccion`, `representante`,
 `cargo`, `empresa`, `state_fsc`, `created_by`, `created_at`) VALUES (NULL,'$dato1',
 '$dato2','$dato5','$dato3',$dato4,'$cargo','0','activo','0','0')";
 $resultadoa=$mysqli->query($queb);
 
 
 

 


 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a creado un nuevo grupo empresarial',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>
<?php

}else{
    //echo "login";
    
	?>
	<script>
	location.href = "../../index.php";
	</script>
	<?php
}

?>