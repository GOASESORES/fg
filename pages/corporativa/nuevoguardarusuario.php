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
   
  $ruta="../../uploads/usuarios";
   $ruta=$ruta.'/'.$datoimagen;
  move_uploaded_file($datoarchivo,$ruta);

 $dato12=$_POST['permiso1'];
 $dato13="0";
 $dato14="0";
 $hoy = date("Y-m-d H:i:s"); 

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

 $dato21=$_POST['password'];
 $hash = md5 ($dato21);
  $dato22=$_POST['permiso'];
  if(empty($dato22)){
	  $dato22="0";
  }
  $dato23=$_POST['permis'];
   if(empty($dato23)){
	  $dato23="0";
  }
  $dato24=$_POST['permiso2'];
   if(empty($dato24)){
	  $dato24="0";
  }
  $coma=",";
 echo $permisos= $dato22.$coma.$dato23.$coma.$dato24;
 
$empresa=$user->getempresa(); 


$queb="INSERT INTO `usuario`(`id_usuario`, `nombre`, `apellido`, `email`, `password`, `identificacion`, `cargo`, 
`telefono`, `celular`, `nacimiento`, `rol`, `foto`, `area`, `centro`, `sede`, `permisos`, `empresa`, `state_fsc`,
 `created_by`, `created_at`, `online`, `current_session`, `lider_sst`, `cedula`) 
VALUES (NULL,'$dato13','$dato14','$dato17','$hash','$dato15','$dato16',NULL,NULL,NULL,'$dato52','$datoimagen','$dato50','$dato51',NULL,'$permisos','$empresa','inactivo','0','0','0','0','$dato53','$dato15')";
 $resultadoa=$mysqli->query($queb);
 
 
 
 
 include "../../assets/libraries/email/class.phpmailer.php";
include "../../assets/libraries/email/class.smtp.php";

$email_user = "securapp@prlcol.co";
$email_password = "PRLCOL123456";
$the_subject = "Active su cuenta SECURAPP";
$address_to = "securapp@prlcol.co";
        $from_name = "SECURAPP";
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 0;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.zoho.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;


$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress ($dato17 );// recipients email

$phpmailer->Subject = $the_subject;	
$phpmailer->Body .= '
 
 
 <!DOCTYPE html>
