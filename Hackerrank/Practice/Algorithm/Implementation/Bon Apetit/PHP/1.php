<?php
    $lines = explode(PHP_EOL,file_get_contents('php://stdin'));
    list($n,$k) = explode(' ',$lines[0]);
    $arr = explode(' ' , $lines[1]);
    $paid = $lines[2];
 
    unset($arr[$k]);
    $total = array_sum($arr) / 2;
    echo ($total == $paid) ? 'Bon Appetit' : $paid - $total;
?>
