<?php
	list($n,$p)=explode(PHP_EOL,file_get_contents('php://stdin'));
	$n -= ($n%2 == 1) ? 1 : 0;
	$p -= ($p%2 == 1) ? 1 : 0;
	echo min( [ $p/2, $n/2 - $p/2 ]  );
?>
