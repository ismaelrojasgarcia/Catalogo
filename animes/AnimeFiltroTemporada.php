<body>
    <?php
    	include("../encabezado/Headeranime.php");
    	include("../conexion/Conexion.php");
        include("AnimeBusqueda.php");
    	$Temporada = $_GET["temporada"];

    	$conexion = Conectarse();

    	if (!$conexion)
    	{
    		echo "<h1>No se puede filtrar. Error al conectar.</h1>";
    		exit();
    	}

        $año = date("Y");
        $count =strlen($Temporada);

        if($Temporada[$count-1]=="c")
        {
            if($Temporada=="InviernoAc")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/01/01' AND '$año/03/31'";
            }
            else if($Temporada=="PrimaveraAc")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/04/01' AND '$año/06/30'";
            }
            else if($Temporada=="VeranoAc")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/07/01' AND '$año/09/30'";
            }
            else
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/10/01' AND '$año/12/31'";
            }
        }
        else
        {
            $año = $año-1;        

            if($Temporada=="InviernoAn")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/01/01' AND '$año/03/31'";
            }
            else if($Temporada=="PrimaveraAn")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/04/01' AND '$año/06/30'";
            }
            else if($Temporada=="VeranoAn")
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/07/01' AND '$año/09/30'";
            }
            else
            {
                $consulta = "SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '$año/10/01' AND '$año/12/31'";
            }        
        }

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
            $tv=$fila['2'];    	

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