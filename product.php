<?php
//print($_POST['image']."<br/>");

foreach ($_FILES as $key => $value) {
	echo $key."/".$value."<br>";
}


foreach ($_POST as $key => $value) {
	echo $key."/".$value."<br>";
}

?>
