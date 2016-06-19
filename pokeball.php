
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/pokeball.css"/>
	<title>Poké-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	tmenu();
?>
<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Dernières Pokéballs</h1>
	</a>
		<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			last3();
		?>
		</div>
</div>


</body>
</html>
