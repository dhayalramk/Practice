<?php
    $arr = array_count_values(explode(' ',explode(PHP_EOL,file_get_contents('php://stdin'))[1]));
    $total = 0;
    foreach($arr as $a){
        $total += floor($a/2);
    }
    echo $total;
?>
