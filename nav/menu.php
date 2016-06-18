<?php
function tmenu()
{
	$rootname = getcwd();
	$m = file_get_contents($rootname.'/nav/tmenu.php');
	echo $m;
}

function amenu()
{
	$rootname = getcwd();
	$m = file_get_contents($rootname.'/nav/amenu.html');
	echo $m;
}
?>
