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

	<form action="modu.php" method="post">
	<label for="pseudo">Select The user to modify :</label><br />
	<SELECT  name="pseudo" size="1">
	<?php
			$u = file_get_contents('json/users.json');
			$u = json_decode($u, true);
			$u = array_reverse($u);

			foreach ($u as $user)
			{
				//echo "<img src='{$user['image']}'/>";
				echo "<option>";
				print($user['pseudo']);
			}

	?>
	<input type="submit" name="submit" value="OK"/>
	</SELECT>
	</form>
</html>
