<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

$dato1=$_POST['nombre'];
 $dato2=$_POST['nit'];
 $dato3=$_POST['direccion'];
 $dato4=$_POST['representante'];
 $dato5=$_POST['ciudad'];
 $dato6=$_POST['id'];
 
 
 
 require('../bd/conexion.php');

 
$quera="SELECT * FROM usuario WHERE id_usuario='$dato4' ";
$caa=$mysqli->query($quera);
$rov=$caa->fetch_assoc();
	$cargo=$rov['cargo'];
	
	
 
 require('../bd/conexion.php');
 $que="UPDATE `grupo` SET `nombre`='$dato1',`nit`='$dato2',`ciudad`='$dato5',
 `direccion`='$dato3',`representante`='$dato4',`cargo`='$cargo' WHERE id_grupo='$dato6'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado la informacion de un grupo empresarial',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>