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


 
$datoimagen= time() . ".png";
   $datoarchivo=$_FILES['imagen']['tmp_name'];
   
  $ruta="../../uploads/arl";
   $ruta=$ruta.'/'.$datoimagen;
  move_uploaded_file($datoarchivo,$ruta);


 $hoy = date("Y-m-d H:i:s"); 

require('../bd/conexion.php');


 $dato1=$_POST['codigo'];
 $dato2=$_POST['nombre'];
 $dato3=$_POST['telefono'];
 $dato4=$_POST['descripcion'];
 $empresa=$user->getempresa(); 


$queb="INSERT INTO `arl`(`id_arl`, `codigo`, `nombre`, `descripcion`, `empresa`, `state_fsc`, 
`created_by`, `created_at`, `telefono`, `logo`) VALUES (NULL,'$dato1','$dato2','$dato4','$empresa','activo','0','0','$dato3','$datoimagen')";
 $resultadoa=$mysqli->query($queb);
 
 
 

 


 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a creado una nueva ARL',
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