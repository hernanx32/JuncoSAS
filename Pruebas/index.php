<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JUNCO SAS</title>
</head>

<body>
<?PHP echo $_GET['scr']; ?>	
<form id="logueo" name="logueo" method="post" action="index.php?scr=1">
  <p>
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario">
  </p>
  <p><label for="clave">Clave:</label>
    <input type="text" name="clave" id="clave">
  </p>
  <p>
    <input type="submit" name="ingresar" id="ingresar" value="ingresar al Sistema">
    
  </p>
    	
</form>
</body>
</html>