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

	<form action="mod.php" method="post">
	<label for="name">Select The product to modify :</label><br />
	<SELECT  name="name" size="1">
	<?php
			$p = file_get_contents('json/products.json');
			$p = json_decode($p, true);
			$p = array_reverse($p);

			foreach ($p as $product)
			{
				echo "<option>";
				print($product['name']);
			}

	?>
	<input type="submit" name="submit" value="OK"/>
	</SELECT>
	</form>

</body>
</html>
