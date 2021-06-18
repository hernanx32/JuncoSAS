<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<style type="text/css">
	*{
		padding:0px;
		margin: auto;
		}
	#header{
		margin: auto;
		width: 500px;
		font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
		}
	ul, ol {
		list-style: none; 
		}
	.nav li a {            /*Configuracion del Menu*/
		/*Color del Menu*/
		background-color: cadetblue; 
		/*Color del Letras*/
		color: yellow;
		/*Quita los Subrayados*/
		text-decoration: none;
		/*Separacion de Letras*/
		padding: 10px 15px;
		/*Para q se Vea en bloque*/
		display: block;
		}
	/*colo cuando posa el curso en el menu*/
	.nav li a:hover {
		background-color: blue;
		}
	/*Organiza El menu*/
	.nav > li {
		float: left;
	}

	.nav li ul {
		display:none; /*Para que no se vea los sub menu*/
		position: absolute;
		min-width: 140px; /* Tamaño sub menu */
	}
	.nav li:hover > ul {
		display: block;
	}
	/*Posicion del Sub-Sub-Menu*/
	.nav li ul li {
		position: relative;
	} 
	.nav li ul li ul {
		right: -140px;
		top: 0;
	}
	</style>	
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
	<li><a href="#">Comprobantes</a></li>
	</ul>
</div>
	
	</body>
</html>