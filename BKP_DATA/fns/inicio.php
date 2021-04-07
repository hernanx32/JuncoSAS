<?PHP
function cabezera($titulopag , $nomb_empresa)
{ ?>	
<!doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title><?PHP echo $nomb_empresa; ?> - <?PHP echo $titulopag; ?></title>
<body>
<?PHP
//CONFIGURAMOS LA ZONA HORARIA
date_default_timezone_set('America/Argentina/Buenos_Aires');
 
}
function pie($formnomb, $formpos, $nomb_empresa, $datos_localidad, $datos_Copyright, $datos_versoft, $datos_database, $datos_direip, $estado_conexion)
{ ?>
<table width="760" border="1" align="center">
	<tr>
   		<td width="191" bgcolor="#CCCCCC"> Copyright <?PHP echo $datos_Copyright; ?></td>
    	<td width="417" align="center" bgcolor="#CCCCCC"><?PHP echo $datos_localidad; ?></td>	
		<td width="180" align="right" bgcolor="#CCCCCC"><?PHP echo $nomb_empresa;?> Ver.: <?PHP echo $datos_versoft; ?></td>
  	</tr>
  	<tr>
  		<td height="5" colspan="3" align="center" bgcolor="#0099FF">
        Base de Datos: <?PHP echo $datos_database;?> - Estado: <?PHP echo $estado_conexion;?></td>
	</tr>
</table>
	<script>document.<?PHP echo $formnomb.'.'.$formpos ; ?>.focus()</script>
</body>
</html>
<?PHP } ?>