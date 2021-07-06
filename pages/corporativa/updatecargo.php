<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php


$dato=$_POST['id'];
 $dato2=$_POST['nombre'];

 $dato4=$_POST['descripcion'];
 
 require('../bd/conexion.php');
 $que="UPDATE `cargo` SET `nombre`='$dato2',`descripcion`='$dato4'
 WHERE id_cargo='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado la informacion de un cargo',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>