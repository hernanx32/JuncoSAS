<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Inicio de Sesión';


cabezera($titulopag, $datos_nombempresa);

$scr=$_GET[scr];
if($scr=='logout'){
	session_destroy();
	echo 'Usuario Deslogeado';
	
}elseif ($scr=='logeo'){ 
	
$usuario = $_POST['usuario'];   	$clave = $_POST['clave'];
$usuario = stripslashes($usuario);  $clave = stripslashes($clave);
	
	echo 'Logeando Usuario'.$usuario;
	
}else
{
	require_once("SCR/login.php");
	login($datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy);
	
	}
	
?>
