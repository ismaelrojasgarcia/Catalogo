<?php
    if (isset($_POST["buscarfecha"]))
    {
        $fechai = $_POST["fechainicial"];
        $fechaf = $_POST["fechafinal"];

        $fecha=$fechai.'|'.$fechaf;        

        if ($fechai>$fechaf) 
        {
            echo '<script type="text/javascript"> alert("La fecha inicial no puede ser mayor a la final"); window.location.href="Anime.php"</script>';
            exit();                
        }
        else
        {
            echo "<script type=\"text/javascript\">window.location.href=\"AnimeBusquedaFecha.php?fecha=$fecha\"</script>";
        }
    }


    if (isset($_POST["nombuscar"])!='')
    {  
        $nombre = $_POST["nombuscar"];

        echo "<script type=\"text/javascript\">window.location.href=\"AnimeBusquedaNombre.php?nombrebusqueda=$nombre\"</script>";
    }
?>