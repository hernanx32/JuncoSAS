
<?PHP
function login($datos_sucursal, $datos_nombempresa, $datos_localidad, $datos_ver, $datos_copy)
{
?>

<form action="../PAG/index.php?scr=logeo" method="post" name="login" id="login">
  <p align="center">Sistema de Gestion y Control  </p>
  <table width="757" height="246" border="1" align="center">
    <tbody>
      <tr>
        <td height="68" colspan="3" bgcolor="#FFFFFF" style="font-size: 18px">Mensaje: Bienvenido al sistema de Gestion Ingrese su Usuario y clave </td>
      </tr>
      <tr>
        <td width="265" height="30" bgcolor="#CCCCCC">Fecha:<?PHP echo date("d\/m\/Y");?></td>
        <td colspan="2" rowspan="2"><table width="450" border="0">
          <tbody>
            <tr>
              <td width="85">Usuario:</td>
              <td width="355"><input name="usuario" type="text" id="usuario" tabindex="1" size="30" maxlength="30"></td>
              </tr>
            <tr>
              <td>Clave:</td>
              <td><input name="clave" type="password" id="clave" tabindex="2" size="30" maxlength="30"></td>
              </tr>
            </tbody>
        </table></td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td>Sucursal: <?php echo $datos_sucursal; ?></td>
      </tr>
      <tr>
        <td height="53" colspan="3" align="center" bgcolor="#999999"><a><input name="submit" type="submit" id="submit" tabindex="3" value="Ingresar al Sistema"></a></td>
      </tr>
      <tr>
        <td height="23" align="left"><?PHP echo $datos_nombempresa;?></td>
        <td width="225" height="23" align="center"><?PHP echo $datos_localidad;?></td>
        <td width="245" height="23" align="right">Ver: <?PHP echo $datos_ver;?> año <?PHP echo $datos_copy;?></td>
      </tr>
      <tr>
        <td colspan="3" align="center">Bases de Datos estado de conexión </td>
      </tr>
    </tbody>
  </table>
</form>

<script>document.login.usuario.focus()</script>


<?PHP	} 

?>





