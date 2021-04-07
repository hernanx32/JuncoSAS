<?PHP session_start();
require_once("funciones.php");
$titulopag='INICIO';

cabezera($titulopag, $datos_nombempresa);	

if($scr=='logout'){
	session_destroy();
}



?>
