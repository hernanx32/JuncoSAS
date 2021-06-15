<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Inicio de Sesión';
cabezera($titulopag, $datos_nombempresa);

conexion($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);

$error=$_GET[error];
if($error=='101'){
	$mens_pri='Error al Ingresar el Usuario y la Clave';
}
if(empty($mens_pri)){
	$mens_pri='Bienvenido al sistema de Gestion Ingrese su Usuario y clave';
}



$scr=$_GET[scr];
if($scr=='logout'){
	session_destroy();
	echo 'Usuario Deslogeado Correctamente';
	header("location: index.php");
}elseif ($scr=='logeo'){ 
	$usuario = $_POST['usuario'];   	$clave = $_POST['clave'];
	$usuario = stripslashes($usuario);  $clave = stripslashes($clave);
	//echo 'Verificando Datos de: '.$usuario;

	
	//$db_conect = mysqli_connect($datos_iplocal, $datos_usuariodb, $datos_clavedb, $datos_database);
		
	$q="SELECT * from usuarios where usuario= '$usuario' and clave= '$clave' and estado = '1'";
	$consulta=mysqli_query($con,$q);
	$resltado=mysqli_num_rows($consulta);
	
		
	if($resltado=='1'){
		while ($fila = mysqli_fetch_row($consulta)) {
       // printf ("%s (%s)\n", $fila[0], $fila[3]);
		
		$_SESSION['rol']=$fila[4];
		$_SESSION['nom_vista']=$fila[3];
				
		echo "Ingresando.....</br> Bienvenido: ".$fila[3];
		
		// liberar el conjunto de resultados y direccionando 
		mysqli_free_result($consulta);
		
			
			switch($_SESSION['rol']){
				case 1:
				header("location: ../$datos_path/principal.php");			
				break;
					
				case 2:
				header("location: ../$datos_path/ventas.php");
				break;
					
				case 3:
				header("location: ../$datos_path/deposito.php");
				break;
			}
		}	
	}else{
		echo "Error 101: Usuario o Clave Icorrectos";
		header("location: index.php?error=101");
	}
		// cerrar la conexión 
		mysqli_close($con); 
}else
{
	require_once("SCR/login.php");
	login($mens_pri, $datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy, $est_conex);	
}

?>