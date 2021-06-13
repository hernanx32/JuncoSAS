<?PHP
function conexion($c_1, $c_2, $c_3, $c_4)
{
	$db_conect = mysqli_connect($c_1, $c_2, $c_3, $c_4);
	
	if($db_conect){
		$_POST['$est_conex']="Conectado";
	
	}else{
		$_POST['$est_conex']="Error";
	}
	
	
}

?>