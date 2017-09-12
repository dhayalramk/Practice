<?php
  
    $_fp = fopen("php://stdin", "r");
    $n = trim(fgets($_fp));

    $arr = explode(' ',trim(fgets($_fp)));
    $zero = 0;
    $neg = 0;
    $pos = 0;

    foreach($arr as $v){
        if($v == 0){
            $zero++; 
        }else if($v < 0){
            $neg++;
        }else{
            $pos++;
        }
    }

    echo  implode(PHP_EOL, [bcdiv ($pos,$n,3), bcdiv ($neg,$n,3),bcdiv ($zero,$n,3)]);
?>