
<?PHP session_start();
require_once("fnes.php");
//TITULO DE LA PAGINA
$titulopag='Pagina Principal';
cabezera($titulopag, $datos_nombempresa);

if($_SESSION['rol']!='1'){
	header('location: index.php');
}

echo "Pagina Principal";
?>

</br><a href="/Junco/index.php?scr=logout">Salir</a>