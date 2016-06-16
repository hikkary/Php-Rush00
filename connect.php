<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');
session_start();
if ($_POST["submit"] == "OK")
{
	if ($_POST["pseudo"])
 		$_SESSION["pseudo"] = $_POST["pseudo"];
 	if ($_POST["pwd"])
 		$_SESSION["pwd"] = $_POST["pwd"];
 	if (!$_SESSION["pseudo"])
		$_SESSION["pseudo"] = "";
	if (!$_SESSION["pwd"])
		$_SESSION["pwd"] = "";
}
echo "bonjour ".$_SESSION['pseudo'];
redirect('index.php');
?>
