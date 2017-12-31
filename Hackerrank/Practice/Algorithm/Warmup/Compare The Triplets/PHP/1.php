<?php
    
	$fileContent = explode(PHP_EOL,file_get_contents('php://stdin'));
	$a = explode(' ',$fileContent[0]);
	$b = explode(' ',$fileContent[1]);
	echo (($a[0] > $b[0]) + ($a[1] > $b[1]) + ($a[2] > $b[2])) . ' '. (($a[0] < $b[0]) + ($a[1] < $b[1]) + ($a[2] < $b[2]));

?>