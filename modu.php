<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/products.css"/>
	<title>Poké-Shop</title>
</head>
<body>
<?php

	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
	require_once($rootname.'/redirect.php');
  	amenu();
?>
	<div id="forme">
	<?php
	$user = file_get_contents('json/users.json');
	$user = json_decode($user, true);

		foreach ($user as $u)
		{
			if ($u['pseudo'] === $_POST['pseudo'])
			{
				echo "fname : ".$u['fname']."<br>";
				echo "lname : ".$u['lname']."<br>";
				echo "pseudo : ".$u['pseudo']."<br>";
				echo "email : ".$u['email']."<br>";
				echo "tel  : ".$u['tel']."<br>";
				echo "password : ".$u['password']."<br>";

echo'	<div id="forme">
		<div id="dep">
			<form action="modu.php" method="post">';
echo "			<input type='text' name='fname' value='{$u[fname]}' placeholder='First Name'> ";
echo "			<input type='text' name='lname' value='{$u[lname]}' placeholder='Last Name'> ";
echo "			<input type='text' name='pseudo' value='{$u[pseudo]}' placeholder='Pseudo'>";
echo "			<input type='text' name='newpseudo' value='{$u[pseudo]}' placeholder='Pseudo'>";
echo "			<input type='email' name='email' value='{$u[email]}' placeholder='E-mail'> ";
echo "			<input type='tel' name='tel' value='{$u[tel]}' placeholder='Mobile'>";
echo "			<input type='password' name='pwd' value='{$u[pwd]}' placeholder='Mot de passe'>";


echo'			<input type="checkbox" name="Validate"> Valider les modification</input>
				<input type="checkbox" name="Supress"> Supprimer l\'utilisateur</input>
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>';
			}
		}
	?>
<?php

if ($_POST['Validate'] === "on")
{

$user = file_get_contents('json/users.json');
$user = json_decode($user, true);

foreach ($user as $u => $value)
	{
		echo "<br>".$u."<br>";

		if($user[$u]['pseudo'] === $_POST['pseudo'])
		{
			if ($_POST['fname'] !== NULL)
			{
					$user[$u]['fname'] = $_POST['fname'];
			}
			if ($_POST['lname'] !== NULL)
			{
					$user[$u]['lname'] = $_POST['lname'];
			}
			if ($_POST['newpseudo'] !== NULL)
			{
					$user[$u]['pseudo'] = $_POST['newpseudo'];
			}
			if ($_POST['email'] !== NULL)
			{
					$user[$u]['email'] = $_POST['email'];
			}
				if ($_POST['tel'] !== NULL)
			{
					$user[$u]['tel'] = $_POST['tel'];
			}
				if ($_POST['pwd'] !== NULL)
			{
					$user[$u]['pwd'] = $_POST['pwd'];
			}
	}
			}

	$users = json_encode($user);
file_put_contents('json/users.json', $users);
	redirect('mod_users.php');
}

if ($_POST['Supress'] === "on")
{

$user = file_get_contents('json/users.json');
$user = json_decode($user, true);

foreach ($user as $u => $value)
	{
		echo "<br>".$u."<br>";

		if($user[$u]['pseudo'] === $_POST['pseudo'])
		{
			unset($user[$u]);
		}

	$users = json_encode($user);
	file_put_contents('json/users.json', $users);
	redirect('mod_users.php');
}
}
?>
</div>
</div>
</body>
</html>

