<?php
	include("encabezado/Header.php");
?>
<body>
	<table border=1 cellspacing=1 cellpadding=1 class="table table-dark col-sm-4">
		<tr align="center">
			<th id="imgvideojuegos"><img src="img/pantallaprincipal/PalabraVideojuego.png"></th>
			<th id="imganime"><img src="img/pantallaprincipal/PalabraAnime.png"></th>
		</tr>
		<tr align="center" class="bg-primary">
			<td><a href="inicio_abc/InsertarGame.php">Insertar <img src="img/pantallaprincipal/Insertar.png"></a></td>
			<td><a href="inicio_abc/InsertarAnime.php">Insertar <img src="img/pantallaprincipal/Insertar.png"></a></td>
		</tr>
		<tr align="center" class="bg-primary">
			<td>
				<form class="col-sm-14" method="post" style="margin: auto;">
					<label>Consultar <img src="img/pantallaprincipal/Consultar.png"></label>
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar Videojuegos" name="nombuscargame" required>
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscarnombregame" id="buscar">Buscar</button>
				</form>
			</td>
			<td>
				<form class="col-sm-14" method="post" style="margin: auto;">
					<label>Consultar <img src="img/pantallaprincipal/Consultar.png"></label>
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar Animes" name="nombuscaranime" required>
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscarnombreanime" id="buscar">Buscar</button>
				</form>
			</td>
		</tr>
	</table>

	<?php
	    if (isset($_POST["nombuscargame"])!='')
	    {
	        $nombregame = $_POST["nombuscargame"];

	        echo "<script type=\"text/javascript\">window.location.href=\"inicio_abc/ConsultarGame.php?busqueda=$nombregame\"</script>";
	    }


	    if (isset($_POST["nombuscaranime"])!='')
	    {  
	        $nombreanime = $_POST["nombuscaranime"];

	        echo "<script type=\"text/javascript\">window.location.href=\"inicio_abc/ConsultarAnime.php?busqueda=$nombreanime\"</script>";
	    }
	?>
</body>
</html>