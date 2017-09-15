<?php

    $lines = explode(PHP_EOL, file_get_contents("php://stdin"));
    $n = explode(' ', $lines[0])[0];
    $k = explode(' ', $lines[0])[1];
    $arr = explode(' ', $lines[1]);
    $count = 0;

    for($i=0;$i<$n-1;$i++)
        for( $j = $i+1; $j < $n; $j++ ) 
            $count += ($arr[$i]+$arr[$j]) % $k == 0 ? 1 : 0;
    
    echo $count . "\n";

?>
