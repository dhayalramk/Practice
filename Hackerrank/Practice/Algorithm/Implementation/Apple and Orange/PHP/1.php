<?php
    $arr = explode(PHP_EOL, file_get_contents("php://stdin"));
    list($s,$t) = explode(" ", $arr[0]);
    list($a,$b) = explode(" ", $arr[1]);
    list($m,$n) = explode(" ", $arr[2]);
    $aList      = explode(" ", $arr[3]);
    $bList      = explode(" ", $arr[4]);

    $aCount = $bCount = 0;
    foreach($aList as $al){
        $tmp = $al + $a;
        $aCount += ($tmp >= $s && $tmp <= $t) ? 1 : 0;
    }
    foreach($bList as $bl){
        $tmp = $bl + $b;
        $bCount += ($tmp >= $s && $tmp <= $t) ? 1 : 0;
    }
    echo $aCount.PHP_EOL.$bCount;
?>
