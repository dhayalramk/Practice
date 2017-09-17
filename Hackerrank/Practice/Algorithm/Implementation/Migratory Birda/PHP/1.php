<?php
    $arr = array_count_values(explode(' ',explode(PHP_EOL,file_get_contents('php://stdin'))[1]));
    $max = 0;
    $ans = 0;
    foreach($arr as $k => $v){
        if($v >= $max){
            if($v > $max){
                $ans = $k;
                $max = $v;
            }else{
                $ans = ( $ans > $k ) ? $k : $ans; 
            }
        }
    }
    echo $ans;
?>
