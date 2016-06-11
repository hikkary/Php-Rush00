#!/usr/bin/php
<?php
	if (!file_exists('json/users.json'))
	{
		$users[] =  array('fname' => Kerkeb , 'lname' => Zakaria,'pseudo' => admin, 'email' => 'z.kerkeb@gmail.com', 'pwd' => 123456);
		$users = json_encode($users);
		file_put_contents('json/users.json',$users);
		echo "Json users created\n";
	}
	if (!file_exists('json/products.json'))
	{
		file_put_contents('json/products.json', NULL);
		echo "Json products created\n";
	}
	// $v = file_get_contents('json/users.json');
	// print_r(json_decode($v));
?>
