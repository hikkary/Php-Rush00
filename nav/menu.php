<?php
function tmenu()
{
	$rootname = getcwd();
	$m = file_get_contents($rootname.'/nav/menu.html');
	echo $m;
}

function amenu()
{
	$rootname = getcwd();
	$m = file_get_contents($rootname.'/nav/amenu.html');
	echo $m;
}
?>
