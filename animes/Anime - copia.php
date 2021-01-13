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

        $consulta = "SELECT * FROM Animes ORDER BY FechaEstreno desc limit 10";
        
        $resultado = pg_query($conexion,$consulta) or die(pg_error());

        if (!$resultado) 
        {
            echo "Ocurrió un error al realizar la consulta.\n";
            exit();
        }
        
        $contador=0;
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
            $peliculas=$filas["10"];
            $descripcion=$filas["11"];

            if($contador=="8")
            {
                echo "<br><br>";
                $contador=0;
            }
            echo "<div class=\"contenedor\">";
            if($tipovisto=="Verde")
            {               
                echo    "<div class=\"texto-encima\" style=\"background-color:green\">".$nombre."</div>";
            }
            else if($tipovisto=="Azul")
            {
                echo    "<div class=\"texto-encima\" style=\"background-color:blue\">".$nombre."</div>";
            }
            else if($tipovisto=="Naranja")
            {
                echo    "<div class=\"texto-encima\" style=\"background-color:orange\">".$nombre."</div>";
            }
            else
            {
                echo    "<div class=\"texto-encima\" style=\"background-color:black\">".$nombre."</div>";
            }
            
            echo    "<img src=\"../img/animes/$imagen\"/>";
            echo "</div>";

            //No quitar el cieere y abertura que continuan debido a que esto hace una separación entre los animes que se muestran en pantalla.
            echo ""."\n";
            $contador=$contador+1;        
        }
        //liberamos memoria que ocupa la consulta...
        pg_free_result($resultado);
        //cerramos la conexión con el motor de BD
        pg_close($conexion);
    ?>   
</body>
</html>