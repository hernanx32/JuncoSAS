<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Pagina Principal';
cabezera($titulopag, $datos_nombempresa);

if(isset($_SESSION['rol'])){
	header('location: index.php');
}


?>