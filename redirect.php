<?php

function redirect($url)
{
	$rootpath = array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1);
	// foreach ($rootpath as $key => $value) {
	// 	 echo $_SERVER['SCRIPT_NAME']."<br/>";
	// 	echo("[".$key."] : ".$value)."<br/>";
	// }
	echo '<META HTTP-EQUIV="Refresh" Content="2; URL=/' . $rootpath[1] ."/". $url . '">';
}
?>
