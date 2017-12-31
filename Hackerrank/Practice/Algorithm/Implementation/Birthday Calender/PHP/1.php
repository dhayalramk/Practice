<?php

$handle = fopen ("php://stdin", "r");
function solve($n, $s, $d, $m){
    $sum = [];
    $c=0;
    $sum[0]=0;
    for( $i = 0; $i < $n; $i++ )        $sum[$i+1] = $sum[$i]+$s[$i];
    for( $i = 0; $i <= $n-$m; $i++ )    $c += ($sum[$i+$m]-$sum[$i]==$d) ? 1 : 0;
    return $c;
}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";

?>
