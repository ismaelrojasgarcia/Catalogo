<?php 
	include("../encabezado/Headerabc.php");
    include("../conexion/Conexion.php");

    $NombreAnime = $_GET["clave"];       

    $conexion = Conectarse();
    
    if (!$conexion)
	{
		echo "<h1>No se puede dar de baja. Error al conectar.</h1>";
		exit();
	}

    $consulta = "SELECT * FROM Animes WHERE Nombre='$NombreAnime'";
    
    $resultado = pg_query($conexion,$consulta) or die(pg_error());

    if (!$resultado) 
    {
        echo "<h1>Ocurrió un error al realizar la consulta.</h1>\n";
        exit();
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
	<body>
		<form method="post" class="col-sm-8" style="margin: auto;">
			<div class="form-row">
				<div class="form-group col-md-4">
		    		<label>Complemento:</label>
		    		<input type="text" class="form-control" placeholder="Complemento" name="extra" maxlength="30" value="<?php echo $extra;?>">
		  		</div>
		  		<div class="form-group col-md-4">
		    		<label>Nombre:</label>
		    		<input type="text" class="form-control" placeholder="Nombre Anime" name="name" maxlength="100" value="<?php echo $nom;?>" required>
		  		</div>
		  		<div class="form-group col-md-4">
		    		<label>TipoAnime:</label>
		    		<select id="inputState" class="form-control" name="ta">
        				<option selected><?php echo $ta;?></option>        				
        				<option>Anime</option>
        				<option>OVA</option>
        				<option>ONA</option>
        				<option>Especial</option>
        				<option>Spin-Off</option>
        				<option>Pelicula</option>
      				</select>
		  		</div>
		  	</div>

		  	<div class="form-row">
		  		<div class="form-group col-md-4">
		    		<label>Capitulos:</label>
		    		<input type="number" class="form-control" placeholder="Capitulos" name="capitulos" minlength="1" maxlength="9999" value="<?php echo $cap;?>" required>
		  		</div>
			  	<div class="form-group col-md-4">
			    	<label>Estado:</label>
			    	<select id="inputState" class="form-control" name="estado">
        				<option selected><?php echo $est;?></option>        				
        				<option>Finalizado</option>
        				<option>En Emisión</option>
      				</select>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>Imagen</label>
			    	<input type="text" class="form-control" placeholder="Imagen" name="imagen" maxlength="100" value="<?php echo $img;?>" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>TipoVisto:</label>
			    	<select id="inputState" class="form-control" name="tv">
        				<option selected><?php echo $tv;?></option>        				
        				<option>Verde</option>
        				<option>Azul</option>
        				<option>Naranja</option>
        				<option>Sin Color/Negro</option>
      				</select>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosOVA:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos OVA" name="capova" minlength="1" value="<?php echo $capova;?>" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosONA:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos ONA" name="capona" minlength="1" value="<?php echo $capona;?>" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>CapitulosEspeciales:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos Especiales" name="capesp" minlength="1" value="<?php echo $capesp;?>" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosOmakes:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos Omakes" name="capomakes" minlength="1" value="<?php echo $capomakes;?>" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>Peliculas:</label>
			    	<input type="number" class="form-control" placeholder="Peliculas" name="peliculas" minlength="1" value="<?php echo $peliculas;?>" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>Descripcion</label>
			    	<input type="text" class="form-control" placeholder="Descripcion" name="descripcion" maxlength="200" value="<?php echo $descripcion;?>">
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>FechaEstreno</label>
			    	<input type="date" class="form-control" name="fecestreno" value="<?php echo $fec;?>" required>
			  	</div>

			  	<div class="form-group col-md-4">
			  		<br/>
			  		<button type="submit" name="grabar" class="btn btn-success">Grabar</button>
					<button type="reset" class="btn btn-primary">Limpiar</button>
					<a href="../Index.php" class="btn btn-info">Regresar</a>
			  	</div>
			</div>
		</form>
<?php
    }
    //liberamos memoria que ocupa la consulta...
    pg_free_result($resultado);
    //cerramos la conexión con el motor de BD
    pg_close($conexion);
?>		
<?php		
	// En base a los datos recibidos hacemos el alta.
	if (isset($_POST["grabar"]))
	{	
		$extra = $_POST["extra"];
		$name = $_POST["name"];
		$ta = $_POST["ta"];
		$capitulos = $_POST["capitulos"];
		$estado = $_POST["estado"];
		$imagen = $_POST["imagen"];
		$tv = $_POST["tv"];
		$capova = $_POST["capova"];
		$capona = $_POST["capona"];
		$capesp = $_POST["capesp"];
		$capomakes = $_POST["capomakes"];
		$peliculas = $_POST["peliculas"];
		$descripcion = $_POST["descripcion"];
		$fecestreno = $_POST["fecestreno"];
		//Mandamos llamar a la función AltaAnime
		ModificarAnime ($extra,$name,$ta,$capitulos,$estado,$imagen,$tv,$capova,$capona,$capesp,$capomakes,$peliculas,$descripcion,$fecestreno);	
	}
?>
</body>
</html>