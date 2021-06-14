<?php
$enlace = mysqli_connect("localhost", "root", "LauLuk477", "db_junco");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT * FROM usuarios";

if ($resultado = mysqli_query($enlace, $consulta)) {
    /* obtener el array asociativo */
    while ($fila = mysqli_fetch_row($resultado)) {
        printf ("%s (%s)\n", $fila[0], $fila[1]);
		print("</br>");
    }

	/* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

/* cerrar la conexión */
mysqli_close($enlace);
?>