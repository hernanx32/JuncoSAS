<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Pagina Principal';
cabezera($titulopag, $datos_nombempresa);

if($_SESSION['rol']!='1'){
	header('location: index.php');
}

echo "<h1>Bienvenido: " .$_SESSION['nom_vista']."</h1>";
?>
<link href="/Junco/css/menudesp.css" rel="stylesheet" type="text/css" media="screen">


<div id="header">
	<ul class="nav">
	<li><a href="#">Inicio</a></li>
	<li><a href="#">Archivos</a>
		<ul>
			<li><a href="#">Claves</a></li>
			<li><a href="#">Mensajes</a></li>
		</ul>
		</li>
	<li><a href="#">Comprobantes</a>
		<ul>
			<li><a href="#">Proformas</a></li>
			<li><a href="#">Presupuestos</a></li>
			<li><a href="#">Otros</a>
				<ul>
					<li><a href="#">Sec1</a></li>
					<li><a href="/Junco/index.php">Sec2</a></li>
				</ul>	
			</li>
		</ul>
		</li>
	<li><a href="index.php?scr=logout">Salir</a></li>
	</ul>
</div>
