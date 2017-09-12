<?php

	$lines = explode(PHP_EOL, file_get_contents('php://stdin'));
	$count = array_shift($lines);
	$a = $b = 0;

	for ($i = 0; $i < $count; $i++){
	  $nums = explode(' ', $lines[$i]);
	  $a += $nums[$i];
	  $b += $nums[$count - $i - 1];
	} 
	echo abs($a - $b);
?>