<html>
    <head>
        <title>Securapp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style type="text/css">
            body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
            table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} 
            img{-ms-interpolation-mode: bicubic;} 

            img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
            table{border-collapse: collapse !important;}
            body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            @media screen and (max-width: 525px) {

                .wrapper {
                    width: 100% !important;
                    max-width: 100% !important;
                }

                .logo img {
                    margin: 0 auto !important;
                }

                .mobile-hide {
                    display: none !important;
                }

                .img-max {
                    max-width: 100% !important;
                    width: 100% !important;
                    height: auto !important;
                }

                .responsive-table {
                    width: 100% !important;
                }

                .padding {
                    padding: 10px 5% 15px 5% !important;
                }

                .padding-meta {
                    padding: 30px 5% 0px 5% !important;
                    text-align: center;
                }

                .padding-copy {
                    padding: 10px 5% 10px 5% !important;
                    text-align: center;
                }

                .no-padding {
                    padding: 0 !important;
                }

                .section-padding {
                    padding: 50px 15px 50px 15px !important;
                }

                .mobile-button-container {
                    margin: 0 auto;
                    width: 100% !important;
                }

                .mobile-button {
                    padding: 15px !important;
                    border: 0 !important;
                    font-size: 16px !important;
                    display: block !important;
                }

            }

            div[style*="margin: 16px 0;"] { margin: 0 !important; }
        </style>
    </head>
    <body style="margin: 0 !important; padding: 0 !important;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td bgcolor="#ffffff" align="center">        
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
                        <tr>
                            <td align="center" valign="top" style="padding: 15px 0;" class="logo">
                                <a href="<?php echo base_url();?>" target="_blank">
                                    <img alt="Logo" src="../../assets/img/logo-expand.png" border="0">
                                </a>
                            </td>
                        </tr>
                    </table>            
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center" style="font-size: 32px;  font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: #000;" class="padding-copy">
                                            Hola <strong style="color: #00ACFF"> '.$dato13.' </strong></td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
                                            Estamos emocionados de que comiences. Ahora puedes acceder a <strong style="color: #FF7800">SECUR APP</strong>. Solo debes hacer clic en el botón de abajo.</td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
                                            Ten en cuenta los Siguientes Datos:
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;" class="padding">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                        <tr>
                            <td style="padding: 10px 0 0 0; border-top: 1px">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td valign="top" class="mobile-wrapper">
                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                                <tr>
                                                    <td style="padding: 0 0 10px 0;">
                                                        <table cellpadding="0" style="margin-top: 10px; " cellspacing="0" border="0" width="100%">
                                                            <tr>
                                                                <td align="center" style=" font-weight: bold; font-family: Arial, sans-serif; color: #000; font-size: 24px;">
                                                                    USUARIO
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                                <tr>
                                                    <td style="padding: 0 0 10px 0;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="mobile-button-container">
                                                            <tr>
                                                                <td align="center" style="border-radius: 3px;" bgcolor="#00ACFF">
                                                                    <a style="font-size: 16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #00ACFF; display: inline-block;" class="mobile-button">
                                                                        '.$dato17.'
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                                <tr>
                                                    <td style="padding: 0 0 10px 0;">
                                                        <table cellpadding="0" style="margin-top: 10px; " cellspacing="0" border="0" width="100%">
                                                            <tr>
                                                                <td align="center" style=" font-weight: bold;font-family: Arial, sans-serif; color: #000; font-size: 24px;">
                                                                    CONTRASEÑA
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                                <tr>
                                                    <td style="padding: 0 0 10px 0;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="mobile-button-container">
                                                            <tr>
                                                                <td align="center" style="border-radius: 3px;" bgcolor="#00ACFF">
                                                                    <a style=" font-weight: bold;font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #00ACFF; display: inline-block;" class="mobile-button">
                                                                         '.$dato21.'
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                        
                    </table>
                </td>
            </tr>            
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                        <tr>
                            <td align="center">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center" style="padding-top: 25px;" class="padding">
                                            <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                <tr>
                                                    <td align="center" style="border-radius: 3px;" bgcolor="#FF7800">
                                                        <a href="" target="_blank" style=" font-weight: bold;font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #FF7800; display: inline-block;" class="mobile-button">
                                                            ACCEDE A SECUR APP
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>            
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666; font-style: italic;" class="padding-copy">
                                                        Si no has podido acceder por favor copia y pega el siguiente enlace en tu navegador:
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666; font-style: italic;" class="padding-copy">
                                                        <strong style="color: #000"></strong>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666; font-style: italic;" class="padding-copy">
                                                        Si tienes alguna pregunta o algún inconveniente en el 
                                                        proceso por favor responde este mensaje.                                                    
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666; font-style: italic;" class="padding-copy">
                                                        Estaremos atentos a responder tus solicitudes.
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>  
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                        <tr>
                            <td align="left">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left" class="padding">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666; font-style: italic;" class="padding-copy">
                                                        Equipo de <strong style="color: #00ACFF"> GO ASESORES</strong>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>            
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                        <tr>
                            <td align="left">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="left" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #7D7D7D; display: inline-block;" class="mobile-button" bgcolor="#7D7D7D" >
                                                        Recibiste este correo electrónico porque acabas de registrarte en SECUR APP para la creación de una cuenta nueva.
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>            
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" align="center" style="padding: 20px 0px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;" class="responsive-table">
                        <tr>
                            <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
                                SECUR APP®  es una marca registrada de <strong style="color: #00ACFF">GO ASESORES</strong>
                                <br>
                                Todos los derechos reservados 2021
                            </td>
                        </tr>
                    </table>            
                </td>
            </tr>
        </table>
    </body>
</html>';

 $phpmailer->IsHTML(true);

$phpmailer->Send();
 
 //Agregamos la libreria para genera códigos QR
	require "../../assets/libraries/phpqrcode/qrlib.php";    
	
	
	
	 
			  
	require('../bd/conexion.php');

 $empresa=$user->getempresa();
$quera="SELECT * FROM usuario  ORDER BY `usuario`.`id_usuario` DESC";
$caa=$mysqli->query($quera);
$rov=$caa->fetch_assoc();
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



 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a creado un nuevo usuario',
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