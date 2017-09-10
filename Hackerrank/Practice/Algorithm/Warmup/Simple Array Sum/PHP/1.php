<?php

$handle = fopen ("php://stdin", "r");

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
echo array_sum($ar);

?>
