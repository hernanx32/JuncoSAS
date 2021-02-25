<?PHP session_start();
require_once("fns.php");
conexion_db($datos_direip, $datos_usuariodb, $datos_clavedb, $datos_database);
$titulopag='BIENVENIDOS';
cabezera($titulopag , $datos_nombempresa);


?> 
<script type="text/javascript" src="js/detectmobile.js"></script>
<script type="text/javascript" src="fns/validadores.js"></script>
<table width="900" height="165" border="1" align="center">
    <tr>
      <td width="323" align="center"><table width="890" border="0">
        <tr>
            <td colspan="3" align="center"><img src="Img/logo750x250.png" width="750" height="250" /></td>
          </tr>
      </table></td>
    </tr>
  </table>



		
<form id="form1" name="form1" method="POST" action="index.php?scr=logeo" onSubmit="return validalogin()">
  <table width="900" height="92" border="1" align="center">
    <tr>
      <td width="323" height="26" bgcolor="#CCCCCC">Fecha: <?PHP echo date("d-m-Y");?></td>
      <td width="249" rowspan="2" ><table width="200" border="0" align="center">
          <tr>
            <td>Nombre:</td>
      <td><input name="usuario" type="text" id="usuario" tabindex="1" onKeyPress="return bajarEnter(this, event)" size="30" maxlength="30"/></td>
          </tr>
          <tr>
      <td>Clave</td>
      <td><input name="clave" type="password" id="clave" tabindex="2" size="30" maxlength="30"/></td>
          </tr>
        </table></td>
      <td width="263" rowspan="2" align="left" ><?PHP echo $mensaje; ?></td>
    </tr>
    <tr>
      <td height="26" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr bgcolor="#999999">
      <td colspan="3" align="center"><input type="submit" name="Submit" value="INGRESAR AL SISTEMA" />
      </td>
    </tr>
  </table>

<?PHP	 
$foo = "foobar";
echo $foo;
?>
	
<?PHP
$formini = 'usuario';
pie($formini, $datos_nombempresa, $datos_localidad, $datos_copy, $datos_ver, $datos_database, $datos_direip, $estado_conexion); 
?>
