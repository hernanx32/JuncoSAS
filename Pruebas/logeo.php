<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JUNCO SAS - Logueo</title>
</head>

<body>
	<?PHP
	$usuario = stripslashes($_POST['usuario']);
	$clave = stripslashes($_POST['clave']);
	
	$mysqli = new mysqli("localhost", "root", "LauLuk477", "db_junco");
	
	if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
	}
	
	$consulta = "SELECT * FROM `usuarios` WHERE usuario = '$usuario' AND clave = '$clave'";
	if ($resultado = $mysqli->query($consulta))
	{
    	printf("La selección devolvió %d filas.\n", $resultado->num_rows);
		
		while($mostrar=$resultado->fetch_assoc()){
			echo $mostrar['nombre_vista'].'</br>';
			echo $mostrar['usuario'];
		}
		$resultado->close();
	}
	?> 
</body>
</html>