<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/panier.css"/>
	<title>Poké-Shop</title>
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
				$order = file_get_contents('json/orders.json');
				if($order)
				{
					$stock = array("");
					$order = file_get_contents('json/orders.json');
					$order = json_decode($order, true);
					foreach ($order as $key => $value) {

						if($key === $_SESSION['pseudo'])
						{

							echo "Votre commande est en cours de traitement";
							exit();
						}
					}
				}
					if (!$_SESSION['tab'])
					{
						echo "Le panier est vide"."<br>";
					}
					else
					{
						$i = 0;
						$_SESSION['total'] = 0;
						foreach (array_combine($_SESSION['tab'], $_SESSION['qty']) as $poke => $qty )
						{
			 				if($poke)
			 				{
				 				echo $poke." ".cprice($poke)."$ "."x".$qty." "."= ".cprice($poke) * $qty."$"."<br>";
			 					$tmp =  $poke." ".cprice($poke)."$ "."x".$qty." "."= ".cprice($poke) * $qty."$"."<br>";
			 				}

			 				$_SESSION['total'] += cprice($poke) * $qty;
			 				$stock[$i] = $tmp;
			 				$i++;
			 			}
			 		}
			 		$total = $_SESSION[total];
			 		echo "<br>"."Cout total  ".$total."$"."<br>";
			 	if ($_SESSION['pseudo'] == "")
				{
					echo "Vous devez vous connecter pour valider votre commande"."<br>";
					echo ' <form  action="panier.php" method="post">'."<br>";
					echo'	<input type="checkbox" name="Supress"> Supprimer le panier</input>
							<input type="submit" name="submit" value="OK"/>
							</form>
						</div>
					</div>';
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

		if ($_POST['Validate'] === "on")
		{
			$order = file_get_contents('json/orders.json');
			$order = json_decode($order, true);
			$order[$_SESSION[pseudo]] = $stock;
			$order = json_encode($order);
			$order = file_put_contents('json/orders.json', $order);
			unset($stock);
			redirect('panier.php');
		}
		if ($_POST['Supress'] === "on")
		{
			unset($_SESSION['total']);
			unset($_SESSION['tab']);
			unset($_SESSION['qty']);
			unset($stock);
			redirect('panier.php');
		}

	?>

	</div>

</div>
</div>
</body>
</html>
