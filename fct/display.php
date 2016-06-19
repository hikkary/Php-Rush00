<?php

function last3()
{
	$p = file_get_contents('json/products.json');
			$p = json_decode($p, true);
			$p = array_reverse($p);
			$p = array_chunk($p, 2);
			foreach ($p[0] as $product)
			{
				echo "<img src='{$product['image']}'/>" ."<br>";
				echo($product['name']."<br>");
				echo($product['price']."$"."<br>"."<br>");
				echo ' <form  action="add_panier.php" method="post">'."<br>";
				echo '<input type="number" name="qty" value="1">';
			echo"<input type='submit' name='ajout' value='{$product[name]}' placeholder='Name'>"."<br>";
			echo($product['description']."<br>");
			echo ' </form>';
			}
}


function group($group)
{
	if(!$group)
		$group = "Pokemon";
	$p = file_get_contents('json/products.json');
			$p = json_decode($p, true);

			foreach ($p as $product)
			{
				if((stripos($product['group'],$group)) !== FALSE )
				{
					echo "<img src='{$product['image']}'/>" ."<br>";
					echo($product['name']."<br>");
					echo($product['price']."$"."<br>"."<br>");
					echo ' <form  action="add_panier.php" method="post">'."<br>";
					echo '<input type="number" name="qty" value="1">';
				echo"<input type='submit' name='ajout' value='{$product[name]}' placeholder='Name'>"."<br>";
				echo($product['description']."<br>");
				echo ' </form>';
				echo ' <hr>';
			}
			}
}

function group2($group)
{
	if(!$group)
		$group = "Pokemon";
		$p = file_get_contents('json/products.json');
		$p = json_decode($p, true);
		$i = 0;
			foreach ($p as $product)
			{
				if((stripos($product['group'],$group)) !== FALSE && $i < 2)
				{

					echo "<img src='{$product['image']}'/>" ."<br>";
					echo($product['name']."<br>");
					echo($product['price']."$"."<br>"."<br>");
					echo ' <form  action="add_panier.php" method="post">'."<br>";
					echo '<input type="number" name="qty" value="1">';
					echo"<input type='submit' name='ajout' value='{$product[name]}' placeholder='Name'>"."<br>";
					echo($product['description']."<br>");
					echo ' </form>';
					$i++;
			}
			}

}




?>
