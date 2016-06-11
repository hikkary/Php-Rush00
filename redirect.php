<?php

$rootname = dirname(__DIR__);
print($rootname."<br/>");
function redirect()
{
	print("Script ".$_SERVER['SCRIPT_NAME']."<br/>");
	$requestData = array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1);
	print_r($requestData."<br/>");
}
?>
