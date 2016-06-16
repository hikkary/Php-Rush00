<?php
 session_start();
$rootname = getcwd();
require_once($rootname.'/redirect.php');
 $_POST['ajout'] = str_split($_POST['ajout'], strlen($_POST['ajout']));
 $_POST['qty'] = str_split($_POST['qty'], strlen($_POST['qty']));
 echo "Produit ajouté au panier";
  if (!$_SESSION['tab'])
  {
  	$_SESSION['tab'] = array();
  }
 if (!$_SESSION['qty'])
 {
   	$_SESSION['qty'] = array();
 }
 $_SESSION['tab'] = array_merge($_SESSION['tab'], $_POST['ajout']);
 $_SESSION['qty'] = array_merge($_SESSION['qty'], $_POST['qty']);

 redirect('boutique.php');
?>
