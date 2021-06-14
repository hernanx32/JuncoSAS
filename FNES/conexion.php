<?PHP
function conexion($c_1, $c_2, $c_3, $c_4)
{
	global $con, $est_conex;
	
	$con = mysqli_connect($c_1, $c_2, $c_3, $c_4);
		
	if($con){
		$est_conex="Conectado";
	
	}else{
		$est_conex="Error";
		
		if (mysqli_connect_errno()) {
    	printf("Falló la conexión: %s\n", mysqli_connect_error());
    	exit();
		}
	}
}
?>