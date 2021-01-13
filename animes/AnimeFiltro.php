<body>
    <?php
    	include("../encabezado/Headeranime.php");
    	include("../conexion/Conexion.php");
        include("AnimeBusqueda.php");
    	$tv = $_GET["clave"];

    	$conexion = Conectarse();

    	if (!$conexion)
    	{
    		echo "<h1>No se puede filtrar. Error al conectar.</h1>";
    		exit();
    	}
    	
    	$consulta = "SELECT Nombre,Imagen FROM Animes WHERE TipoVisto='$tv'";
    		
    	$resultado = pg_query($conexion,$consulta) or die(pg_error());

    	if (!$resultado) 
    	{
    		echo "<h1>Ocurrió un error al realizar la consulta.</h1>\n";
    		exit();
    	}
    	
    	while($fila = pg_fetch_array($resultado)) //pg_fetch_row
    	{	
    		$nom=$fila["0"];
    		$img=$fila['1'];		
    	
    		echo "<div class=\"portada-box\">";
            if($tv=="Verde")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:green\">";
            }
            else if($tv=="Azul")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:blue\">";
            }
            else if($tv=="Naranja")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:orange\">";
            }
            else
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:black\">";
            }
            echo        "<a>".$nom."</a>";
            echo     "</h2>";
            echo     "<img src=\"../img/animes/$img\"/>";            
            echo "</div>";
        }
        //liberamos memoria que ocupa la consulta...
        pg_free_result($resultado);
        //cerramos la conexión con el motor de BD
        pg_close($conexion);
    ?>
</body>
</html>