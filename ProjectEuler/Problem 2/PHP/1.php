<?php
    $arr = explode(PHP_EOL,file_get_contents("php://stdin"));
    array_shift($arr);
    foreach($arr as $n){
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
