<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
	<title>Poke-Shop</title>
</head>
<body>
<?php
	$rootname = getcwd();
	require_once($rootname.'/nav/menu.php');
  	amenu();
?>
	<div id="forme">
		<h1>Bienvenue dans l'interface d'administration</h1>
			<div id="users">
				<h1 class="title" ="title">Last Users</h1>
					<?php
						$u = file_get_contents('json/users.json');
						$u = json_decode($u, true);
						$u = array_reverse($u);
						$u = array_chunk($u, 10);
						foreach ($u[0] as $user)
						{
							print($user['pseudo']."<br>");
						}
					?>
			</div>
		<div id="products">
			<h1 class="title">Last Product</h1>
				<?php
					$p = file_get_contents('json/products.json');
					$p = json_decode($p, true);
					$p = array_reverse($p);
					$p = array_chunk($p, 10);
					foreach ($p[0] as $product)
					{
						print($product['name']."<br>");
					}

				?>
		</div>
	</div>
</div>
</div>
</body>
</html>
