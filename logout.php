<?php
session_start();
$rootname = getcwd();
require_once($rootname.'/redirect.php');
if ($_SESSION['pseudo'] !== "") {
	$_SESSION['pseudo'] = "";
	$_SESSION['total'] = "";
	$_SESSION['tab'] = "";
	$_SESSION['qty'] = "";
}
redirect('index.php');
?>
