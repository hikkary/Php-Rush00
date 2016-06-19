<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/products.css"/>
	<title>Poké-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	amenu();
?>

	<div id="forme">
	<?php
		echo '<div id="dep">
	<br>
			<form  action="product.php" method="post">
			<label for="group">Add your product to a group :</label><br />
			<SELECT  name="group" size="1">';
			$u = file_get_contents('json/groups.json');
			$u = json_decode($u, true);
			$u = array_reverse($u);

			foreach ($u as $user)
			{
				echo "<option>";
				print($user['gname']);
			}
	echo '</SELECT>
		<br>
		';
?>
				<input type="text" name="name" placeholder="Name">
				<input type="number" name="price" placeholder="Price">
					<br/>

			    <label for="type">Select Types :</label><br />
					  <input type="checkbox" value="ok"  name="None">None</input>
					  <input type="checkbox" value="ok"  name="Fire">Fire</input>
					  <input type="checkbox" value="ok"  name="Plant">Plant</input>
					  <input type="checkbox" value="ok"  name="Water">Water</input>
					  <input type="checkbox" value="ok" name="Rock">Rock</input>
					  <input type="checkbox" value="ok"  name="Poison">Poison</input>
				</select>
				<br/>
					<br/>

				<input type="url" name="image" placeholder="url de l'image">

				<input type="text" name="description" placeholder="Describe the product">
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
