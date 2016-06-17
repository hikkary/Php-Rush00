<?php
session_start();
$rootname = getcwd();
require_once($rootname.'/redirect.php');

if ($_SESSION['pseudo'] === "admin" && $_SESSION['pwd'] === "123456")
	{
		header('Location: admin.php');
	}
else
{
	echo "Vous n'avez pas acces a cette partie du site";
	redirect('index.php');
}
?>
