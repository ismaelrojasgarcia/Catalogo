<?php    
    include("../encabezado/Headeranime.php");
    include("../conexion/Conexion.php");
    include("AnimeBusqueda.php");
?>

<body>
    <?php        
        $conexion = Conectarse();

        if (!$conexion)
        {
            echo "<h1>Error en abrir la bases de datos.</h1>";
            exit();
        }

        $consulta = "SELECT * FROM Animes ORDER BY FechaEstreno DESC";
        
        $resultado = pg_query($conexion,$consulta) or die(pg_error());

        if (!$resultado) 
        {
            echo "Ocurrió un error al realizar la consulta.\n";
            exit();
        }
        
        while($filas = pg_fetch_row($resultado)) //pg_fetch_array
        {
            $complemento=$filas["0"];
            $nombre=$filas["1"];
            $tipoanime=$filas["2"];
            $capitulos=$filas["3"];
            $estado=$filas["4"];
            $imagen=$filas["5"];
            $tipovisto=$filas["6"];
            $capitulosova=$filas["7"];
            $capitulosona=$filas["8"];
            $capitulosespeciales=$filas["9"];
            $capitulosomakes=$filas["10"];
            $peliculas=$filas["11"];
            $descripcion=$filas["12"];
            $fechaestreno=$filas["13"];

            echo "<div class=\"portada-box\">";
            if($tipovisto=="Verde")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:green\">";
            }
            else if($tipovisto=="Azul")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:blue\">";
            }
            else if($tipovisto=="Naranja")
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:orange\">";
            }
            else
            {
                echo "<h2 class=\"portada-title\" style=\"background-color:black\">";
            }
            echo        "<a>".$nombre."</a>";
            echo     "</h2>";
            echo     "<img src=\"../img/animes/$imagen\"/>";            
            echo "</div>";      
        }
        //liberamos memoria que ocupa la consulta...
        pg_free_result($resultado);
        //cerramos la conexión con el motor de BD
        pg_close($conexion);
    ?>   
</body>
</html>