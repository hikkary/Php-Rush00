<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
?>

<?php
$user = json_decode(file_get_contents('json/users.json'), true);
print_r($user);
// foreach ($user as $u) {
// 	print_r($u);
// 	# code...
foreach ($user as $u)
{
	print($u['lname']."\n");
}
print_r($_SERVER);
?>
