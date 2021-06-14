<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?PHP
	$usuario = $_POST['usuario'];   	$clave = $_POST['clave'];
	$usuario = stripslashes($usuario);  $clave = stripslashes($clave);
	echo 'Verificando Datos de: '.$usuario;
	
	$c_1="localhost";
	$c_2="root";
	$c_3="LauLuk477";
	$c_4="db_junco";
	
	$db_conect = mysqli_connect($c_1, $c_2, $c_3, $c_4);
	$q="SELECT COUNT(*) as contar from usuarios where usuario= '$usuario' and clave= '$clave'";
	$consulta=mysqli_query($db_conect,$q);
	$array= mysqli_fetch_array($consulta);
	
	
	if($array['contar']>0){
		echo "Correctos";
	}else{
		echo "Incorrectos";
	}
	
	?>
</body>
</html>