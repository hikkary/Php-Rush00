<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
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
		<h1>Bienvenue dans l'interface d'administration</h1>
			<div id="users">
				<h1 class="title" ="title">Last Users</h1>
					<?php
						$u = file_get_contents('json/users.json');
						$u = json_decode($u, true);
						$u = array_reverse($u);
						$u = array_chunk($u, 10);
						foreach ($u[0] as $user)
						{
							print($user['pseudo']."<br>");
						}
					?>
			</div>
		<div id="products">
			<h1 class="title">Last Product</h1>
				<?php
					$p = file_get_contents('json/products.json');
					$p = json_decode($p, true);
					$p = array_reverse($p);
					$p = array_chunk($p, 10);
					foreach ($p[0] as $product)
					{
						print($product['name']."<br>");
					}

				?>
		</div>
	</div>
</div>
</div>
</body>
</html>
