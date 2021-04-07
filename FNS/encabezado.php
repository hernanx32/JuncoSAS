<?PHP
function cabezera($titulopag , $nomb_empresa)
{
date_default_timezone_set('America/Argentina/Buenos_Aires');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?PHP echo $nomb_empresa; ?> - <?PHP echo $titulopag; ?></title>

<?PHP	}

?>