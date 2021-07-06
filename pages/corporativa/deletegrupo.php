<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

 $dato=$_GET['valor'];
 
 require('../bd/conexion.php');
 $que="UPDATE `grupo` SET state_fsc='inactivo' WHERE id_grupo='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a eliminado este grupo empresarial',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-1)
});
</script>



</html>
</html>