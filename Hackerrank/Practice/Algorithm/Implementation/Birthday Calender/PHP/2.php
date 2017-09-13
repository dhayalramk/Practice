<?php

function solve($n, $s, $d, $m){
    
}
    list($n,$s,$temp) = explode(PHP_EOL,file_get_contents("php://stdin"));
    $s = explode(' ', $s);
    list($d,$m) = explode(' ', $temp);

    $sum = [];
    $c=0;
    $sum[0]=0;
    for( $i = 0; $i < $n; $i++ )        $sum[$i+1] = $sum[$i]+$s[$i];
    for( $i = 0; $i <= $n-$m; $i++ )    $c += ($sum[$i+$m]-$sum[$i]==$d) ? 1 : 0;
    echo $c;
?>
