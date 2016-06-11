<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/inscription.css"/>
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

	<div id="forme">
		<div id="dep">
			<form action="create.php" method="post">
				<input type="text" name="fname" placeholder="First Name">
				<input type="text" name="lname" placeholder="Last Name">
				<input type="text" name="pseudo" placeholder="Pseudo">
				<input type="email" name="email" placeholder="E-mail">
				<input type="tel" name="tel" placeholder="Mobile">
				<input type="password" name="pwd" placeholder="Mot de passe">
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
