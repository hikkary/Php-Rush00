<?php
session_start();
$rootname = getcwd();
require_once($rootname.'/redirect.php');
if ($_SESSION['pseudo'] !== "")
	$_SESSION['pseudo'] = "";
redirect('index.php');
?>
