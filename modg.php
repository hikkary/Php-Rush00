<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/products.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
	require_once($rootname.'/redirect.php');
  	require_once($rootname.'/check_sign_in.php');
  	amenu();
?>

	<div id="forme">
	<?php

	$group = file_get_contents('json/groups.json');
	$group = json_decode($group, true);
	foreach ($group as $g)
	{
		if ($g['gname'] === $_POST['gname'])
		{
echo'	<div id="forme">
		<div id="dep">
			<form action="modg.php" method="post">';
echo "			<input type='text' name='gname' value='{$g[gname]}' placeholder='Pseudo'>";
echo "			<input type='text' name='newgname' value='{$g[gname]}' placeholder='Pseudo'>";

echo'			<input type="checkbox" name="Validate"> Valider les modification</input>
				<input type="checkbox" name="Supress"> Supprimer le produit</input>
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>';
	}
}
	?>
<?php

if ($_POST['Validate'] === "on")
{

$group = file_get_contents('json/products.json');
$group = json_decode($group, true);

foreach ($group as $g => $value)
	{
		if ($_POST['newgname'] !== NULL)
			{
					$group[$g]['gname'] = $_POST['newgname'];
			}
	}

	$products = json_encode($group);
file_put_contents('json/groups.json', $products);
	redirect('mod_groups.php');
}

if ($_POST['Supress'] === "on")
{

$group = file_get_contents('json/groups.json');
$group = json_decode($group, true);

foreach ($group as $p => $value)
	{
		echo "<br>".$p."<br>";

		if($group[$p]['gname'] === $_POST['gname'])
		{
			unset($group[$p]);
		}

	$groups = json_encode($group);
	file_put_contents('json/groups.json', $groups);
	redirect('mod_groups.php');
}
}
?>
</div>
</div>
</body>
</html>
