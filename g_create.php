<?php
$rootname = getcwd();
require_once($rootname.'/redirect.php');
require_once($rootname.'/check_sign_in.php');

if($_POST['gname'] === "" )
	{
		$error = "Veuillez remplir tout les champs";
		echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
		redirect('create_groups.php');
		exit();
	}
	if(file_exists('json/groups.json'))
	{
		$new_group =  array('gname' => $_POST[gname]);
		$u = file_get_contents('json/groups.json');
		$u = json_decode($u, true);
		cgroup($_POST[gname],$u);
		$u[] = $new_group;
		$u =json_encode($u);
		file_put_contents('json/groups.json', $u);
		redirect('groups.php');
	}
?>
