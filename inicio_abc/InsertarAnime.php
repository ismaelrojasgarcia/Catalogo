<?php 
	include("../encabezado/Headerabc.php");
    include("../conexion/Conexion.php");
?>
	<body>
		<form method="post" class="col-sm-8" style="margin: auto;">
			<div class="form-row">
				<div class="form-group col-md-4">
		    		<label>Complemento:</label>
		    		<input type="text" class="form-control" placeholder="Complemento" name="extra" maxlength="30">
		  		</div>
		  		<div class="form-group col-md-4">
		    		<label>Nombre:</label>
		    		<input type="text" class="form-control" placeholder="Nombre Anime" name="name" maxlength="100" required>
		  		</div>
		  		<div class="form-group col-md-4">
		    		<label>TipoAnime:</label>
		    		<select id="inputState" class="form-control" name="ta">
        				<option selected>Anime</option>        				
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
		    		<input type="number" class="form-control" placeholder="Capitulos" name="capitulos" minlength="1" maxlength="9999" required>
		  		</div>
			  	<div class="form-group col-md-4">
			    	<label>Estado:</label>
			    	<select id="inputState" class="form-control" name="estado">
        				<option selected>Finalizado</option>        				
        				<option>En Emisión</option>        				
      				</select>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>Imagen</label>
			    	<input type="text" class="form-control" placeholder="Imagen" name="imagen" maxlength="100" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>TipoVisto:</label>
			    	<select id="inputState" class="form-control" name="tv">
        				<option selected>Verde</option>        				
        				<option>Azul</option>
        				<option>Naranja</option>
        				<option>Sin Color/Negro</option>
      				</select>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosOVA:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos OVA" name="capova" minlength="1" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosONA:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos ONA" name="capona" minlength="1" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>CapitulosEspeciales:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos Especiales" name="capesp" minlength="1" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>CapitulosOmakes:</label>
			    	<input type="number" class="form-control" placeholder="Capitulos Omakes" name="capomakes" minlength="1" required>
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>Peliculas:</label>
			    	<input type="number" class="form-control" placeholder="Peliculas" name="peliculas" minlength="1" required>
			  	</div>
			</div>

			<div class="form-row">
			  	<div class="form-group col-md-4">
			    	<label>Descripcion</label>
			    	<input type="text" class="form-control" placeholder="Descripcion" name="descripcion" maxlength="200">
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>FechaEstreno</label>
			    	<input type="date" class="form-control" name="fecestreno" required>
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
				AltaAnime ($extra,$name,$ta,$capitulos,$estado,$imagen,$tv,$capova,$capona,$capesp,$capomakes,$peliculas,$descripcion,$fecestreno);	
			}
		?>
</body>
</html>