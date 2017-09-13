<?php
    list($line1,$line2,$line3) = explode(PHP_EOL,file_get_contents("php://stdin"));
    list($n,$m) = explode(' ', $line1);
    $line2 = explode(' ', $line2);
    $line3 = explode(' ', $line3);
    $aMax = max($line2);
    $bMin = min($line3);
    $total = 0;
    $overAll = array_merge($line2,$line3);
    for($i=$aMax;$i<=$bMin;$i++){
        $flag = true;
        foreach($overAll as $key => $value){
            if($key < $n && $i % $value != 0){
                $flag = false;
                continue;
            }else if($key >= $n && $value % $i != 0){
                $flag = false;
                continue;
            }
        }
        $total += $flag ? 1 : 0;
    }
    echo $total;
?>