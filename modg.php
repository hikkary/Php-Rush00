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

	$product = file_get_contents('json/products.json');
	$product = json_decode($product, true);

		foreach ($product as $p)
		{
			if ($p['name'] === $_POST['name'])
			{
				echo "group : ".$p['group']."<br>";
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
			echo "<option> NONE";
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
			echo "<option> NONE";
			if ($p['name'] === $_POST['name'])
			{
				$gr = explode(":", $p['group']);
				foreach ($gr as $groups)
				{
					echo "<option>";
					echo $groups;
				}
			}

	echo '</SELECT>
		<br>'
	;

echo"			<input type='text' name='name' value='{$p[gname]}' placeholder='Name'>";

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
			if ($_POST['group'] !== NULL && $_POST['group'] !== "NONE" )
			{
					$tmp2 = explode(":", $product[$p]['group']);
					caddgroup($_POST['group'], $tmp2);
					$product[$p]['group'] = $product[$p]['group'].":".$_POST['group'];

			}
			if ($_POST['remove'] !== NULL && $_POST['remove'] !== "NONE")
			{
					$tmp = explode(":", $product[$p]['group']);
					foreach ($tmp as $key => $value)
					{
						echo $key." ".$value."<br>";
						echo $tmp[$key]." ".$value."<br>";
						if($_POST['remove'] === $value)
						 	unset($tmp[$key]);
					}
					print_r($tmp);
					$product[$p]['group'] = implode(":", $tmp);
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
