<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/pokemon.css"/>
	<title>Poke-Shop</title>
</head>
<body>
	<div id="content">
		<div id="tmenu">
			<ul>
				<a href="index.php"><li class="bout_g">Accueil</li></a>
				<a href="boutique.php"><li class="bout_g">Boutique</li></a>
				<a href="pokemon.php"><li class="bout_g">Nos Pokemons</li></a>
				<a href="pokeball.php"><li class="bout_g">Nos Pokeballs</li></a>
				<a href="inscription.php"><li class="bout_d">Inscription</li></a>
				<a href="admin.php"><li id="admin" class="bout_d"> Admin</li></a>
			</ul>
		</div>
	</div>

<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Derniers Pokemon</h1>
	</a>
		<div class="affichage">
		<?php
			$p = file_get_contents('json/products.json');
			$p = json_decode($p, true);
			$p = array_reverse($p);
			$p = array_chunk($p, 3);
			foreach ($p[0] as $product)
			{
				echo "<img src='{$product['image']}'/>";
				print($product['name']." &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ".$product['price']."$");
			}

		?>
		</div>
</div>


<div class="poketop">
	<a href="#">
		<h1 class="poketitre">Nos Dernieres Pokeball</h1>
	</a>
</div>
<div id="">


</div>
</body>
</html>
