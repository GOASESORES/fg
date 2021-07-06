<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

 $dato=$_POST['id'];
 $dato1=$_POST['codigo'];
 $dato2=$_POST['nombre'];
 $dato3=$_POST['telefono'];
 $dato4=$_POST['descripcion'];
 
 require('../bd/conexion.php');
 $que="UPDATE `arl` SET `codigo`='$dato1',`nombre`='$dato2',`descripcion`='$dato4',
 `telefono`='$dato3' WHERE id_arl='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado la informacion de una ARL',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>