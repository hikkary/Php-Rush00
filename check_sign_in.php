<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');

function cpseudo($pseudo, $tab)
{
	foreach ($tab as $name)
	{
		if($name['pseudo'] === $pseudo)
		{
			echo "That pseudo is non available"."<br/>";
			redirect('inscription.php');
			exit();
		}
	}
}

function cemail($email, $tab)
{
	foreach ($tab as $name)
	{
		if($name['email'] === $email)
		{
			redirect('inscription.php');
			$mess = "This email is already used";
			print($mess);
			exit();
		}
	}
}

function ctel($phone, $tab)
{
	foreach ($tab as $name)
	{
		if($name['tel'] === $phone)
		{
			$mess = "This phone is already used";
			redirect('inscription.php');
			print($mess);
			exit();
		}
	}
}

function cname($product, $tab)
{
	foreach ($tab as $name)
	{
		if($name['name'] === $product)
		{
			echo "That Pokemon is Already in sell"."<br/>";
			redirect('products.php');
			exit();
		}
	}
}

function cprice($product)
{
	$tab = file_get_contents('json/products.json');
	$tab = json_decode($tab, true);

	foreach ($tab as $name)
	{
		if($name['name'] === $product)
		{
			return $name['price'];
		}
	}
}


?>
