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




 $hoy = date("Y-m-d H:i:s"); 

require('../bd/conexion.php');


 $dato1=$_POST['nombre'];
 $dato2=$_POST['costos'];
 $dato3=$_POST['ciudad'];
 $dato4=$_POST['direccion'];
  $dato5=$_POST['responsable'];
   $dato6=$_POST['cargo'];
 $empresa=$user->getempresa(); 


$queb="INSERT INTO `centro`(`id_centro`, `nombre`, `costos`, `ciudad`, `direccion`, `responsable`, `cargo`, `empresa`, `state_fsc`,
 `created_by`, `created_at`) VALUES (NULL,'$dato1','$dato2','$dato3','$dato4','$dato5',
 '$dato6','$empresa','activo','0','$hoy')";
 $resultadoa=$mysqli->query($queb);
 
 
 

 


 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a creado un nuevo centro',
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