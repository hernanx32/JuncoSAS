<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Inicio de Sesión';
cabezera($titulopag, $datos_nombempresa);

conexion($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);

if(empty($mens_pri)){
	$mens_pri='Bienvenido al sistema de Gestion Ingrese su Usuario y clave';
}

$scr=$_GET[scr];
if($scr=='logout'){
	session_destroy();
	echo 'Usuario Deslogeado';
}elseif ($scr=='logeo'){ 
	$usuario = $_POST['usuario'];   	$clave = $_POST['clave'];
	$usuario = stripslashes($usuario);  $clave = stripslashes($clave);
	echo 'Verificando Datos de: '.$usuario;

	
	//$db_conect = mysqli_connect($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);
		
	$q="SELECT COUNT(*) as contar from usuarios where usuario= '$usuario' and clave= '$clave'";
	$consulta=mysqli_query($con,$q);
	$array= mysqli_fetch_array($consulta);
	
		
	if($array['contar']>0){
		echo "Correctos";
	}else{
		echo "Incorrectos";
	}
	
	
}else
{
	require_once("SCR/login.php");
	login($mens_pri, $datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy, $est_conex);	
}

?>