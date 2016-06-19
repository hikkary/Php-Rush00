<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<title>Poké-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	tmenu();
?>
	<?php echo "bonjour ".$_SESSION['pseudo']?>
	<div id="vitrine">
		<img src="img/pokeshop.png"/>
	</div>
<div id="poketop">
	<h1 id="poketitre">Nos Derniers Pokémons</h1>
	<div class="affichage">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			last3();
		?>
		</div>
</div>
<div id="">


</div>
</body>
</html>
