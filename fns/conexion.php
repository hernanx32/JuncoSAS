<?PHP 

function conexion_db($datos_direip, $datos_usuariodb, $datos_clavedb, $datos_database) {
	$enlace = mysqli_connect("127.0.0.1", "root", "LauLuk477", $datos_database);
	mysqli_select_db($datos_database);	
//selección de la base de datos con la que vamos a trabajar 
 
   if (!$enlace)
		{	
	   echo "ERROR AL CONECTAR AL SERVIDOR COMPRUEBE EL NOMBRE DE USUARIO Y CLAVE DE LA BASE DE DATO";
	   $estado_conexion="Sin Conexion al Servidor";
	   return false;
		}
   else {
	   global $estado_conexion;
	   $estado_conexion="conectado";
	   }
}		

?>