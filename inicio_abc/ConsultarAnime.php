<body>
    <?php
        include("../encabezado/Headerabc.php");
        include("../conexion/Conexion.php");

        $NombreAnime = $_GET["busqueda"];       

        $conexion = Conectarse();

        $consulta = "SELECT * FROM Animes WHERE Nombre ILIKE '%$NombreAnime%' ORDER BY FechaEstreno";
        
        $resultado = pg_query($conexion,$consulta) or die(pg_error());
        // $rowConsult = pg_fetch_assoc($resultado);
        // echo "<script> console.log('".$rowConsult["total"]."'); </script>";


        if (!$resultado) 
        {
            echo "<h1>Ocurrió un error al realizar la consulta.</h1>\n";
            exit();
        }
        if(pg_num_rows($resultado) == 0){
            echo"<script type=\"text/javascript\"> alert(\"Anime: $NombreAnime no Encontrado\"); window.location.href=\"../index.php\"; </script>";
        }
        while($filas = pg_fetch_array($resultado)) //pg_fetch_row
        {
           

            $extra=$filas["0"];
            $nom=$filas["1"];
            $ta=$filas["2"];
            $cap=$filas["3"];
            $est=$filas["4"];
            $img=$filas["5"];
            $tv=$filas["6"];
            $capova=$filas["7"];
            $capona=$filas["8"];
            $capesp=$filas["9"];
            $capomakes=$filas["10"];
            $peliculas=$filas["11"];
            $descripcion=$filas["12"];
            $fec=$filas["13"];

            $nomcompleto=$extra.$nom;

            $nombredivision=$NombreAnime.'|'.$nom;
             
    ?>
    <table border=1 cellspacing=1 cellpadding=1 class="table table-dark col-sm-12" style="margin: auto;">
        <tr class="table-row">
            <td class="table-group col-md-0" style="width: 5%;">
                <img src="../img/animes/<?php echo $img;?>">            
            </td>   

            <td class="table-group col-md-4" style="width: 95%;">
                <label><b>Complemento+Nombre:</b> <?php echo $nomcompleto;?></label><br/>
                <label><b>TipoAnime:</b> <?php echo $ta;?></label><br/>
                <label><b>Capitulos:</b> <?php echo $cap;?></label><br/>
                <label><b>Estado:</b> <?php echo $est;?></label>&nbsp;
                <label><b>TipoVisto:</b> <?php echo $tv;?></label><br/>
                <label><b>CapitulosOVA:</b> <?php echo $capova;?></label>&nbsp;
                <label><b>CapitulosONA:</b> <?php echo $capona;?></label>&nbsp;
                <label><b>CapitulosEspeciales:</b> <?php echo $capesp;?></label>&nbsp;
                <label><b>CapitulosOmakes:</b> <?php echo $capomakes;?></label>&nbsp;
                <label><b>Peliculas:</b> <?php echo $peliculas;?></label><br/>
                <label><b>Descripcion:</b> <?php echo $descripcion;?></label><br/>
                <label><b>FechaEstreno:</b> <?php echo $fec;?></label>
                <br>
                <a href="ModificarAnime.php?clave=<?php echo $nom;?>" class="btn btn-warning">Modificar</a>
                <a href="EliminarAnime.php?clave=<?php echo $nombredivision;?>" class="btn btn-danger">Eliminar</a>
                <a href="../Index.php" class="btn btn-info">Regresar</a>
            </td>
        </tr>
    </table>
    <?php
        }
        //liberamos memoria que ocupa la consulta...
        pg_free_result($resultado);
        //cerramos la conexión con el motor de BD
        pg_close($conexion);
    ?>
</body>
</html>