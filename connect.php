<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');
require_once($rootname.'/check_sign_in.php');
session_start();

if ($_POST['pseudo'] === "" || $_POST['pwd'] === "")
{
	echo "Veuillez remplir tout les champs"."<br>";
	redirect('connexion.php');
	exit();
}

$tab = file_get_contents('json/users.json');
$tab = json_decode($tab, true);

if ($_POST["submit"] == "OK")
{
	if ((auth($_POST['pseudo'], $_POST['pwd'],$tab)) === 1)
	{
		echo "Bonjour"." ".$_POST['pseudo'];
	}
	else
	{
		echo "incorrect Pseudo or Password";
		exit();
	}

	if ($_POST["pseudo"])
 		$_SESSION["pseudo"] = $_POST["pseudo"];
 	if ($_POST["pwd"])
 		$_SESSION["pwd"] = $_POST["pwd"];
 	if (!$_SESSION["pseudo"])
		$_SESSION["pseudo"] = "";
	if (!$_SESSION["pwd"])
		$_SESSION["pwd"] = "";
}
redirect('index.php');
?>
