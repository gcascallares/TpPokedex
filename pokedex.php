<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/estilosPokedex.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script type="text/javascript" src="materialize.min.js"></script>
		<title>Pokedex</title>
		
	</head>
		<body id="fondoImagen">
		<div>
		<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
			<a href="#" class="brand-logo center">Pokedex</a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
			</ul>
			</div>
		</nav>
		</div>
			<div  class="container">
	<?php
	$pokemons=[
		'charmander' =>['tipo'=>"fuego",'genero'=>"m",'ataque'=>"llamarada"],
		'pikachu'=>["tipo"=>"electrico",'genero'=>"f",'ataque'=>"electrovolt"],
		'bulbasaur'=>["tipo"=>"planta",'genero'=>"m",'ataque'=>"hojas"]];
	//pokedex.php?whoisthatpokemon=charmander en la url pide a charmander, whoisthatpokemon seria un nombre de filtro
	//pokedex.php? si no se ingresa un valor muestra todos los valores
	//echo'la variable es'.$_GET["whoisthatpokemon"];
	foreach($pokemons as $nombre => $pokemon){
		echo '<img src="./'.$nombre.'.png" width="100px";/>';
		echo " ".$nombre;
		echo " ".$pokemon['ataque'];
		echo " ".$pokemon['tipo'];
		echo " ".'<img src="./tipo_'.$pokemon['tipo'].'.gif" width="50px";/>';
		echo "<br>";
		}
	?>
		</div>
		</div>
	</body>
</html>