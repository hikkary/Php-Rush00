<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/pokemon.css"/>
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
	<a href="#">
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
		<h1 class="poketitre">Nos Derniers Pokemon Eau</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group2('Eau');
		?>
		</div>
</div>

<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Derniers Pokemon Plante</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group2('Plante');
		?>
		</div>
</div>

<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Derniers Pokemon Pierre</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group2('Pierre');
		?>
		</div>
</div>

<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Derniers Pokemon Poison</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group2('Poison');
		?>
		</div>
</div>

<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Derniers Pokemon Legendaire</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group2('Pokemon Legendaire');
		?>
		</div>
</div>



</body>
</html>
