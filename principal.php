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

</br><a href="/Junco/index.php?scr=logout">Salir</a><span style="color: #000000"></span>