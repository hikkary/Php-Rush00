<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/products.css"/>
	<title>Poke-Shop</title>
</head>
<body>
	<div id="content">
		<div id="tmenu">
			<ul>
			   <a href="admin.php"><li class="bout_g">Home</li></a>
				<a href="products.php"><li class="bout_g">Add Products</li></a>
				<a href="#"><li class="bout_g">Basket</li></a>
				<a href="#"><li class="bout_g">Nos Pokemons</li></a>
				<a href="#"><li class="bout_g">Nos Pokeballs</li></a>
				<a href="#"><li class="bout_d">Inscription</li></a>
				<a href="admin.php"><li id="admin" class="bout_d">Admin</li></a>
			</ul>
		</div>

	<div id="forme">
		<div id="dep">
			<form enctype="multipart/form-data" action="product.php" method="post" >
				<input class="radio" type="radio" name="ref" value="Pokemon"> Pokemon <br/>
				<input class="radio" type="radio" name="ref" value="Pokeball"> Pokeball<br/>

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
