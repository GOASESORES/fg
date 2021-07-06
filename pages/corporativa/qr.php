<?php

include_once '../../includes/user.php';
include_once '../../includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
   






?>
<?php
	//Agregamos la libreria para genera códigos QR
	require "../../assets/libraries/phpqrcode/qrlib.php";    
	
	
	
	 
			  
	require('../bd/conexion.php');

 $empresa=$user->getempresa();
$quera="SELECT * FROM usuario WHERE state_fsc='activo'  ORDER BY `usuario`.`id_usuario` DESC";
$caa=$mysqli->query($quera);
while($rov=$caa->fetch_assoc()){
$id=$rov['id_usuario'];




			  
	
	
	
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = '../../uploads/usuarios/qr/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.$id.'.png';
 
        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = "http://192.168.1.79:8080/secur/secur/pages/corporativa/usuariover.php?valor=$id"; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
        //Mostramos la imagen generada
	 //echo '<img src="'.$dir.basename($filename).'" /><hr/>';


}	 
?>
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