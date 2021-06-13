<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Inicio de Sesión';
cabezera($titulopag, $datos_nombempresa);

conexion($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);

$est_conex=$_POST['$est_conex'];
$mens_pri='Bienvenido al sistema de Gestion Ingrese su Usuario y clave';

$scr=$_GET[scr];
if($scr=='logout'){
	session_destroy();
	echo 'Usuario Deslogeado';
	}elseif ($scr=='logeo'){ 
	
	$usuario = $_POST['usuario'];   	$clave = $_POST['clave'];
	$usuario = stripslashes($usuario);  $clave = stripslashes($clave);
	echo 'Verificando Datos de: '.$usuario;
	
}else
{
	require_once("SCR/login.php");
	login($mens_pri, $datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy, $est_conex);	
}

?>