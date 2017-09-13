<?php
$n = file_get_contents("php://stdin");
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        echo ($j < $n-$i-1) ? ' ' : '#';
    }   
    echo PHP_EOL;
}
?>
