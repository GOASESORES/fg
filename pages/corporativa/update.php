<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php

 $dato=$_POST['id'];
 $dato1=$_POST['tipo'];
 $dato2=$_POST['nombre'];
 $dato3=$_POST['nit'];
 $dato4=$_POST['grupos'];
 $dato5=$_POST['representante'];
 $dato6=$_POST['direccion'];
 $dato7=$_POST['ciudad'];
 $dato8=$_POST['telefono'];
 $dato9=$_POST['sector'];
 $dato10=$_POST['trabajadores'];
 $dato11=$_POST['arl'];
 require('../bd/conexion.php');
 $que="UPDATE `cliente` SET tipo='$dato1',nombre='$dato2',nit='$dato3',
 pertenece_grupo='$dato4',representante='$dato5',direccion='$dato6',ciudad='$dato7',telefono='$dato8',sector='$dato9',
 trabajadores='$dato10',
 arl='$dato11' WHERE id_cliente='$dato'";
  $resultado=$mysqli->query($que);
 ?>
  <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado la informacion de un cliente',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>