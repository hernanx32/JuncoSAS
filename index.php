<?PHP session_start();
require_once("funciones.php");
$titulopag='Inicio de Sesión';

$scr=$_GET[scr];
if($scr=='logout'){
	session_destroy();
	echo 'Usuario Deslogeado';
	
}elseif ($scr=='logeo')
{ 
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$usuario = stripslashes($usuario);
$clave = stripslashes($clave);
	echo 'Logeando Usuario'.$usuario;
}else {
	
	echo 'Inicio Normal';
	
}
cabezera($titulopag, $datos_nombempresa);	
?>
