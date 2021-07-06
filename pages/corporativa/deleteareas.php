<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

 $dato=$_GET['valor'];
 
 require('../bd/conexion.php');
 $que="UPDATE `area` SET state_fsc='inactivo' WHERE id_area='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a eliminado esta ARL',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-1)
});
</script>



</html>
</html>