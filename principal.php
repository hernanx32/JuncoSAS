<?PHP session_start();
require_once("fns.php");
conexion_db($datos_direip, $datos_usuariodb, $datos_clavedb, $datos_database);
$titulopag='BIENVENIDOS';
cabezera($titulopag , $datos_nombempresa);
$sms=$_GET[sms];
?> 
<script type="text/javascript" src="js/detectmobile.js"></script>
<script type="text/javascript" src="fns/validadores.js"></script>
<table width="750" height="165" border="1" align="center">
	<tr>
		<td colspan="3" align="center"><img src="Img/logo750x250.png" width="750" height="250" /></td>
	</tr>
</table>
Menu 1
Menu 2




<?PHP 
//$formpos Inidica la postura del curso en el Formulario	
//$formnomb Inidica la postura del curso en el Formulario	
$formpos = 'usuario';
$formnomb = 'form1';	
pie($formnomb, $formpos, $datos_nombempresa, $datos_localidad, $datos_copy, $datos_ver, $datos_database, $datos_direip, $estado_conexion); 
?>	