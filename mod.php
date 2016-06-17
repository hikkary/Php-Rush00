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
  	amenu();
?>

	<div id="forme">
	<?php

	$product = file_get_contents('json/products.json');
	$product = json_decode($product, true);

		foreach ($product as $p)
		{
			if ($p['name'] === $_POST['name'])
			{
				echo "ref : ".$p['ref']."<br>";
				echo "name : ".$p['name']."<br>";
				echo "price : ".$p['price']."<br>";
				echo "image : ".$p['image']."<br>";
				echo "None ? : ".$p['None']."<br>";
				echo "Fire ? : ".$p['Fire']."<br>";
				echo "Plant ? : ".$p['Plant']."<br>";
				echo "Water ? : ".$p['Water']."<br>";
				echo "Rock ? : ".$p['Rock']."<br>";
				echo "Poison ? : ".$p['Poison']."<br>";
				echo "description : ".$p['description']."<br>";
	echo '<div id="dep">
	<br>
			<form  action="mod.php" method="post">
			<label for="group">Add your product to a group :</label><br />
			<SELECT  name="group" size="1">';
			$u = file_get_contents('json/groups.json');
			$u = json_decode($u, true);
			$u = array_reverse($u);

			foreach ($u as $user)
			{
				//echo "<img src='{$user['image']}'/>";
				echo "<option>";
				print($user['gname']);
			}
	echo '</SELECT>
		<br>
		';
	echo'	<label for="remove">Remove your product from a group :</label><br />
			<SELECT  name="remove" size="1">';
			$u = file_get_contents('json/products.json');
			$u = json_decode($u, true);
			$u = array_reverse($u);
			foreach ($u as $user)
			{
				echo "<option>";
				while ($user['group']) {

					foreach ($user['group'] as $user2)
					{
						print($user2);
					}
				}
			}
	echo '</SELECT>';

echo"			<input type='text' name='name' value='{$p[name]}' placeholder='Name'>";
echo"				<input type='text' name='newname' value='{$p[name]}' placeholder='New Name'>";
echo "			<input type='number' name='price' value='{$p[price]}' placeholder='Price'>
					<br/>";

echo '			    <label for="type">Select Types :</label><br />
					  <input type="checkbox" name="None">None</input>
					  <input type="checkbox" name="Fire">Fire</input>
					  <input type="checkbox" name="Plant">Plant</input>';
echo "					  <input type='checkbox' name='Water' checked='{$p[Water]}'>Water</input>";
echo'					  <input type="checkbox" name="Rock">Rock</input>
					  <input type="checkbox" name="Poison">Poison</input>
				</select>
				<br/>
					<br/>';

echo "			<input type='url' name='image' value='{$p[image]}' placeholder='url de l'image'>";

echo "				<input type='text' name='description' value='{$p[description]}' placeholder='Describe the product'>";
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

$product = file_get_contents('json/products.json');
$product = json_decode($product, true);

foreach ($product as $p => $value)
	{
		echo "<br>".$p."<br>";

		if($product[$p]['name'] === $_POST['name'])
		{
			if ($_POST['ref'] !== NULL)
			{
					$product[$p]['ref'] = $_POST['ref'];
			}
			if ($_POST['newname'] !== NULL)
			{
					$product[$p]['name'] = $_POST['newname'];
			}
			if ($_POST['price'] !== NULL)
			{
					$product[$p]['price'] = $_POST['price'];
			}
				if ($_POST['None'] !== NULL)
			{
					$product[$p]['None'] = $_POST['None'];
			}
				if ($_POST['Fire'] !== NULL)
			{
					$product[$p]['Fire'] = $_POST['Fire'];
			}
				if ($_POST['Plant'] !== NULL)
			{
					$product[$p]['Plant'] = $_POST['Plant'];
			}
				if ($_POST['Water'] !== NULL)
			{
					$product[$p]['Water'] = $_POST['Water'];
			}
			if ($_POST['Rock'] !== NULL)
			{
					$product[$p]['Rock'] = $_POST['Rock'];
			}
				if ($_POST['Poison'] !== NULL)
			{
					$product[$p]['Poison'] = $_POST['Poison'];
			}
			if ($_POST['image'] !== NULL)
			{
					$product[$p]['image'] = $_POST['image'];
			}
			if ($_POST['description'] !== NULL)
			{
					$product[$p]['description'] = $_POST['description'];
			}
	}
			}

	$products = json_encode($product);
file_put_contents('json/products.json', $products);
	redirect('mod_products.php');
}

if ($_POST['Supress'] === "on")
{

$product = file_get_contents('json/products.json');
$product = json_decode($product, true);

foreach ($product as $p => $value)
	{
		echo "<br>".$p."<br>";

		if($product[$p]['name'] === $_POST['name'])
		{
			unset($product[$p]);
		}

	$products = json_encode($product);
	file_put_contents('json/products.json', $products);
	redirect('mod_products.php');
}
}
?>
</div>
</div>
</body>
</html>
