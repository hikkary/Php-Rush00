#!/usr/bin/php
<?php
	if (!file_exists('json/users.json'))
	{
		$users = file_get_contents('data/users.json');
		file_put_contents('json/users.json',$users);
		echo "Json users created\n";
	}
	if (!file_exists('json/products.json'))
	{
		$products = file_get_contents('data/products.json');
		file_put_contents('json/products.json', $products);
		echo "Json products created\n";
	}
	if (!file_exists('json/groups.json'))
	{
		$groups = file_get_contents('data/groups.json');
		file_put_contents('json/groups.json', $groups);
		echo "Json groups created\n";
	}
	if (!file_exists('json/orders.json'))
	{
		$orders = file_get_contents('data/orders.json');
		file_put_contents('json/orders.json', $orders);
		echo "Json orders created\n";
	}
?>
