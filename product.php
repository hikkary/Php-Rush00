<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');
require_once($rootname.'/check_sign_in.php');

if($_POST['ref'] === "" | $_POST['name'] === "" | $_POST['price'] === "" | $_POST['image'] === "" | $_POST['description'] === "")
	{
		$error = "Veuillez remplir tout les champs";
		echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
		redirect(products.php);
		exit();
	}
	if(file_exists('json/products.json'))
	{
		$new_product =  array('ref' => $_POST[ref] , 'name' => $_POST[name],'price' => $_POST[price], 'image' => $_POST[image], 'None' => $_POST[None], 'Fire' => $_POST[Fire],'Plant' => $_POST[Plant],'Water' => $_POST[Water],
		'Rock' => $_POST[Rock],'Poison' => $_POST[Poison], 'description' => $_POST[description]);
		$u = file_get_contents('json/products.json');
		$u = json_decode($u, true);
		cname($_POST[name], $u);
		$u[] = $new_product;
		$u =json_encode($u);
		file_put_contents('json/products.json', $u);
		redirect('products.php');
	}
?>

