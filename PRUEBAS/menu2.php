<html>
	<head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			{
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav {
				width:800px; /*Le establecemos un ancho*/
				margin:0 auto; /*Centramos automaticamente*/
			}

			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
			background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px; /*TAMAÑO DEL SUB MENU*/
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
</head>
<body>

<div id="header">
	<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->	
		<div id="header">
			<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
					<li><a href="">Inicio</a></li>
					<li><a href="">MenuPri1</a>
						<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu1</a>	</li>
							<ul>
							<li><a href="">Submenu1</a></li>
							<li><a href="">Submenu1</a>	</li>
							</ul>
						</ul>
					</li>
				</ul>
			</nav>			
		</div>
	</nav>		
</div>
	</body>
</html>