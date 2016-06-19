<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/inscription.css"/>
	<title>Poké-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	amenu();
?>

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
