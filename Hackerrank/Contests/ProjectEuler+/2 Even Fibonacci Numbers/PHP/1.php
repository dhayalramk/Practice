<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%ld",$n);
    $total = 0;
    $i = 0;
    $j = 1;
    while($j <= $n){
        $total += $j%2 == 0 ? $j : 0;
        $temp = $j;
        $j = $i + $j;
        $i = $temp;
    }
    echo $total.PHP_EOL;
}

?>
