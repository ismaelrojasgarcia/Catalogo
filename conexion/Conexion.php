<?php
	function Conectarse()
	{
		//Cadena de Conexión
		$conn_string = "host=localhost port=5432 dbname=unica user=postgres password=''";

		//Establecemos una conexion con el servidor postgresSQL
		$dbconn = pg_connect($conn_string) or die('No se ha podido conectar:'.pg_last_error());

		// Revisamos el estado de la conexion en caso de errores. 
		if(!$dbconn) 
  		{
  			echo "Error: No se ha podido conectar a la base de datos\n";
  		} 
  		else
    	{
    		return $dbconn;
    	}
	}
	/*
	//Cadena de Conexión
	$conn_string = "host=localhost port=5432 dbname=unica user=postgres password=''";

	//Establecemos una conexion con el servidor postgresSQL
	$dbconn = pg_connect($conn_string) or die('No se ha podido conectar:'.pg_last_error());

	// Revisamos el estado de la conexion en caso de errores. 
	if(!$dbconn) 
	{
		echo "Error: No se ha podido conectar a la base de datos\n";
	} 
	else
	{
		echo "<h1>Conexión Exitosa</h1>\n";
	}*/
//-----------------------------------------------------------------------\\
		function AltaAnime ($extra,$name,$ta,$capitulos,$estado,$imagen,$tv,$capova,$capona,$capesp,$capomakes,$peliculas,$descripcion,$fecestreno)
		{
			$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

			// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
			$consulta = "INSERT INTO Animes VALUES ('$extra','$name','$ta',$capitulos,'$estado','$imagen.jpg','$tv',$capova,$capona,$capesp,$capomakes,$peliculas,'$descripcion','$fecestreno')";

			echo $consulta;

			$resultado = pg_query($conexion,$consulta) or die(pg_error());

			echo $resultado;

			if (!$resultado) 
			{
				echo "Ocurrió un error al realizar la consulta.\n";
				exit();
			}
			else
			{
				echo'<script type="text/javascript"> alert("Anime Agregado correctamente"); window.location.href="InsertarAnime.php"; </script>';
			}	

			//cerramos la conexión con el motor de BD
			pg_close($conexion);
		}
//-----------------------------------------------------------------------\\
		function ModificarAnime ($extra,$name,$ta,$capitulos,$estado,$imagen,$tv,$capova,$capona,$capesp,$capomakes,$peliculas,$descripcion,$fecestreno)
		{
			$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

			// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
			$consulta = "UPDATE Animes SET Complemento='$extra',Nombre='$name',TipoAnime='$ta',Capitulos=$capitulos,Estado='$estado',Imagen='$imagen.jpg',TipoVisto='$tv',CapitulosOVA=$capova,CapitulosONA=$capona,CapitulosEspeciales=$capesp,CapitulosOmakes=$capomakes,Peliculas=$peliculas,Descripcion='$descripcion',FechaEstreno='$fecestreno'";

			echo $consulta;

			$resultado = pg_query($conexion,$consulta) or die(pg_error());

			echo $resultado;

			if (!$resultado) 
			{
				echo "Ocurrió un error al realizar la consulta.\n";
				exit();
			}
			else
			{
				echo'<script type="text/javascript"> alert("Anime Modificado correctamente"); window.location.href="../Index.php"; </script>';
			}	

			//cerramos la conexión con el motor de BD
			pg_close($conexion);
		}		
?>
<!------------------------------------------------------------------------->
