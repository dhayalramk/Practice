<?php
    $arr = explode(PHP_EOL,file_get_contents("php://stdin"));
    for($i=1;$i<=$arr[0];$i++) 
        echo ( ($arr[$i] < 38 || round($arr[$i] % 5) < 3 ) ? $arr[$i] : (5 * round($arr[$i] / 5))).PHP_EOL;
?>
 