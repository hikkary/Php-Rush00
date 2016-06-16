<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/boutique.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	tmenu();
?>
<?php echo "bonjour ".$_SESSION['pseudo']?>
<div class="poketop">
	<a href="pokemon.php">
		<h1 class="poketitre">Nos Derniers Pokemon</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			last3();
		?>
		</div>
</div>


<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Dernieres Pokeball</h1>
	</a>
</div>
<div id="">


</div>
</body>
</html>
