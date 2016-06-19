<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');
require_once($rootname.'/check_sign_in.php');

if($_POST['fname'] === "" | $_POST['lname'] === "" | $_POST['pseudo'] === "" | $_POST['email'] === "" | $_POST['tel'] === "" | $_POST['pwd'] === "")
	{
		$error = "Veuillez remplir tous les champs";
		echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
		redirect('index.php');
		exit();
	}
	if(file_exists('json/users.json'))
	{
		$new_user =  array('fname' => $_POST[fname] , 'lname' => $_POST[lname],'pseudo' => $_POST[pseudo], 'email' => $_POST[email], 'tel' => $_POST[tel], 'pwd' => $_POST[pwd]);
		$u = file_get_contents('json/users.json');
		$u = json_decode($u, true);
		cpseudo($_POST[pseudo], $u);
		cemail($_POST[email],$u);
		ctel($_POST[tel],$u);
		$u[] = $new_user;
		$u =json_encode($u);
		file_put_contents('json/users.json', $u);
		redirect('index.php');
	}
?>
