<?php
$rootname = dirname(__DIR__, 1);
printf($rootname);
require_once($rootname.'/redirect.php');

function cpseudo($pseudo, $tab)
{
	foreach ($tab as $name)
	{
		if($name['pseudo'] === $pseudo)
		{
			echo "That pseudo is non available"."<br/>";
			redirect();
			foreach ($tab as $key => $value)
			{

				echo("[".$key."] : ".$value)."<br/>";
			}
			// echo '<META HTTP-EQUIV="Refresh" Content="3; URL=/inscription.php">';
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
		if($name['phone'] === $phone)
		{
			$mess = "This phone is already used";
			print($mess);
			exit();
		}
	}
}

if($_POST['fname'] === "" | $_POST['lname'] === "" | $_POST['pseudo'] === "" | $_POST['email'] === "" | $_POST['tel'] === "" | $_POST['pwd'] === "")
	{
		$error = "Veuillez remplir tout les champs";
		echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
		exit();
	}
	if(file_exists('json/users.json'))
	{
		$new_user =  array('fname' => $_POST[fname] , 'lname' => $_POST[lname],'pseudo' => $_POST[pseudo], 'email' => $_POST[email], 'tel' => $_POST['tel'], 'pwd' => $_POST[pwd]);
		$u = file_get_contents('json/users.json');
		$u = json_decode($u, true);
		cpseudo($_POST[pseudo], $u);
		cemail($_POST[email],$u);
		ctel($_POST[tel],$u);
		$u[] = $new_user;
		$u =json_encode($u);
		file_put_contents('json/users.json', $u);
	}


	// else
	// {
	// 	echo '<script type="text/javascript">window.alert("'."Invincible !".'");</script>';
	// 	exit();
	// }

?>
