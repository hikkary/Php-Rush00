<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
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
		<h1>Commande en attente de validation</h1>
		<?php

			if (!$_SESSION['valid'])
			{
				echo "Aucune commande a valider"."<br>";
			}
			else
			{
				foreach ($_SESSION['valid'] as $p)
				{
					echo $p;
				}
			}
			echo "Cout total :".$_SESSION['total'];
			echo ' <form  action="basket.php" method="post">'."<br>";
				echo'			<input type="checkbox" name="Validate"> Valider la commande</input>
							<input type="submit" name="submit" value="OK"/>
						</form>
					</div>
				</div>';

		if ($_POST['Validate'] === "on")
		{
			unset($_SESSION['total']);
			unset($_SESSION['valid']);
			unset($valid);
			unset($_SESSION['tab']);
			unset($_SESSION['qty']);
			redirect('basket.php');
		}
		?>
	</div>
</div>
</div>
</body>
</html>
