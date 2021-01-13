<!DOCTYPE html>
<html>
<head>
	<title>Catalogo Anime</title>	
	
	<!--para que Boostrap muestre sus diseños-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--para que se despliegue la barra del navegador-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
  	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
  	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  	<link rel="stylesheet" type="text/css" href="../css/Estilos.css">

 
 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" 
  			data-target="#navbarSupportedContent1" 
  			aria-controls="navbarSupportedContent1" 
  			aria-expanded="false" 
  			aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<form class="form-inline my-2 my-lg-0" method="post">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="nombuscar" required>
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscarnombre" id="buscar">Buscar</button>
			</form>
		</div>
	</nav>
   	

  	<img src="../img/encabezado/BannerLogo.png" id="logo">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="../Index.php"><img src="../img/encabezado/InicioCasa.png" id="inicio"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" 
  			data-target="#navbarSupportedContent" 
  			aria-controls="navbarSupportedContent" 
  			aria-expanded="false" 
  			aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="Videojuegos.php">Videojuegos</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link">|</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="Anime.php" id="Anime">Animes</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link">|</a>
				</li>				
				<li class="nav-item dropdown active">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtro</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="AnimeFiltro.php?clave=<?php echo 'Verde';?>" id="verde" >Visto</a>
          				<a class="dropdown-item" href="AnimeFiltro.php?clave=<?php echo 'Azul';?>" id="azul">Visto y le falto</a>	
          				<a class="dropdown-item" href="AnimeFiltro.php?clave=<?php echo 'Naranja';?>" id="naranja">Visto y Descargado</a>
          				<a class="dropdown-item" href="AnimeFiltro.php?clave=<?php echo 'Sin Color/Negro';?>" id="negro">No Visto</a>

          				<a class="dropdown-item" id="ta">Temporada Actual</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'InviernoAc';?>" id="invierno">Invierno</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'PrimaveraAc';?>" id="primavera">Primavera</a>			
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'VeranoAc';?>" id="verano">Verano</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'OtoñoAc';?>"id="otoño">Otoño</a>
          				
          				<a class="dropdown-item" id="ta">Temporada Anterior</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'InviernoAn';?>" id="invierno">Invierno</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'PrimaveraAn';?>" id="primavera">Primavera</a>			
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'VeranoAn';?>" id="verano">Verano</a>
          				<a class="dropdown-item" href="AnimeFiltroTemporada.php?temporada=<?php echo 'OtoñoAn';?>"id="otoño">Otoño</a>
        			</div>
      			</li>
      			<li class="nav-item active">
					<a class="nav-link">|</a>
				</li>      			      			
				<li class="nav-item active">
					<a class="nav-link"href="AnimeA-Z.php?letra=<?php echo 'A';?>">A</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'B';?>">B</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'C';?>">C</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'D';?>">D</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'E';?>">E</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'F';?>">F</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'G';?>">G</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'H';?>">H</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'I';?>">I</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'J';?>">J</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'K';?>">K</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'L';?>">L</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'M';?>">M</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'N';?>">N</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'O';?>">O</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'P';?>">P</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'Q';?>">Q</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'R';?>">R</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'S';?>">S</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'T';?>">T</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'U';?>">U</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'V';?>">V</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'W';?>">W</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'X';?>">X</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'Y';?>">Y</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo 'Z';?>">Z</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AnimeA-Z.php?letra=<?php echo '0';?>">0-9</a>
				</li>
      			<li class="nav-item active">
					<a class="nav-link">|</a>
				</li>			      			
			</ul>
			<form class="form-inline my-2 my-lg-0" method="post">
   				<input class="form-control mr-sm-2" type="date" name="fechainicial" required="">   				
   				<input class="form-control mr-sm-2" type="date" name="fechafinal" required="">   				
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscarfecha" id="buscar">Buscar</button>
		 	</form>  			 
		</div>
	</nav>
</head>