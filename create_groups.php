<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/inscription.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	tmenu();
?>

	<div id="forme">
		<div id="dep">
			<form action="g_create.php" method="post">
				<input type="text" name="gname" placeholder="Group Name">
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
