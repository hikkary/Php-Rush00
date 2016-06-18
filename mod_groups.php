<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/mproducts.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	amenu();
?>

	<div id="forme">

	<form action="modg.php" method="post">
	<label for="name">Select The Group to modify :</label><br />
	<SELECT  name="gname" size="1">
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
	</SELECT>
	</form>

</body>
</html>
