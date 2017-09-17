<?php
    $lines = explode(PHP_EOL, file_get_contents('php://stdin'));
    list($money,$n,$m) = explode(' ', $lines[0]);
    $keyboard = explode(' ', $lines[1]);
    $usbs = explode(' ', $lines[2]);

    sort($keyboard);
    sort($usbs);

    $ans = -1;

    if( $money >= ($keyboard[0] + $usbs[0]) ){
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$m;$j++){
                $temp = $keyboard[$i] + $usbs[$j];
               // echo $money.' '.$ans.' '. $temp.PHP_EOL;
                if($money >= $temp && $ans <= $temp){
                    $ans = $temp;    
                }
                
            }
        }
    }

    echo $ans;    
?>
