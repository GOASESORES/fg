<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

 $dato=$_POST['id'];
 $dato1=$_POST['nombre'];
 $dato2=$_POST['costos'];
 $dato3=$_POST['ciudad'];
 $dato4=$_POST['direccion'];
  $dato5=$_POST['responsable'];
   $dato6=$_POST['cargo'];
 
 require('../bd/conexion.php');
 $que="UPDATE `centro` SET `nombre`='$dato1',`costos`='$dato2',`ciudad`='$dato3',`direccion`='$dato4',`responsable`='$dato5',`cargo`='$dato6' WHERE id_centro='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado la informacion de un centro de trabajo',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>