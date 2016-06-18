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
<?php echo "bonjour ".$_SESSION['pseudo']."<br>"?>
<form action="boutique.php" method="post">
<label for="group">Selectionner le groupe a afficher :</label><br />
<SELECT  name="group" size="1">
	<?php
			$g = file_get_contents('json/groups.json');
			$g = json_decode($g, true);
			foreach ($g as $group)
			{
				echo "<option>";
				print($group[gname]);
			}


	?>
	<input type="submit" name="submit" value="OK"/>
</form>
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

<div class="achat">
		<div class="affichage2">
		<?php
			$rootname = getcwd();
			require_once($rootname.'/fct/display.php');
			group($_POST['group']);
		?>
		</div>
</div>
</body>
</html>
