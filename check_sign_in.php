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

function caddgroup($grp, $tab)
{
	foreach ($tab as $groupe)
	{
		if($groupe === $grp)
		{
			echo "The Pokemon is in this Group already "."<br/>";
			redirect('mod_products.php');
			exit();
		}
	}
}

function cgroup($grp, $tab)
{
	foreach ($tab as $groupe)
	{
		if($groupe['pseudo'] === $grp)
		{
			echo "That Group already exist"."<br/>";
			redirect('create_groups.php');
			exit();
		}
	}
}


function auth($pseudo, $passwd , $tab)
{
	foreach ($tab as $elem)
	{
		if ($elem['pseudo'] === $pseudo && $elem['pwd'] === $passwd)
			return (1);

	}
	return (-1);
}

// function cpseudo2($pseudo, $passwd, $tab)
// {
// 	$verif = 0;
// 	$vpwd = 0;
// 	foreach ($tab as $name)
// 	{
// 		if($name['pseudo'] === $pseudo)
// 		{
// 			$verif = 1;
// 		}
// 	}
// 	foreach ($tab as $pwd)
// 	{
// 		if($pwd['pwd'] === $passwd)
// 		{
// 			$vpwd = 1;
// 		}
// 	}
// 	if ($verif !== 1 || $vpwd !== 1)
// 	{
// 		echo "Incorrect informations"."<br/>";
// 		redirect('connexion.php');
// 			exit();
// 	}
// }

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
