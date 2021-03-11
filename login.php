<?PHP session_start();
require_once("fns.php");
conexion_db($datos_direip, $datos_usuariodb, $datos_clavedb, $datos_database);
$titulopag='BIENVENIDOS';
cabezera($titulopag , $datos_nombempresa);
$scr=$_GET[scr];
?> 

<table width="750" height="165" border="1" align="center">
	<tr>
		<td colspan="3" align="center"><img src="Img/logo750x250.png" width="750" height="250" /></td>
	</tr>
</table>
<?php 
$usuario = stripslashes($_POST['usuario']);
$clave = stripslashes($_POST['clave']);

$mysqli = new mysqli("localhost", "root", "LauLuk477", "db_junco");

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
	}
$consulta = "SELECT * FROM `usuarios` WHERE usuario = '$usuario' AND clave = '$clave'";
	
if ($resultado = $mysqli->query($consulta))
{
	if($resultado->num_rows=='1'){
		$Mensaje='Login Correcto';	
		
		header('location: Principal.php');
		
		
	switch($_SESSION['rol']){
		case 1:
			header('location: Principal.php');
			break;
		case 2:
			header('location: prueba.php');
			break;
		default:
		}
			
		
	} else{
		$Mensaje='Login Incorrecto';
		header('location: index.php?sms=error');
	}

}else{
	$Mensaje='Conexion Erronea';
	}
   
?>




<table width="759" height="73" border="1" align="center">
	<tr>
		<td height="67"><?PHP echo $Mensaje; ?></td>
  </tr>
</table>
	
<?PHP 
//$formpos Inidica la postura del curso en el Formulario	
//$formnomb Inidica la postura del curso en el Formulario	
$formpos = 'usuario';
$formnomb = 'form1';	
pie($formnomb, $formpos, $datos_nombempresa, $datos_localidad, $datos_copy, $datos_ver, $datos_database, $datos_direip, $estado_conexion); 
?>