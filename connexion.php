<?php
session_start();
?>
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
	require_once($rootname.'/redirect.php');
  	tmenu();
?>

	<div id="forme">
	<?php
	  	if ($_SESSION['pseudo'])
  	{
  		echo "<br>"."Veuillez vous déconnecter";
  		redirect('index.php');
  		exit();
  	}?>
		<div id="dep">
			<form action="connect.php" method="post">
				<input type="text" name="pseudo" placeholder="Pseudo">
				<input type="password" name="pwd" placeholder="Mot de passe">
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
