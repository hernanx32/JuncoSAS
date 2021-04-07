<?PHP session_start();
require_once("fns.php");
conexion_db($datos_direip, $datos_usuariodb, $datos_clavedb, $datos_database);
$titulopag='Logeando......';
cabezera($titulopag , $datos_nombempresa);

if(isset($_GET['cerrar_sesion'])){
	session_unset();
	session_destroy();
	}

if(isset($_SESSION['rol'])){
	switch($_SESSION['rol']){
		case 1:
			header('location: Principal.php');
			break;
		case 2:
			header('location: prueba.php');
			break;
		default:
		}
	}





$usuario = $_POST[usuario];
$clave = $_POST[clave];


	

$formini = 'usuario';
pie($formini, $datos_nombempresa, $datos_localidad, $datos_copy, $datos_ver, $datos_database, $datos_direip, $estado_conexion); 
?>