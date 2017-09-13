<?php
    $arr = explode(" ", file_get_contents("php://stdin"));
    sort($arr);
    echo array_sum(array_slice($arr,0,4)) . ' ' . array_sum(array_slice($arr,-4));
?>
