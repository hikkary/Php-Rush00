<?php
 session_start();
$rootname = getcwd();
require_once($rootname.'/redirect.php');

 echo "Produit ajouté au panier"."<br>";

 $_SESSION['tab'] = array_merge((array) $_SESSION['tab'],(array)  $_POST['ajout']);

 $_SESSION['qty'] = array_merge((array) $_SESSION['qty'],(array)  $_POST['qty']);

 redirect('boutique.php');
?>
