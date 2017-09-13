<?php
    $arr = explode(' ', explode(PHP_EOL,file_get_contents("php://stdin"))[1]);

    $min = $max = $arr[0];
    $mi = $ma = 0;
    foreach($arr as $a){
        if($min > $a){
            $min = $a;
            $mi++;
        }else  if($a > $max){
            $max = $a;
            $ma++;
        }
    }
    echo $ma.' '.$mi;

?>
