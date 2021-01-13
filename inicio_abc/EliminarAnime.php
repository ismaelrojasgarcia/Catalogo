<?php
	include("../encabezado/Headerabc.php");
    include("../conexion/Conexion.php");
	$NombreADividir = $_GET["clave"];
	$NombreBC = explode("|", $NombreADividir);
	//El campo 0 es el nombre para la busqueda cuando se elimine y el 1 en que se va ha buscar
    $NombreBC[0];
    $NombreBC[1];

	$conexion = Conectarse();

	if (!$conexion)
	{
		echo "<h1>No se puede dar de baja. Error al conectar.</h1>";
		exit();
	}

	// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
	$consulta = "DELETE FROM Animes WHERE Nombre='$NombreBC[1]'";

	//echo $consulta . "<BR>";

	$resultado = pg_query($conexion,$consulta) or die(pg_error());


	if (!$resultado) 
	{
		echo "Ocurrió un error al realizar la consulta.\n";
		exit();
	}
	/*else if ($resultado=='')
	{
		echo'<script type="text/javascript"> alert("No se encontro información sobre la busqueda: <?php echo $Nombre;?>"); window.location.href="../Index.php"; </script>';
	}*/
	else
	{
		//echo "<script> console.log("'.$resultado.'") </script>";
		echo"<script type=\"text/javascript\"> alert(\"Anime Eliminado Corecctamente\"); window.location.href=\"ConsultarAnime.php?busqueda=$NombreBC[0]\";</script>";		
	}
	//cerramos la conexión con el motor de BD
	pg_close($conexion);
?>