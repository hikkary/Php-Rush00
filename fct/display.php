<?php

function last3()
{
	$p = file_get_contents('json/products.json');
			$p = json_decode($p, true);
			$p = array_reverse($p);
			$p = array_chunk($p, 3);
			foreach ($p[0] as $product)
			{
				echo "<img src='{$product['image']}'/>";
				print($product['name']." &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ".$product['price']."$");
				echo ' <form  action="add_panier.php" method="post">'."<br>";
				echo '<input type="number" name="qty" value="1">';
			echo"<input type='submit' name='ajout' value='{$product[name]}' placeholder='Name'>";
			echo ' </form>';
			}
}

?>
