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
			$order = file_get_contents('json/orders.json');
			$order = json_decode($order, true);
			if (!$order)
			{
				echo "Aucune commande a valider"."<br>";
			}
			else
			{
				$i = 0;
				foreach ($order as $p => $value)
				{
					echo $p." " ;
					foreach ($order[$p] as $k)
					{
						echo $k;					}
					echo "<hr>";
					$i++;
				}
			}
			echo ' <form  action="basket.php" method="post">'."<br>";
				echo'			<input type="checkbox" name="Validate"> Valider la commande</input>
							<input type="submit" name="submit" value="OK"/>
						</form>
					</div>
				</div>';

		if ($_POST['Validate'] === "on")
		{
			file_put_contents('json/orders.json', NULL);
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
