<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/panier.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	tmenu();
?>
<?php echo "bonjour ".$_SESSION['pseudo']?>
	<div id="forme">
		<h1>Panier</h1>
			<?php
				$rootname = getcwd();
				require_once($rootname."/check_sign_in.php");
				require_once($rootname."/redirect.php");
				$stock = array("");
				$stock[0] = array("");
					if (!$_SESSION['tab'])
					{
						echo "Le panier est vide";
					}
					else
					{
						foreach (array_combine($_SESSION['tab'], $_SESSION['qty']) as $poke => $qty )
						{
			 				echo $poke." ".$qty." ".cprice($poke) * $qty."$"."<br>";
			 				$stock[0][] =  $poke." ".$qty." ".cprice($poke) * $qty."$"."<br>";
			 				$stock = array_merge($stock, $stock[0]);
			 			}
			 		}
			 	if ($_SESSION['pseudo'] == "")
				{
					echo "Vous devez vous connecter pour valider votre commande";
				}
				else
				{
					echo ' <form  action="panier.php" method="post">'."<br>";
					echo'			<input type="checkbox" name="Validate"> Valider la commande</input>
								<input type="checkbox" name="Supress"> Supprimer le panier</input>
								<input type="submit" name="submit" value="OK"/>
							</form>
						</div>
					</div>';
				}
				$i = 0;
				// while($i <= count($stock))
				// {
				//  unset($stock[i]);
				//  $i++;
				// }
				// unset($stock[1]);
				// unset($stock[2]);

		if ($_POST['Validate'] === "on")
		{
			$_SESSION['valid'] = $stock;
		}
		if ($_POST['Supress'] === "on")
		{
			unset($_SESSION['tab']);
			unset($_SESSION['qty']);
			redirect('panier.php');
		}

	?>

	</div>

</div>
</div>
</body>
</html>
