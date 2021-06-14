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
	//echo 'Verificando Datos de: '.$usuario;

	
	//$db_conect = mysqli_connect($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);
		
	$q="SELECT * from usuarios where usuario= '$usuario' and clave= '$clave' and estado = '1'";
	$consulta=mysqli_query($con,$q);
	$resltado=mysqli_num_rows($consulta);
	echo $resltado;
		
		while ($fila = mysqli_fetch_row($consulta)) {
        printf ("%s (%s)\n", $fila[0], $fila[3]);
		print("</br>");
		// liberar el conjunto de resultados 
		mysqli_free_result($consulta);
		}
		// cerrar la conexión 
		mysqli_close($con); 
				
		
}else
{
	require_once("SCR/login.php");
	login($mens_pri, $datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy, $est_conex);	
}

?>