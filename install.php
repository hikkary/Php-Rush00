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
		$products = file_get_contents('data/products.json');
		file_put_contents('json/products.json', $products);
		echo "Json products created\n";
	}
?>
