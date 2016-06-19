<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	amenu();
?>
	<div id="forme">
		<h1>Gestion des catégories</h1>
<a href="create_groups.php"> Créer une Catégorie</a>
<br>
<a href="mod_groups.php"> Modifier une Catégorie</a>
<br>
		<?php
			$groups = file_get_contents('json/groups.json');
			$groups = json_decode($groups, true);
			foreach ($groups as $g)
			{
				echo $g['gname']."<br>";
			}
		?>

	</div>
</div>
</div>
</body>
</html>
