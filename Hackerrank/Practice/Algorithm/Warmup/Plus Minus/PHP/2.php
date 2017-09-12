<?php
    list($n,$arr) = explode(PHP_EOL,file_get_contents('php://stdin'));
    $arr = explode(' ', $arr);
    $zero = $neg = $pos = 0;

    foreach($arr as $v){
        if($v == 0)     $zero++; 
        else if($v < 0) $neg++;
        else            $pos++;
    }

    echo  implode(PHP_EOL, [bcdiv ($pos,$n,3), bcdiv ($neg,$n,3),bcdiv ($zero,$n,3)]);
?>