<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php


 


require('../bd/conexion.php');


 $dato13=$_POST['nombrea'];
 $dato14=$_POST['apellidosa'];
 $dato15=$_POST['identificaciona'];
 $dato50=$_POST['areaa'];
 $dato51=$_POST['centroa'];
 $dato52=$_POST['rol'];
 $dato53=$_POST['lider'];
 $dato16=$_POST['cargoa'];
 $dato17=$_POST['correoa'];
$dato=$_POST['id'];
 

 

$queb="UPDATE usuario SET nombre='$dato13',apellido='$dato14',email='$dato17',identificacion='$dato15',cargo='$dato16',rol='$dato52',area='$dato50',centro='$dato51',cedula='$dato15' WHERE id_usuario='$dato'";
$resultadoa=$mysqli->query($queb);
 
 
 
 




 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a modificado un usuario',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>
